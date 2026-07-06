<template>
  <div class="row">
    <div class="col-lg-12">
      <div class="card radius-10 border-top border-0 border-3 border-info">
        <div class="card-header d-flex justify-content-between">
          <h4 class="mt-2 text-primary"><b>DANH SÁCH ĐÁNH GIÁ</b></h4>
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
                  <th class="text-center">Mã Đánh Giá</th>
                  <th class="text-center">Mã Sản Phẩm</th>
                  <th class="text-center">Họ Và Tên</th>
                  <th class="text-center">Nội Dung</th>
                  <th class="text-center">Ngày Đánh Giá</th>
                  <th class="text-center">Số Sao</th>
                  <th class="text-center">Trạng Thái</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                  <!-- Static Row 1 -->
                  <tr>
                    <th class="align-middle text-center">1</th>
                    <td class="align-middle text-wrap text-center">DG001</td>
                    <td class="align-middle text-wrap text-center">SP001</td>
                    <td class="align-middle text-wrap">Khách hàng A</td>
                    <td class="align-middle text-wrap">Sản phẩm rất tốt</td>
                    <td class="align-middle text-wrap text-center">05/07/2026</td>
                    <td class="align-middle text-wrap text-center">5</td>
                    <td class="align-middle text-center text-nowrap" style="width: 140px">
                      <button class="btn btn-success w-100" style="color: white">Hiện</button>
                    </td>
                    <td class="align-middle text-center text-nowrap">
                      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa</button>
                    </td>
                  </tr>

                  <!-- Static Row 2 -->
                  <tr>
                    <th class="align-middle text-center">2</th>
                    <td class="align-middle text-wrap text-center">DG002</td>
                    <td class="align-middle text-wrap text-center">SP002</td>
                    <td class="align-middle text-wrap">Khách hàng B</td>
                    <td class="align-middle text-wrap">Giao hàng chậm</td>
                    <td class="align-middle text-wrap text-center">04/07/2026</td>
                    <td class="align-middle text-wrap text-center">3</td>
                    <td class="align-middle text-center text-nowrap" style="width: 140px">
                      <button class="btn btn-secondary w-100" style="color: white">Tạm Ẩn</button>
                    </td>
                    <td class="align-middle text-center text-nowrap">
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

  <!-- Modal Xóa -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Xóa Đánh Giá</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" role="alert">
            Bạn có chắc chắn muốn xóa đánh giá này không?
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
    name: "DanhGiaAdmin"
};
</script>

<style></style>
