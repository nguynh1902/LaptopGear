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
                    <button class="btn btn-sm btn-outline-primary">
                        <i class="fa-solid fa-pen-to-square"></i> Cập nhật
                    </button>
                </div>
                
                <div>
                    <div>
                        <strong>Nguyễn Văn A</strong> <span class="me-4"><i class="fa-solid fa-phone"></i> 0901234567</span>
                        <span class="me-4"><i class="fa-solid fa-envelope"></i> nguyenvana@gmail.com</span>
                        <div class="mt-2"><i class="fa-solid fa-location-dot"></i> <strong>Địa chỉ:</strong> 123 Đường ABC, Phường XYZ, Quận 1, TP.HCM <span class="badge bg-danger ms-2">Mặc Định</span></div>
                    </div>
                </div>
            </div>

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
                                <img src="https://cdn.tgdd.vn/Products/Images/44/282827/asus-tuf-gaming-f15-fx506hc-i5-hn144w-1.jpg" style="width: 70px; height: 70px" class="me-3" alt="sp" />
                                <div>
                                    <div>Laptop Asus TUF Gaming F15</div>
                                    <small class="text-muted">Loại: Xám</small>
                                </div>
                            </div>
                            <div class="col-md-2 text-end">18.500.000 ₫</div>
                            <div class="col-md-2 text-center">1</div>
                            <div class="col-md-2 text-end fw-bold">18.500.000 ₫</div>
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
                            <input type="text" class="form-control" id="loiNhan"
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
                            <strong>Tổng số tiền (1 sản phẩm):</strong>
                        </div>
                        <div class="col-md-2 text-end fw-bold">18.500.000 ₫</div>
                    </div>
                </div>
            </div>
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
            <div class="mb-1">Tổng tiền hàng <span class="ms-2">₫18.500.000</span></div>
            <div class="mb-1">Tổng tiền phí vận chuyển <span class="ms-2">₫45.100</span></div>
            <div class="mb-1 text-danger">Tổng cộng Voucher giảm giá <span class="ms-2">-₫2.000</span></div>
            <div class="fw-bold fs-5 text-danger">Tổng thanh toán: 18.543.100 ₫</div>
            <hr />
            <div class="row align-items-center">
                <div class="col-lg-8">
                    Nhấn “Đặt hàng” đồng nghĩa với việc bạn đồng ý tuân theo
                    <a href="#" class="text-primary">Điều khoản Laptop Gear</a>
                </div>
                <div class="col-lg-4 text-end">
                    <button class="btn btn-danger px-4 py-2">Đặt hàng</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ThanhToanClient"
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
