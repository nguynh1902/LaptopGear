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

    <!-- Sản phẩm 1 -->
    <div class="card">
        <div class="card-body">
            <div class="row rounded mt-3 align-items-center text-center py-3">
                <div class="col-4">
                    <div class="d-flex align-items-center mb-2">
                        <span class="badge bg-danger me-4 ms-4">Yêu thích</span>
                        <span class="fw-semibold">Danh Mục: Laptop Gaming</span>
                    </div>
                    <div class="d-flex align-items-start">
                        <input type="checkbox" class="me-2 mt-3" checked />
                        <img src="https://cdn.tgdd.vn/Products/Images/44/282827/asus-tuf-gaming-f15-fx506hc-i5-hn144w-1.jpg" class="me-2" style="width: 70px; height: 70px" />
                        <div>
                            <div class="fw-semibold">Laptop Asus TUF Gaming F15</div>
                        </div>
                    </div>
                    <div class="text-danger small mt-2">Flash Sale bắt đầu lúc 15:00:00</div>
                </div>
                <div class="col-2">
                    <span class="text-muted text-decoration-line-through">22.000.000 đ</span><br />
                    <span class="text-danger fw-bold">18.500.000 ₫</span>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <div class="input-group input-group-sm" style="max-width: 100px">
                        <button class="btn btn-outline-secondary">-</button>
                        <input type="text" class="form-control text-center quantity-input" value="1" readonly />
                        <button class="btn btn-outline-secondary">+</button>
                    </div>
                </div>
                <div class="col-2 text-danger fw-bold">18.500.000 ₫</div>
                <div class="col-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal" class="text-danger d-block">Xóa</a>
                    <a href="/khach-hang/san-pham" class="text-danger small">Tìm sản phẩm tương tự ▼</a>
                </div>
            </div>
            <hr />
            <div class="mt-3 d-flex align-items-center text-muted small">
                <img src="https://cdn-icons-png.flaticon.com/512/891/891419.png" width="20" class="me-2" />
                Giảm ₫500.000 phí vận chuyển tối thiểu ₫0; Giảm ₫1.000.000 phí vận chuyển đơn tối thiểu ₫500.000
                <a href="#" class="ms-2">Tìm hiểu thêm</a>
            </div>
        </div>
    </div>

    <!-- Sản phẩm 2 -->
    <div class="card mt-3">
        <div class="card-body">
            <div class="row rounded mt-3 align-items-center text-center py-3">
                <div class="col-4">
                    <div class="d-flex align-items-center mb-2">
                        <span class="badge bg-danger me-4 ms-4">Yêu thích</span>
                        <span class="fw-semibold">Danh Mục: Laptop Văn Phòng</span>
                    </div>
                    <div class="d-flex align-items-start">
                        <input type="checkbox" class="me-2 mt-3" checked />
                        <img src="https://cdn.tgdd.vn/Products/Images/44/282827/asus-tuf-gaming-f15-fx506hc-i5-hn144w-1.jpg" class="me-2" style="width: 70px; height: 70px" />
                        <div>
                            <div class="fw-semibold">Laptop Dell Inspiron 15</div>
                        </div>
                    </div>
                    <div class="text-danger small mt-2">Flash Sale bắt đầu lúc 15:00:00</div>
                </div>
                <div class="col-2">
                    <span class="text-muted text-decoration-line-through">16.000.000 đ</span><br />
                    <span class="text-danger fw-bold">14.500.000 ₫</span>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <div class="input-group input-group-sm" style="max-width: 100px">
                        <button class="btn btn-outline-secondary">-</button>
                        <input type="text" class="form-control text-center quantity-input" value="2" readonly />
                        <button class="btn btn-outline-secondary">+</button>
                    </div>
                </div>
                <div class="col-2 text-danger fw-bold">29.000.000 ₫</div>
                <div class="col-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal" class="text-danger d-block">Xóa</a>
                    <a href="/khach-hang/san-pham" class="text-danger small">Tìm sản phẩm tương tự ▼</a>
                </div>
            </div>
            <hr />
            <div class="mt-3 d-flex align-items-center text-muted small">
                <img src="https://cdn-icons-png.flaticon.com/512/891/891419.png" width="20" class="me-2" />
                Giảm ₫500.000 phí vận chuyển tối thiểu ₫0; Giảm ₫1.000.000 phí vận chuyển đơn tối thiểu ₫500.000
                <a href="#" class="ms-2">Tìm hiểu thêm</a>
            </div>
        </div>
    </div>

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
                            <strong>Laptop Asus TUF Gaming F15 ?</strong>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
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
                        <input class="form-check-input" type="checkbox" id="checkAll" checked />
                        <label class="form-check-label" for="checkAll">Chọn Tất Cả</label>
                    </div>

                    <a href="#" class="text-decoration-none">Xóa</a>
                    <a href="#" class="text-decoration-none">Bỏ sản phẩm không hoạt động</a>
                    <a href="#" class="text-danger fw-bold text-decoration-none">Lưu vào mục Đã thích</a>
                </div>

                <!-- Phải -->
                <div class="d-flex flex-wrap align-items-center">
                    <div class="me-3 fw-bold text-danger">
                        Tổng cộng (2 Sản phẩm):
                        <span class="fs-5">47.500.000 ₫</span>
                    </div>
                    <a href="/khach-hang/thanh-toan" class="btn btn-danger px-4">Mua Hàng</a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "GioHangClient"
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
