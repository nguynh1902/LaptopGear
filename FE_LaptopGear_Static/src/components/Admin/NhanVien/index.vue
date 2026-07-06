<template>
  <div class="row">
    <div class="col-lg-12">
      <div class="card radius-10 border-top border-0 border-3 border-info">
        <div class="card-header d-flex justify-content-between">
          <h4 class="mt-2 text-primary"><b>DANH SÁCH NHÂN VIÊN</b></h4>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Thêm nhân viên</button>
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
                  <th class="text-center">Mã Nhân Viên</th>
                  <th class="text-center">Họ Và Tên</th>
                  <th class="text-center">Lương</th>
                  <th class="text-center">Ngày Sinh</th>
                  <th class="text-center">Địa Chỉ</th>
                  <th class="text-center">Số Điện Thoại</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Mật Khẩu</th>
                  <th class="text-center">Ghi Chú</th>
                  <th class="text-center">Trạng Thái</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                  <!-- Static Row 1 -->
                  <tr>
                    <th class="align-middle text-center">1</th>
                    <td class="align-middle text-wrap text-center">NV001</td>
                    <td class="align-middle text-wrap" style="width: 200px;">Lý Nhân Viên A</td>
                    <td class="align-middle text-danger text-center text-wrap">10.000.000 ₫</td>
                    <td class="align-middle text-wrap text-center" style="width: 100px;">01/01/1990</td>
                    <td class="align-middle text-wrap">Hà Nội</td>
                    <td class="align-middle text-wrap">0987654321</td>
                    <td class="align-middle text-wrap">nva@gmail.com</td>
                    <td class="align-middle text-wrap text-center">***</td>
                    <td class="align-middle text-wrap">Nhân viên sale</td>
                    <td class="align-middle text-center text-nowrap" style="width: 140px">
                      <button class="btn btn-success w-100" style="color: white">Hoạt động</button>
                    </td>
                    <td class="align-middle text-center text-nowrap" style="width: 200px">
                      <button class="btn btn-info text-light me-2" data-bs-toggle="modal" data-bs-target="#updateModal">
                        Cập nhật
                      </button>
                      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Xóa
                      </button>
                    </td>
                  </tr>

                  <!-- Static Row 2 -->
                  <tr>
                    <th class="align-middle text-center">2</th>
                    <td class="align-middle text-wrap text-center">NV002</td>
                    <td class="align-middle text-wrap" style="width: 200px;">Trần Nhân Viên B</td>
                    <td class="align-middle text-danger text-center text-wrap">12.000.000 ₫</td>
                    <td class="align-middle text-wrap text-center" style="width: 100px;">02/02/1995</td>
                    <td class="align-middle text-wrap">TP HCM</td>
                    <td class="align-middle text-wrap">0912345678</td>
                    <td class="align-middle text-wrap">tnvb@gmail.com</td>
                    <td class="align-middle text-wrap text-center">***</td>
                    <td class="align-middle text-wrap">Kế toán</td>
                    <td class="align-middle text-center text-nowrap" style="width: 140px">
                      <button class="btn btn-secondary w-100" style="color: white">Tạm tắt</button>
                    </td>
                    <td class="align-middle text-center text-nowrap" style="width: 200px">
                      <button class="btn btn-info text-light me-2" data-bs-toggle="modal" data-bs-target="#updateModal">
                        Cập nhật
                      </button>
                      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Xóa
                      </button>
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
          <h5 class="modal-title">Thêm Nhân Viên Mới</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Họ Và Tên</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Lương</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Ngày Sinh</label>
              <input type="date" class="form-control" />
            </div>
                        <div class="col-md-6 mb-3">
              <label class="form-label">Ngày Vào Làm</label>
              <input type="date" class="form-control" />
            </div>
                        <div class="col-md-6 mb-3">
              <label class="form-label">Vai Trò</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Địa Chỉ</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Số Điện Thoại</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Email</label>
              <input type="text" class="form-control" />
            </div>            <div class="col-md-6 mb-3">
              <label class="form-label">Mật Khẩu</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-9 mb-3">
              <label class="form-label">Ghi Chú</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label">Trạng Thái</label>
              <select class="form-select">
                <option value="0">Tạm tắt</option>
                <option value="1">Hoạt động</option>
              </select>
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
          <h5 class="modal-title">Cập Nhật Thông Tin Nhân Viên</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Mã Nhân Viên</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Họ Và Tên</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Lương</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Ngày Sinh</label>
              <input type="text" class="form-control" />
            </div>
                        <div class="col-md-6 mb-3">
              <label class="form-label">Ngày Vào Làm</label>
              <input type="date" class="form-control" />
            </div>
                        <div class="col-md-6 mb-3">
              <label class="form-label">Vai Trò</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Địa Chỉ</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Số Điện Thoại</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Email</label>
              <input type="text" class="form-control" />
            </div>
                        <div class="col-md-6 mb-3">
              <label class="form-label">Mật Khẩu</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-9 mb-3">
              <label class="form-label">Ghi Chú</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label">Trạng Thái</label>
              <select class="form-select">
                <option value="0">Tạm tắt</option>
                <option value="1">Hoạt động</option>
              </select>
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
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Xóa Nhân Viên</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" role="alert">
            Bạn có chắc chắn muốn xóa nhân viên này không?
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
</template>

<script>
export default {
    name: "NhanVienAdmin"
};
</script>

<style></style>
