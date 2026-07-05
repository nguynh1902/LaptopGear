<template>
    <div>
        <div class="row mt">
            <div class="col-lg-12 text-center mb-2">
                <div class="d-inline-block">
                    <h2 class="text-dark"><b>THANH TOÁN</b></h2>
                    <div class="text-center">
                        <hr class="bg-dark mb-3" style="width: 100%; height: 4px; border: none; border-radius: 5px" />
                    </div>
                </div>
            </div>
        </div>
        <div class="mt">
            <div class="bg-white p-3 rounded border mb-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="mb-0 fw-bold text-danger">📍 Thông Tin & Địa Chỉ Nhận Hàng</p>
                    <button v-if="!isEditingAddress" class="btn btn-sm btn-outline-primary" @click="isEditingAddress = true">
                        <i class="fa-solid fa-pen-to-square"></i> Cập nhật
                    </button>
                    <button v-else class="btn btn-sm btn-success" @click="saveAddress()">
                        <i class="fa-solid fa-check"></i> Xong
                    </button>
                </div>
                
                <div v-if="!isEditingAddress">
                    <div v-if="khach_hang.dia_chi && khach_hang.sdt">
                        <strong>{{ khach_hang.ho_ten }}</strong> <span class="me-4"><i class="fa-solid fa-phone"></i> {{ khach_hang.sdt }}</span>
                        <span class="me-4"><i class="fa-solid fa-envelope"></i> {{ khach_hang.email }}</span>
                        <div class="mt-2"><i class="fa-solid fa-location-dot"></i> <strong>Địa chỉ:</strong> {{ khach_hang.dia_chi }} <span class="badge bg-danger ms-2">Mặc Định</span></div>
                    </div>
                    <div v-else class="alert alert-warning mb-0">
                        <i class="fa-solid fa-triangle-exclamation"></i> Bạn chưa cập nhật đầy đủ Số điện thoại và Địa chỉ. Vui lòng bấm <b>Cập nhật</b> để thêm thông tin giao hàng!
                    </div>
                </div>

                <div v-else class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label text-muted small fw-bold">Họ tên người nhận (*)</label>
                        <input type="text" class="form-control" v-model="khach_hang.ho_ten" placeholder="Nhập họ tên...">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted small fw-bold">Số điện thoại (*)</label>
                        <input type="text" class="form-control" v-model="khach_hang.sdt" placeholder="Nhập số điện thoại...">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted small fw-bold">Email</label>
                        <input type="email" class="form-control" v-model="khach_hang.email" placeholder="Nhập email...">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted small fw-bold">Địa chỉ chi tiết (*)</label>
                        <input type="text" class="form-control" v-model="khach_hang.dia_chi" placeholder="Nhập địa chỉ nhà, tên đường, phường/xã...">
                    </div>
                </div>
            </div>

            <template v-for="(item, index) in list_thanh_toan" :key="index">
                <div class="card">
                    <div class="card-body">
                        <!-- Sản phẩm -->
                        <div class="bg-white p-3 mt">
                            <!-- Tiêu đề -->
                            <!-- Header bảng -->
                            <div class="row fw-bold text-dark border-bottom mb-2">
                                <div class="col-md-6">
                                    <h6 class="fw-bold">Sản phẩm</h6>
                                     
                                </div>
                                <div class="col-md-2 text-end">Đơn giá</div>
                                <div class="col-md-2 text-center">Số lượng</div>
                                <div class="col-md-2 text-end">Thành tiền</div>
                            </div>

                            <!-- Thông tin sản phẩm -->
                            <div class="row align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-danger me-2">Yêu thích</span>
                                    <strong class="me-2">AIODIY</strong>
                                    <a href="#" class="text-success d-flex align-items-center">
                                        <i class="bi bi-chat-dots-fill me-1"></i> Chat ngay
                                    </a>
                                </div>
                                <div class="col-md-6 d-flex">
                                    <img :src="item.hinh" style="width: 70px; height: 70px" class="me-3" alt="sp" />
                                    <div>
                                        <div>{{ item.ten_sp }}</div>
                                        <small class="text-muted">Loại: Xám</small>
                                    </div>
                                </div>
                                <div class="col-md-2 text-end">{{ formatVND(item.don_gia) }}</div>
                                <div class="col-md-2 text-center">{{ item.so_luong }}</div>
                                <div class="col-md-2 text-end fw-bold">{{ formatVND(item.don_gia * item.so_luong) }}
                                </div>
                            </div>

                            <!-- Bảo hiểm -->
                            <div class="bg-light p-3 rounded d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="baoHiem" />
                                    <label class="form-check-label" for="baoHiem">
                                        <strong>Bảo hiểm Thiệt hại sản phẩm</strong><br />
                                        <small class="text-muted">
                                            Bảo vệ sản phẩm được bảo hiểm khỏi thiệt hại do sự cố bất ngờ, tiếp xúc với
                                            chất lỏng hoặc hư hỏng
                                            trong quá trình sử dụng.
                                            <a href="#" class="text-primary">Tìm hiểu thêm</a>
                                        </small>
                                    </label>
                                </div>
                                <div class="text-end">
                                    <div>100.000đ</div>
                                </div>
                            </div>
                        </div>

                        <!-- Voucher & vận chuyển -->
                        <div class="bg-white p-3 rounded border mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <small class="text-muted">Voucher của Shop</small>
                                <div>
                                    <span class="text-danger">-₫2k</span>
                                    <a href="#" class="ms-2 text-primary">Chọn Voucher Khác</a>
                                </div>
                            </div>

                            <hr class="my-3" />

                            <div class="mb-3">
                                <label for="loiNhan" class="form-label">Lời nhắn:</label>
                                <input v-model="item.ghi_chu" type="text" class="form-control" id="loiNhan"
                                    placeholder="Lưu ý cho Người bán..." />
                            </div>

                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>Phương thức vận chuyển:</strong> <span>Nhanh</span>
                                    <a href="#" class="ms-2 text-primary">Thay Đổi</a><br />
                                    <small class="text-success">Đảm bảo nhận hàng từ 14 - 17 Tháng 7</small><br />
                                    <small class="text-muted">Nhận Voucher 50.000đ nếu giao sau 17/07/2025.</small>
                                </div>
                                <div class="text-end text-muted">150.000đ</div>
                            </div>
                        </div>

                        <!-- Tổng tiền -->
                        <hr />
                        <div class="bg-white d-flex justify-content-between">
                            <div>
                                <strong>Tổng số tiền ({{ item.so_luong }} sản phẩm):</strong>
                            </div>
                            <div class="col-md-2 text-end fw-bold">{{ formatVND(item.don_gia * item.so_luong) }}</div>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <div class="mt-4">
            <!-- Phương thức thanh toán -->
            <div class="bg-white p-3 rounded border mb-3">
                <strong>Phương thức thanh toán</strong>

                <!-- Tabs -->
                <div class="mt-3 mb-3">
                    <form action="{{ url('/vnpay_payment') }}" method="POST">
                        <input type="hidden" name="total_vnpay" value="{{ $total_after }}">
                        <button type="submit" class="btn btn-danger check_out" name="redirect">
                            Thanh toán VNPAY
                        </button>
                    </form>
                </div>

                <!-- Ví / ngân hàng -->
                <div class="border-top pt-3">
                    <div class="form-check d-flex align-items-center">
                        <input class="form-check-input me-2" type="radio" name="pay" id="mbbank" checked />
                        <label class="form-check-label d-flex align-items-center" for="mbbank">
                            <!-- <img src="../../../../img/QR.png" width="50%" class="me-2" /> -->
                        </label>
                    </div>
                </div>
            </div>
            <!-- Tổng kết đơn hàng -->
        </div>
        <div class="buy-bar-wrap bg-white p-3 rounded border shadow text-end">
            <div class="mb-1">Tổng tiền hàng <span class="ms-2">₫67.346</span></div>
            <div class="mb-1">Tổng tiền phí vận chuyển <span class="ms-2">₫45.100</span></div>
            <div class="mb-1 text-danger">Tổng cộng Voucher giảm giá <span class="ms-2">-₫2.000</span></div>
            <div class="fw-bold fs-5 text-danger">Tổng thanh toán: {{ formatVND(tongThanhToan()) }}</div>
            <hr />
            <div class="row align-items-center">
                <div class="col-lg-8">
                    Nhấn “Đặt hàng” đồng nghĩa với việc bạn đồng ý tuân theo
                    <a href="#" class="text-primary">Điều khoản Laptop Gear</a>
                </div>
                <div class="col-lg-4 text-end">
                    <button class="btn btn-danger px-4 py-2" @click="datHang()">Đặt hàng</button>
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
            khach_hang: {},
            isEditingAddress: false,
            del_san_pham: {},
            list_thanh_toan: [],
            create_thanh_toan: {},
            edit_thanh_toan: {},
            del_thanh_toan: {},
        };
    },
    mounted() {
        this.getThanhToan();
        this.getProfile();
    },
    methods: {
        saveAddress() {
            if (!this.khach_hang.ho_ten || !this.khach_hang.sdt || !this.khach_hang.dia_chi) {
                this.$toast.error("Vui lòng điền đầy đủ Họ Tên, SĐT và Địa chỉ!");
                return;
            }
            this.isEditingAddress = false;
        },
        getProfile() {
            axios.get("http://127.0.0.1:8000/api/khach-hang/profile", {
                headers: { Authorization: "Bearer " + localStorage.getItem("khach_hang_login") }
            }).then((res) => {
                if (res.data.status) {
                    this.khach_hang = res.data.data;
                    if (!this.khach_hang.sdt || !this.khach_hang.dia_chi) {
                        this.isEditingAddress = true;
                    }
                }
            });
        },
        tongThanhToan() {
            // Tính tổng tiền của tất cả sản phẩm trong giỏ hàng
            let tong = 0;
            this.list_thanh_toan.forEach((item) => {
                const tongTienSanPham = item.don_gia * item.so_luong;
                tong += tongTienSanPham;
            });

            const phiVanChuyen = 45100; // tùy chỉnh theo nhu cầu
            const voucherGiamGia = 2000; // giảm giá

            return tong + phiVanChuyen - voucherGiamGia;
        },
        formatVND(number) {
            return new Intl.NumberFormat("vi-VI", { style: "currency", currency: "VND" }).format(number);
        },
        datHang() {
            if (this.isEditingAddress) {
                this.$toast.warning("Vui lòng hoàn tất cập nhật địa chỉ trước khi đặt hàng!");
                return;
            }
            if (!this.khach_hang.sdt || !this.khach_hang.dia_chi) {
                this.$toast.error("Vui lòng cập nhật đầy đủ Địa chỉ và Số điện thoại giao hàng!");
                this.isEditingAddress = true;
                return;
            }

            const kh = this.khach_hang;
            const sanPhamMua = this.list_thanh_toan.map((item) => ({
                ma_sp: item.ma_sp,
                ten_sp: item.ten_sp,
                so_luong: item.so_luong,
                don_gia: item.don_gia,
                ghi_chu: item.ghi_chu,
                hinh: item.hinh,
            }));

            const payload = {
                ma_kh: kh.ma_kh,
                ho_ten: kh.ho_ten,
                email: kh.email,
                dia_chi: kh.dia_chi,
                sdt: kh.sdt,
                san_pham: sanPhamMua,
            };

            axios
                .post("http://127.0.0.1:8000/api/khach-hang/thanh-toan/dat-hang", payload)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success("Đặt hàng thành công! Mã hóa đơn: " + res.data.ma_hoa_don);

                        const promises = sanPhamMua.map((sp) => {
                            return axios.post("http://127.0.0.1:8000/api/khach-hang/gio-hang/remove", {
                                ma_sp: sp.ma_sp,
                            }, {
                                headers: { Authorization: "Bearer " + localStorage.getItem("khach_hang_login") }
                            });
                        });

                        // Chờ tất cả API xóa xong
                        Promise.all(promises)
                            .then(() => {
                                // Sau khi xóa ở BE, cập nhật lại list_thanh_toan ở FE
                                this.list_thanh_toan = this.list_thanh_toan.filter(
                                    (item) => !sanPhamMua.some((sp) => sp.ma_sp === item.ma_sp)
                                );
                                console.log("Đã xóa sản phẩm đã mua khỏi giỏ hàng và thanh toán.");
                            })
                            .catch((err) => {
                                console.warn("Lỗi xóa sản phẩm ở giỏ hàng:", err.response?.data || err.message);
                            });

                        //  Chuyển hướng
                        this.$router.push("/khach-hang/hoa-don");
                    } else {
                        this.$toast.error("Lỗi đặt hàng: " + res.data.message);
                    }
                })
                .catch((err) => {
                    this.$toast.error("Đặt hàng thất bại!");
                    console.error(err.response?.data || err.message); 0
                });
        }
        ,
        getThanhToan() {
            const data = localStorage.getItem("san_pham_thanh_toan");
            if (data) {
                this.list_thanh_toan = JSON.parse(data);
            } else {
                this.$toast.error("Không có sản phẩm nào để thanh toán");
                this.$router.push("/khach-hang/gio-hang");
            }
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
    padding: 0.75rem 1rem;
    box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.1);
    border-top: 1px solid #ddd;
    transition: all 0.3s ease;
}
</style>
