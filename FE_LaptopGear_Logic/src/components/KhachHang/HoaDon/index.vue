<template>
    <div class="row mt">
        <div class="col-lg-12 text-center mb-2">
            <div class="d-inline-block">
                <h2 class="text-dark"><b>HÓA ĐƠN</b></h2>
                <div class="text-center">
                    <hr class="bg-dark mb-3" style="width: 100%; height: 4px; border: none; border-radius: 5px" />
                </div>
            </div>
        </div>
    </div>

    <!-- Hóa đơn mẫu 1: Đang chờ xét duyệt -->
    <div class="bg-white border rounded p-3 mb-4">
        <div class="d-flex justify-content-between align-items-start mb-2 border-bottom pb-2">
            <div>
                <div class="fw-bold text-danger">Mã hóa đơn: HD01</div>
                <div class="small text-muted d-flex flex-wrap">
                    <div class="me-3"><strong>Họ tên:</strong> Nguyễn Văn A</div>
                    <div class="me-3"><strong>SĐT:</strong> 0905123456</div>
                    <div class="me-3"><strong>Email:</strong> nguyenvana@gmail.com</div>
                    <div><strong>Địa chỉ:</strong> K266/50 Hoàng Diệu, Hải Châu, Đà Nẵng</div>
                </div>
            </div>

            <div class="small mt-1 text-danger">
                <i class="bi bi-truck"></i>
                <span><b>Đơn hàng đang chờ xét duyệt</b></span>
            </div>
        </div>

        <div class="d-flex pt-3 border-bottom pb-3">
            <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_1__4_42_2.png" alt="sản phẩm" width="80" class="me-3 border" />
            <div class="flex-grow-1">
                <div class="fw-semibold">Laptop Gigabyte G5 KF (i5 Gen 12 | RTX 4060 | SSD 512GB | 144Hz)</div>
                <div class="text-muted small">Số lượng: x1</div>
                <div class="text-muted small">Ghi chú: Giao giờ hành chính</div>
            </div>
            <div class="text-end">
                <div>25.900.000 ₫</div>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-3">
            <div class="text-end">
                <span class="me-2">Thành tiền:</span>
                <span class="text-danger fw-bold fs-5">25.900.000 ₫</span>
            </div>
        </div>

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

    <!-- Hóa đơn mẫu 2: Đã duyệt -->
    <div class="bg-white border rounded p-3 mb-4">
        <div class="d-flex justify-content-between align-items-start mb-2 border-bottom pb-2">
            <div>
                <div class="fw-bold text-danger">Mã hóa đơn: HD02</div>
                <div class="small text-muted d-flex flex-wrap">
                    <div class="me-3"><strong>Họ tên:</strong> Nguyễn Văn A</div>
                    <div class="me-3"><strong>SĐT:</strong> 0905123456</div>
                    <div class="me-3"><strong>Email:</strong> nguyenvana@gmail.com</div>
                    <div><strong>Địa chỉ:</strong> K266/50 Hoàng Diệu, Hải Châu, Đà Nẵng</div>
                </div>
            </div>

            <div class="small mt-1 text-success">
                <i class="bi bi-truck"></i>
                <span><b>Đơn hàng đã được duyệt, đang giao đến bạn</b></span>
            </div>
        </div>

        <div class="d-flex pt-3 border-bottom pb-3">
            <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/l/a/laptop-asus-vivobook-15-oled-a1505va-ma468w_1_.png" alt="sản phẩm" width="80" class="me-3 border" />
            <div class="flex-grow-1">
                <div class="fw-semibold">Laptop ASUS Vivobook 15 OLED (i5 Gen 13 | RAM 16GB | SSD 512GB)</div>
                <div class="text-muted small">Số lượng: x1</div>
                <div class="text-muted small">Ghi chú: Không có</div>
            </div>
            <div class="text-end">
                <div>17.900.000 ₫</div>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-3">
            <div class="text-end">
                <span class="me-2">Thành tiền:</span>
                <span class="text-danger fw-bold fs-5">17.900.000 ₫</span>
            </div>
        </div>

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

<script>
export default {
    data() {
        return {};
    },
    methods: {},
};
</script>

<style></style>
