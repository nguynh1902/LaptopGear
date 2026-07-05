<template>
    <div class="row mt">
        <div class="col-lg-12 text-center mb-2">
            <div class="d-inline-block">
                <h2 class="text-dark"><b>LỊCH SỬ ĐƠN HÀNG CỦA BẠN</b></h2>
                <div class="text-center">
                    <hr class="bg-dark mb-3" style="width: 100%; height: 4px; border: none; border-radius: 5px" />
                </div>
            </div>
        </div>
    </div>
    
    <div v-if="list_hoa_don.length === 0" class="text-center mt-5">
        <i class="fa-solid fa-box-open fa-4x text-muted mb-3"></i>
        <h4 class="text-muted">Bạn chưa có đơn hàng nào</h4>
        <router-link to="/trang-chu" class="btn btn-primary mt-3">Tiếp tục mua sắm</router-link>
    </div>
    
    <template v-for="(hoa_don, index) in list_hoa_don" :key="index">
        <div class="bg-white border rounded p-3 mb-4">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-start mb-2 border-bottom pb-2">
                <div>
                    <div class="fw-bold text-danger">Mã hóa đơn: {{ hoa_don.ma_hoa_don }}</div>
                    <div class="small text-muted d-flex flex-wrap">
                        <div class="me-3 "><strong>Họ tên:</strong> {{ hoa_don.ho_ten }}</div>
                        <div class="me-3 "><strong>SĐT:</strong> {{ hoa_don.sdt }}</div>
                        <div class="me-3 "><strong>Email:</strong> {{ hoa_don.email }}</div>
                        <div><strong class="">Địa chỉ:</strong> {{ hoa_don.dia_chi }}</div>
                    </div>
                </div>

                <div class="small mt-1" :class="hoa_don.tinh_trang == 0 ? 'text-danger' : 'text-success'">
                    <i class="bi bi-truck"></i>
                    <span v-if="hoa_don.tinh_trang == 0"><b>Đơn hàng đang chờ xét duyệt</b></span>
                    <span v-else><b>Đơn hàng đã được duyệt, đang giao đến bạn</b></span>
                </div>
            </div>

            <!-- Danh sách sản phẩm -->
            <div class="d-flex pt-3 border-bottom pb-3" v-for="(sp, idx) in hoa_don.san_phams" :key="idx">
                <img :src="sp.hinh" alt="sản phẩm" width="80" class="me-3 border" />
                <div class="flex-grow-1">
                    <div class="fw-semibold">{{ sp.ten_sp }}</div>
                    <div class="text-muted small">Số lượng: x{{ sp.so_luong }}</div>
                    <div class="text-muted small">Ghi chú: {{ sp.ghi_chu || 'Không có' }}</div>
                </div>
                <div class="text-end">
                    <div>{{ formatVND(sp.don_gia) }}</div>
                </div>
            </div>

            <!-- Tổng tiền -->
            <div class="d-flex justify-content-end mt-3">
                <div class="text-end">
                    <span class="me-2">Thành tiền:</span>
                    <span class="text-danger fw-bold fs-5">
                        {{ formatVND(tinhTong(hoa_don.san_phams)) }}
                    </span>
                </div>
            </div>

            <!-- Hành động -->
            <div class="d-flex justify-content-end mt-3">
                <button class="btn btn-danger me-2">Mua Lại</button>
                <button class="btn btn-outline-secondary me-2">Yêu Cầu Trả Hàng/Hoàn Tiền</button>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Thêm</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Liên hệ shop</a></li>
                        <li><a class="dropdown-item" href="#">Xem chi tiết</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </template>

</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            list_hoa_don: [],
        };
    },
    mounted() {
        this.getSanPham();
    },
    methods: {
        formatVND(number) {
            return new Intl.NumberFormat("vi-VI", { style: "currency", currency: "VND" }).format(number);
        },
        getHeaders() {
            return {
                headers: {
                    Authorization: `Bearer ${localStorage.getItem("khach_hang_login")}`
                }
            };
        },
        getSanPham() {
            axios.get("http://127.0.0.1:8000/api/khach-hang/hoa-don/get-data", this.getHeaders()).then((res) => {
                if(res.data.data) {
                    const raw = res.data.data;
                    const groupedMap = new Map();

                    raw.forEach((item) => {
                        const maHD = item.ma_hoa_don;

                        if (!groupedMap.has(maHD)) {
                            groupedMap.set(maHD, {
                                ma_hoa_don: maHD,
                                ho_ten: item.ho_ten,
                                sdt: item.sdt,
                                email: item.email,
                                dia_chi: item.dia_chi,
                                tinh_trang: item.tinh_trang,
                                san_phams: [],
                            });
                        }

                        groupedMap.get(maHD).san_phams.push({
                            ma_sp: item.ma_sp,
                            ten_sp: item.ten_sp,
                            don_gia: item.don_gia,
                            hinh: item.hinh,
                            so_luong: item.so_luong,
                            ghi_chu: item.ghi_chu,
                        });
                    });

                    this.list_hoa_don = Array.from(groupedMap.values());
                }
            }).catch(() => {
                this.$toast.error("Vui lòng đăng nhập để xem đơn hàng");
            });
        },


        // getSanPham() {
        //     axios.get("http://127.0.0.1:8000/api/khach-hang/hoa-don/get-data").then((res) => {
        //         const raw = res.data.data;

        //         const grouped = {};

        //         raw.forEach((item) => {
        //             const maHD = item.ma_hoa_don;

        //             if (!grouped[maHD]) {
        //                 grouped[maHD] = {
        //                     ma_hoa_don: maHD,
        //                     ho_ten: item.ho_ten,
        //                     sdt: item.sdt,
        //                     email: item.email,
        //                     dia_chi: item.dia_chi,
        //                     tinh_trang: item.tinh_trang,
        //                     san_phams: [],
        //                 };
        //             }

        //             grouped[maHD].san_phams.push({
        //                 ma_sp: item.ma_sp,
        //                 ten_sp: item.ten_sp,
        //                 don_gia: item.don_gia,
        //                 hinh: item.hinh,
        //                 so_luong: item.so_luong,
        //                 ghi_chu: item.ghi_chu,

        //             });
        //         });

        //         this.list_hoa_don = Object.values(grouped);
        //     });
        // },
        tinhTong(san_phams) {
            return san_phams.reduce((tong, sp) => tong + sp.don_gia * sp.so_luong, 0);
        },

    },
};
</script>

<style></style>
