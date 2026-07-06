<template>
  <div class="row">
    <div class="col-lg-4">
      <div class="card radius-10 border-top border-0 border-3 border-info">
        <div class="card-header d-flex justify-content-between">
          <h4 class="mt-2 text-primary"><b>THÊM MỚI DANH MỤC</b></h4>
        </div>
        <div class="card-body table-responsive">
          <div class="row">
                        <div class="col-md-8 mb-3">
              <label class="form-label">Tên Danh Mục</label>
              <input type="text" class="form-control" />
            </div>
                        <div class="col-md-4 mb-3">
              <label class="form-label">Trạng Thái</label>
              <select class="form-select">
                <option value="0">Tạm tắt</option>
                <option value="1">Hoạt động</option>
              </select>
            </div>


          </div>
        </div>
        <div class="card-footer  table-responsive text-end">
          <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
            Thêm mới
          </button>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="card radius-10 border-top border-0 border-3 border-info">
        <div class="card-header d-flex justify-content-between">
          <h4 class="mt-2 text-primary"><b>DANH SÁCH DANH MỤC</b></h4>
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
                  <th class="text-center">Tên Danh Mục</th>
                  <th class="text-center">Trạng Thái</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                  <!-- Static Row 1 -->
                  <tr>
                    <th class="align-middle text-center">1</th>
                    <td class="align-middle text-wrap text-center" style="width: 200px">
                      DM01
                    </td>
                    <td class="align-middle text-wrap">
                      HỌC TẬP - VĂN PHÒNG
                    </td>

                    <td class="align-middle text-center text-nowrap" style="width: 140px">
                      <button class="btn btn-success w-100" style="color: white">
                        Hoạt động
                      </button>
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
                    <td class="align-middle text-wrap text-center" style="width: 200px">
                      DM02
                    </td>
                    <td class="align-middle text-wrap">
                      LAPTOP GAMING
                    </td>

                    <td class="align-middle text-center text-nowrap" style="width: 140px">
                      <button class="btn btn-secondary w-100" style="color: white">
                        Tạm tắt
                      </button>
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


  <!-- Modal Cập Nhật -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cập Nhật Thông Tin Danh Mục</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <!-- <div class="col-md-6 mb-3">
              <label class="form-label">Mã Danh Mục</label>
              <input v-model="edit_danh_muc.ma_dm" type="text" class="form-control" />
            </div> -->
            <div class="col-md-8 mb-3">
              <label class="form-label">Tên Danh Mục</label>
              <input type="text" class="form-control" />
            </div>

            <div class="col-md-4 mb-3">
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
          <h5 class="modal-title">Xóa Danh Mục</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" role="alert">
            Bạn có chắc chắn muốn xóa danh mục này không?
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
    name: "DanhMucAdmin"
};
</script>

<style></style>
