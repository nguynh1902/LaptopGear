<template>
    <div class="row mt">
        <div class="col-lg-12 text-center mb-2">
            <div class="d-inline-block">
                <h2 class="text-dark"><b>GIỎ HÀNG</b></h2>
                <div class="text-center">
                    <hr class="bg-dark mb-3" style="width: 100%; height: 4px; border: none; border-radius: 5px" />
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row d-flex border-bottom py-2 fw-bold text-dark rounded">
                <div class="col-4 flex-grow-1"><input type="checkbox" class="me-2" />Tên Sản Phẩm</div>
                <div class="col-2 text-center">Đơn Giá</div>
                <div class="col-2 text-center">Số Lượng</div>
                <div class="col-2 text-center">Số Tiền</div>
                <div class="col-2 text-center">Thao Tác</div>
            </div>
        </div>
    </div>

    <template v-for="(item, index) in list_gio_hang" :key="index">
        <div class="card">
            <div class="card-body">
                <div class="row rounded mt-3 align-items-center text-center py-3">
                    <!-- Ảnh + Tên SP -->
                    <div class="col-4">
                        <!-- Hàng 1: Yêu thích + Danh mục -->
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge bg-danger me-4 ms-4">Yêu thích</span>
                            <span class="fw-semibold">Danh Mục: {{ item.ma_dm }}</span>
                        </div>

                        <!-- Hàng 2: Checkbox + ảnh + tên sản phẩm -->
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="me-2 mt-3" v-model="item.da_chon" />
                            <img :src="item.hinh" class="me-2" style="width: 70px; height: 70px" />
                            <div>
                                <div class="fw-semibold">{{ item.ten_sp }}</div>
                            </div>
                        </div>
                        <div class="text-danger small mt-2">Flash Sale bắt đầu lúc 15:00:00</div>
                    </div>

                    <!-- Đơn Giá -->
                    <div class="col-2">
                        <span class="text-muted text-decoration-line-through">{{ item.gia_cu }}</span><br />
                        <span class="text-danger fw-bold">{{ formatVND(item.don_gia) }}</span>
                    </div>

                    <!-- Số Lượng -->
                    <div class="col-2 d-flex justify-content-center">
                        <div class="input-group input-group-sm" style="max-width: 100px">
                            <button class="btn btn-outline-secondary" v-on:click="giamSoLuong(index)">-</button>
                            <input type="text" class="form-control text-center quantity-input" :value="item.so_luong"
                                readonly />
                            <button class="btn btn-outline-secondary" v-on:click="tangSoLuong(index)">+</button>
                        </div>
                    </div>

                    <!-- Số Tiền -->
                    <div class="col-2 text-danger fw-bold">{{ formatVND(item.don_gia) }}</div>

                    <!-- Thao Tác -->
                    <div class="col-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"
                            v-on:click="Object.assign(del_san_pham, item)" class="text-danger d-block">Xóa</a>
                        <a href="/khach-hang/san-pham" class="text-danger small">Tìm sản phẩm tương tự ▼</a>
                    </div>
                </div>
                <hr />
                <!-- Ưu đãi phí vận chuyển -->
                <div class="mt-3 d-flex align-items-center text-muted small">
                    <img src="https://cdn-icons-png.flaticon.com/512/891/891419.png" width="20" class="me-2" />
                    Giảm ₫500.000 phí vận chuyển tối thiểu ₫0; Giảm ₫1.000.000 phí vận chuyển đơn tối thiểu ₫500.000
                    <a href="#" class="ms-2">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>
    </template>

    <!-- Modal Xóa -->
    <div>
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Xóa Sản Phẩm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" role="alert">
                            Bạn có chắc chắn muốn xóa sản phẩm
                            <strong>{{ del_san_pham.ten_sp }} ?</strong>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" v-on:click="xoaSanPham()">
                            Xác nhận
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="buy-bar-wrap">
        <div class="card shadow-sm">
            <div class="card-body d-flex flex-wrap justify-content-between align-items-center px-3">
                <!-- Trái -->
                <div class="d-flex flex-wrap align-items-center lh-lg me-3 flex-grow-1" style="column-gap: 1rem">
                    <div class="form-check m-0">
                        <input class="form-check-input" type="checkbox" id="checkAll" v-model="chonTatCa"
                            @change="toggleChonTatCa" />
                        <label class="form-check-label" for="checkAll">Chọn Tất Cả</label>
                    </div>

                    <a href="#" class="text-decoration-none">Xóa</a>
                    <a href="#" class="text-decoration-none">Bỏ sản phẩm không hoạt động</a>
                    <a href="#" class="text-danger fw-bold text-decoration-none">Lưu vào mục Đã thích</a>
                </div>

                <!-- Phải -->
                <div class="d-flex flex-wrap align-items-center">
                    <div class="me-3 fw-bold text-danger">
                        Tổng cộng ({{ tongSoLuongDaChon }} Sản phẩm):
                        <span class="fs-5">{{ formatVND(tongTienDaChon) }}</span>
                    </div>
                    <button class="btn btn-danger px-4" @click="addDatHang()">Mua Hàng</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
export default {
    data() {
        return {
            list_gio_hang: [],
            del_san_pham: {},
            chonTatCa: false,
        };
    },
    mounted() {
        this.getSanPham();
    },
    computed: {
        tongSoLuongDaChon() {
            return this.list_gio_hang.filter((sp) => sp.da_chon).length;
        },
        tongTienDaChon() {
            return this.list_gio_hang.filter((sp) => sp.da_chon).reduce((tong, sp) => tong + sp.so_luong * sp.don_gia, 0);
        },
    },
    methods: {
        addDatHang() {
            const sanPhamDaChon = this.list_gio_hang.filter((sp) => sp.da_chon);
            if (sanPhamDaChon.length === 0) {
                this.$toast.error("Vui lòng chọn sản phẩm để mua");
                return;
            }

            // Lưu danh sách sản phẩm đã chọn vào localStorage để trang Thanh Toán lấy
            localStorage.setItem("san_pham_thanh_toan", JSON.stringify(sanPhamDaChon));
            
            // Chuyển sang trang Thanh Toán
            this.$router.push("/khach-hang/thanh-toan");
        },

        formatVND(number) {
            return new Intl.NumberFormat("vi-VI", { style: "currency", currency: "VND" }).format(number);
        },

        getSanPham() {
            axios.get("http://127.0.0.1:8000/api/khach-hang/gio-hang/get-data", {
                headers: { Authorization: "Bearer " + localStorage.getItem("khach_hang_login") }
            }).then((res) => {
                this.list_gio_hang = res.data.data.map((sp) => ({ ...sp, da_chon: false }));
            });
        },
        xoaSanPham() {
            axios.post("http://127.0.0.1:8000/api/khach-hang/gio-hang/delete", this.del_san_pham, {
                headers: { Authorization: "Bearer " + localStorage.getItem("khach_hang_login") }
            }).then((res) => {
                if (res.data.status) {
                    this.$toast.success(res.data.message);
                    this.getSanPham();
                }
            });
        },
        tangSoLuong(index) {
            const item = this.list_gio_hang[index];
            const newSoLuong = item.so_luong + 1;

            axios
                .post("http://127.0.0.1:8000/api/khach-hang/gio-hang/update", {
                    ma_sp: item.ma_sp,
                    so_luong: newSoLuong,
                }, {
                    headers: { Authorization: "Bearer " + localStorage.getItem("khach_hang_login") }
                })
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success("Cập nhật số lượng thành công");
                        this.getSanPham();
                    } else {
                        this.$toast.error(res.data.message);
                    }
                })
                .catch((err) => {
                    console.error("Lỗi cập nhật:", err);
                    this.$toast.error("Lỗi cập nhật số lượng");
                });
        },

        giamSoLuong(index) {
            const item = this.list_gio_hang[index];
            if (item.so_luong > 1) {
                item.so_luong--;
                this.capNhatSoLuong(item);
            }
        },
        capNhatSoLuong(item) {
            const data = {
                ma_sp: item.ma_sp,
                so_luong: item.so_luong,
            };

            axios
                .post("http://127.0.0.1:8000/api/khach-hang/gio-hang/update", data, {
                    headers: { Authorization: "Bearer " + localStorage.getItem("khach_hang_login") }
                })
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success("Cập nhật số lượng thành công");
                        this.getSanPham();
                    }
                })
                .catch((err) => {
                    console.error("Lỗi cập nhật:", err);
                    this.$toast.error("Lỗi cập nhật số lượng");
                });
        },
        xoaNhieuSanPham() {
            const daChon = this.list_gio_hang.filter((sp) => sp.da_chon);
            if (daChon.length === 0) {
                this.$toast.error("Chưa chọn sản phẩm để xóa");
                return;
            }

            axios.post("http://127.0.0.1:8000/api/khach-hang/gio-hang/delete-nhieu", { danh_sach: daChon }, {
                headers: { Authorization: "Bearer " + localStorage.getItem("khach_hang_login") }
            }).then((res) => {
                if (res.data.status) {
                    this.$toast.success(res.data.message);
                    this.getSanPham();
                }
            });
        },

        toggleChonTatCa() {
            this.list_gio_hang.forEach((sp) => {
                sp.da_chon = this.chonTatCa;
            });
        },
    },
};
</script>
<style>
.buy-bar-wrap {
    position: sticky;
    bottom: 0;
    z-index: 1040;
    background-color: #fff;
    padding-top: 0.5rem;
}
</style>
.
