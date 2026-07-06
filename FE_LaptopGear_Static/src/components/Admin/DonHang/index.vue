<template>
  <div class="row">
    <div class="col-lg-12">
      <div class="card radius-10 border-top border-0 border-3 border-info">
        <div class="card-header d-flex justify-content-between">
          <h4 class="mt-2 text-primary"><b>DANH SÁCH HÓA ĐƠN</b></h4>
        </div>
        <div class="card-body table-responsive">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search mã hóa đơn, SĐT, Email...." />
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr class="bg-primary text-light text-nowrap">
                  <th class="text-center">MHĐ</th>
                  <th class="text-center">Họ Và Tên</th>
                  <th class="text-center">Ngày đặt</th>
                  <th class="text-center">SĐT</th>
                  <th class="text-center">Tên Sản Phẩm</th>
                  <th class="text-center">Số Lượng</th>
                  <th class="text-center">Đơn Giá</th>
                  <th class="text-center">Trạng Thái</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- Static Row 1 -->
                <tr>
                  <td class="align-middle text-center" rowspan="2">HD123456</td>
                  <td class="align-middle text-center" rowspan="2">Nguyễn Văn A</td>
                  <td class="align-middle text-center" rowspan="2">05/07/2026 10:00</td>
                  <td class="align-middle text-center" rowspan="2">0901234567</td>
                  
                  <td class="align-middle text-wrap" style="min-width: 200px; max-width: 300px; white-space: normal;">Laptop Asus TUF Gaming</td>
                  <td class="align-middle text-center">1</td>
                  <td class="align-middle text-danger text-center">18.500.000 ₫</td>

                  <td class="align-middle text-warning text-nowrap text-center" rowspan="2">
                    <button class="btn btn-secondary me-2" style="color: white; width: 127px">
                      Chờ Duyệt
                    </button>
                  </td>

                  <td class="align-middle text-center" rowspan="2">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                      Hủy Đơn
                    </button>
                  </td>
                </tr>
                <tr>
                  <td class="align-middle text-wrap" style="min-width: 200px; max-width: 300px; white-space: normal;">Chuột Gaming</td>
                  <td class="align-middle text-center">2</td>
                  <td class="align-middle text-danger text-center">500.000 ₫</td>
                </tr>

                <!-- Static Row 2 -->
                <tr>
                  <td class="align-middle text-center" rowspan="1">HD987654</td>
                  <td class="align-middle text-center" rowspan="1">Trần B</td>
                  <td class="align-middle text-center" rowspan="1">04/07/2026 15:30</td>
                  <td class="align-middle text-center" rowspan="1">0987654321</td>
                  
                  <td class="align-middle text-wrap" style="min-width: 200px; max-width: 300px; white-space: normal;">Laptop HP Pavilion 14</td>
                  <td class="align-middle text-center">1</td>
                  <td class="align-middle text-danger text-center">16.990.000 ₫</td>

                  <td class="align-middle text-warning text-nowrap text-center" rowspan="1">
                    <button class="btn btn-success me-2" style="color: white; width: 127px">
                      Đã Duyệt
                    </button>
                  </td>

                  <td class="align-middle text-center" rowspan="1">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                      Hủy Đơn
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

  <!-- Modal Xóa -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hủy Hóa Đơn</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" role="alert">
            Bạn có chắc chắn muốn hủy hóa đơn <strong>HD123456</strong>?
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
    name: "DonHangAdmin"
};
</script>
<style></style>
