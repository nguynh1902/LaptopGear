<template>
  <div class="row">
    <div class="col-lg-12">
      <div class="card radius-10 border-top border-0 border-3 border-info">
        <div class="card-header d-flex justify-content-between">
          <h4 class="mt-2 text-primary"><b>DANH SÁCH SẢN PHẨM</b></h4>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Thêm sản phẩm</button>
        </div>
        <div class="card-body table-responsive">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search...." />
            <button class="btn btn-secondary input-group-text" style="width: 110px">Tìm kiếm</button>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr class="bg-primary text-light text-nowrap">
                  <th class="text-center">#</th>
                  <th class="text-center">Mã Danh Mục</th>
                  <th class="text-center">Tên Sản Phẩm</th>
                  <th class="text-center">Hình Ảnh</th>
                  <th class="text-center">Số Lượng</th>
                  <th class="text-center">Đơn Giá</th>
                  <th class="text-center">Giá Cũ</th>
                  <th class="text-center" style="width: 100%">Mô Tả</th>
                  <th class="text-center">Trailer</th>
                  <th class="text-center">Trạng Thái</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- Dữ liệu tĩnh -->
                <tr>
                  <th class="align-middle text-center">1</th>
                  <td class="align-middle text-wrap text-center">DM01</td>
                  <td class="align-middle text-wrap">Laptop Asus TUF Gaming</td>
                  <td class="align-middle">
                    <img
                      src="https://cdn.tgdd.vn/Products/Images/44/282827/asus-tuf-gaming-f15-fx506hc-i5-hn144w-1.jpg"
                      alt="User Avatar"
                      class="rounded-circle"
                      width="48"
                      height="48"
                    />
                  </td>
                  <td class="align-middle text-wrap">15</td>
                  <td class="align-middle text-danger text-wrap">18.500.000 ₫</td>
                  <td class="align-middle text-wrap">20.000.000 ₫</td>
                  <td class="align-middle text-wrap">Laptop gaming quốc dân</td>
                  <td class="align-middle text-wrap">https://youtube.com/trailer1</td>
                  <td class="align-middle text-center text-nowrap" style="width: 140px">
                    <button class="btn btn-success w-100" style="color: white">Hoạt động</button>
                  </td>
                  <td class="align-middle text-center text-nowrap" style="width: 200px">
                    <button class="btn btn-info text-light me-2" data-bs-toggle="modal" data-bs-target="#updateModal">Cập nhật</button>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa</button>
                  </td>
                </tr>

                <tr>
                  <th class="align-middle text-center">2</th>
                  <td class="align-middle text-wrap text-center">DM02</td>
                  <td class="align-middle text-wrap">Laptop HP Pavilion 14</td>
                  <td class="align-middle">
                    <img
                      src="https://cdn.tgdd.vn/Products/Images/44/282827/asus-tuf-gaming-f15-fx506hc-i5-hn144w-1.jpg"
                      alt="User Avatar"
                      class="rounded-circle"
                      width="48"
                      height="48"
                    />
                  </td>
                  <td class="align-middle text-wrap">8</td>
                  <td class="align-middle text-danger text-wrap">16.990.000 ₫</td>
                  <td class="align-middle text-wrap">18.000.000 ₫</td>
                  <td class="align-middle text-wrap">Laptop văn phòng sang trọng</td>
                  <td class="align-middle text-wrap">https://youtube.com/trailer2</td>
                  <td class="align-middle text-center text-nowrap" style="width: 140px">
                    <button class="btn btn-secondary w-100" style="color: white">Tạm tắt</button>
                  </td>
                  <td class="align-middle text-center text-nowrap" style="width: 200px">
                    <button class="btn btn-info text-light me-2" data-bs-toggle="modal" data-bs-target="#updateModal">Cập nhật</button>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Thêm Mới -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Thêm Sản Phẩm Mới</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Mã Danh Mục</label>
              <select class="form-select">
                <option disabled value="">-- Chọn danh mục --</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Tên Sản Phẩm</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Hình Ảnh</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Số Lượng</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Đơn Giá</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Giá Cũ</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-9 mb-3">
              <label class="form-label">Trailer</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label">Trạng Thái</label>
              <select class="form-select">
                <option value="0">Tạm tắt</option>
                <option value="1">Hoạt động</option>
              </select>
            </div>
            <div class="col-md-12 mb-3">
              <label class="form-label">Mô Tả</label>
              <textarea class="form-control"> </textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
            Thêm mới
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Cập Nhật -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cập Nhật Thông Tin Sản Phẩm</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Mã Danh Mục</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Mã Sản Phẩm</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Tên Sản Phẩm</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Hình Anh</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3 text-center">
              <label class="form-label">Số lượng</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Đơn Gía</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Giá Cũ</label>
              <input type="text" class="form-control" />
            </div>

            <div class="col-md-9 mb-3">
              <label class="form-label">Trailer</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label">Trạng Thái</label>
              <select class="form-select">
                <option value="0">Tạm tắt</option>
                <option value="1">Hoạt động</option>
              </select>
            </div>
            <div class="col-md-12 mb-3">
              <label class="form-label">Mô Tả</label>
              <textarea class="form-control"> </textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">
            Cập nhật
          </button>
        </div>
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
              Bạn có chắc chắn muốn xóa sản phẩm này không?
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
</template>

<script>
export default {
    name: "SanPhamAdmin"
};
</script>

<style></style>
