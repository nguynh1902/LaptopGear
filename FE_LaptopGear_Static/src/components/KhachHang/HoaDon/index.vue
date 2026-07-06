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
    

    
    <!-- Đơn hàng 1 -->
    <div class="bg-white border rounded p-3 mb-4">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-start mb-2 border-bottom pb-2">
            <div>
                <div class="fw-bold text-danger">Mã hóa đơn: HD-123456789</div>
                <div class="small text-muted d-flex flex-wrap">
                    <div class="me-3 "><strong>Họ tên:</strong> Nguyễn Văn A</div>
                    <div class="me-3 "><strong>SĐT:</strong> 0901234567</div>
                    <div class="me-3 "><strong>Email:</strong> nguyenvana@gmail.com</div>
                    <div><strong class="">Địa chỉ:</strong> 123 Đường ABC, Phường XYZ, Quận 1, TP.HCM</div>
                </div>
            </div>

            <div class="small mt-1 text-danger">
                <i class="bi bi-truck"></i>
                <span><b>Đơn hàng đang chờ xét duyệt</b></span>
            </div>
        </div>

        <!-- Danh sách sản phẩm -->
        <div class="d-flex pt-3 border-bottom pb-3">
            <img src="https://cdn.tgdd.vn/Products/Images/44/282827/asus-tuf-gaming-f15-fx506hc-i5-hn144w-1.jpg" alt="sản phẩm" width="80" class="me-3 border" />
            <div class="flex-grow-1">
                <div class="fw-semibold">Laptop Asus TUF Gaming F15</div>
                <div class="text-muted small">Số lượng: x1</div>
                <div class="text-muted small">Ghi chú: Không có</div>
            </div>
            <div class="text-end">
                <div>18.500.000 ₫</div>
            </div>
        </div>

        <!-- Tổng tiền -->
        <div class="d-flex justify-content-end mt-3">
            <div class="text-end">
                <span class="me-2">Thành tiền:</span>
                <span class="text-danger fw-bold fs-5">
                    18.500.000 ₫
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

    <!-- Đơn hàng 2 -->
    <div class="bg-white border rounded p-3 mb-4">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-start mb-2 border-bottom pb-2">
            <div>
                <div class="fw-bold text-danger">Mã hóa đơn: HD-987654321</div>
                <div class="small text-muted d-flex flex-wrap">
                    <div class="me-3 "><strong>Họ tên:</strong> Trần B</div>
                    <div class="me-3 "><strong>SĐT:</strong> 0987654321</div>
                    <div class="me-3 "><strong>Email:</strong> tranb@gmail.com</div>
                    <div><strong class="">Địa chỉ:</strong> 456 Đường DEF, Phường GHI, Quận 2, TP.HCM</div>
                </div>
            </div>

            <div class="small mt-1 text-success">
                <i class="bi bi-truck"></i>
                <span><b>Đơn hàng đã được duyệt, đang giao đến bạn</b></span>
            </div>
        </div>

        <!-- Danh sách sản phẩm -->
        <div class="d-flex pt-3 border-bottom pb-3">
            <img src="https://cdn.tgdd.vn/Products/Images/44/282827/asus-tuf-gaming-f15-fx506hc-i5-hn144w-1.jpg" alt="sản phẩm" width="80" class="me-3 border" />
            <div class="flex-grow-1">
                <div class="fw-semibold">Laptop HP Pavilion 14</div>
                <div class="text-muted small">Số lượng: x2</div>
                <div class="text-muted small">Ghi chú: Giao nhanh nhé</div>
            </div>
            <div class="text-end">
                <div>16.990.000 ₫</div>
            </div>
        </div>

        <!-- Tổng tiền -->
        <div class="d-flex justify-content-end mt-3">
            <div class="text-end">
                <span class="me-2">Thành tiền:</span>
                <span class="text-danger fw-bold fs-5">
                    33.980.000 ₫
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

<script>
export default {
    name: "HoaDonClient"
};
</script>

<style></style>
