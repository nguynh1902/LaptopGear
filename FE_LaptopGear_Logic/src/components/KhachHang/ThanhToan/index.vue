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
            <!-- Địa chỉ nhận hàng mẫu tĩnh -->
            <div class="bg-white p-3 rounded border mb-3">
                <p class="mb-2 fw-bold text-danger">📍 Địa Chỉ Nhận Hàng</p>
                <div>
                    <strong>Nguyễn Văn A</strong> <span class="me-5">(+84) 0905123456</span>
                    <span class="me-5">Email: nguyenvana@gmail.com</span>
                    <span class="me-5">Địa chỉ: K266/50 Hoàng Diệu, Hải Châu, Đà Nẵng</span>
                    <span class="badge bg-danger ms-2">Mặc Định</span>
                    <a href="#" class="ms-3 text-primary">Thay Đổi</a>
                </div>
            </div>

            <!-- Sản phẩm thanh toán mẫu tĩnh -->
            <div class="card">
                <div class="card-body">
                    <div class="bg-white p-3 mt">
                        <div class="row fw-bold text-dark border-bottom mb-2">
                            <div class="col-md-6">
                                <h6 class="fw-bold">Sản phẩm</h6>
                            </div>
                            <div class="col-md-2 text-end">Đơn giá</div>
                            <div class="col-md-2 text-center">Số lượng</div>
                            <div class="col-md-2 text-end">Thành tiền</div>
                        </div>

                        <div class="row align-items-center mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-danger me-2">Yêu thích</span>
                                <strong class="me-2">LAPTOP GEAR</strong>
                                <a href="#" class="text-success d-flex align-items-center">
                                    <i class="bi bi-chat-dots-fill me-1"></i> Chat ngay
                                </a>
                            </div>
                            <div class="col-md-6 d-flex">
                                <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_1__4_42_2.png" style="width: 70px; height: 70px" class="me-3" alt="sp" />
                                <div>
                                    <div>Laptop Gigabyte G5 KF (i5 Gen 12 | RTX 4060 | SSD 512GB | 144Hz)</div>
                                    <small class="text-muted">Loại: Đen</small>
                                </div>
                            </div>
                            <div class="col-md-2 text-end">25.900.000 ₫</div>
                            <div class="col-md-2 text-center">1</div>
                            <div class="col-md-2 text-end fw-bold">25.900.000 ₫</div>
                        </div>

                        <div class="bg-light p-3 rounded d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="baoHiem" />
                                <label class="form-check-label" for="baoHiem">
                                    <strong>Bảo hiểm Thiệt hại sản phẩm</strong><br />
                                    <small class="text-muted">
                                        Bảo vệ sản phẩm được bảo hiểm khỏi thiệt hại do sự cố bất ngờ, tiếp xúc với
                                        chất lỏng hoặc hư hỏng trong quá trình sử dụng.
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
                            <input type="text" class="form-control" id="loiNhan" placeholder="Lưu ý cho Người bán..." />
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

                    <hr />
                    <div class="bg-white d-flex justify-content-between">
                        <div>
                            <strong>Tổng số tiền (1 sản phẩm):</strong>
                        </div>
                        <div class="col-md-2 text-end fw-bold">25.900.000 ₫</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <div class="bg-white p-3 rounded border mb-3">
                <strong>Phương thức thanh toán</strong>

                <div class="mt-3 mb-3">
                    <button type="button" class="btn btn-danger check_out">
                        <i class="fa-solid fa-credit-card me-2"></i>Thanh toán VNPAY
                    </button>
                </div>

                <div class="border-top pt-3">
                    <div class="form-check d-flex align-items-center">
                        <input class="form-check-input me-2" type="radio" name="pay" id="cod" checked />
                        <label class="form-check-label d-flex align-items-center" for="cod">
                            <span class="fw-semibold">Thanh toán khi nhận hàng (COD)</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="buy-bar-wrap bg-white p-3 rounded border shadow text-end">
            <div class="mb-1">Tổng tiền hàng <span class="ms-2">25.900.000 ₫</span></div>
            <div class="mb-1">Tổng tiền phí vận chuyển <span class="ms-2">45.100 ₫</span></div>
            <div class="mb-1 text-danger">Tổng cộng Voucher giảm giá <span class="ms-2">-2.000 ₫</span></div>
            <div class="fw-bold fs-5 text-danger">Tổng thanh toán: 25.943.100 ₫</div>
            <hr />
            <div class="row align-items-center">
                <div class="col-lg-8">
                    Nhấn “Đặt hàng” đồng nghĩa với việc bạn đồng ý tuân theo
                    <a href="#" class="text-primary">Điều khoản Laptop Gear</a>
                </div>
                <div class="col-lg-4 text-end">
                    <router-link to="/khach-hang/hoa-don" class="btn btn-danger px-4 py-2">Đặt hàng</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },
    methods: {},
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
