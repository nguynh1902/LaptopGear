<template>
  <div
    class="d-flex align-items-center justify-content-center my-5 my-lg-0"
    style="background-position: center; height: 100vh"
  >
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="my-4 text-center"></div>
          <div class="card d-flex">
            <div class="card-body flex-full">
              <div class="border p-4 rounded">
                <div class="text-center">
                  <h3 class="text-uppercase">Đăng ký tài khoản <b class="text-primary">Laptop Gear</b></h3>
                  <p>
                    Bạn đã có tài khoản?
                    <router-link to="/khach-hang/dang-nhap">
                      <a href="/khach-hang/dang-nhap">Đăng nhập tại đây</a>
                    </router-link>
                  </p>
                </div>
                <div class="form-body">
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label class="form-label">Họ và tên</label>
                      <input type="text" class="form-control" />
                    </div>
                    <div class="col-sm-6">
                      <label for="inputEmailAddress" class="form-label">Email</label>
                      <input type="email" class="form-control" />
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label">Số điện thoại</label>
                      <input type="text" class="form-control" />
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label">Địa Chỉ</label>
                      <input type="text" class="form-control" />
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label">Giới tính</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="gioiTinhNam" value="1" name="gioi_tinh" />
                        <label class="form-check-label" for="gioiTinhNam">Nam</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="gioiTinhNu" value="0" name="gioi_tinh" />
                        <label class="form-check-label" for="gioiTinhNu">Nữ</label>
                      </div>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Mật khẩu</label>
                      <div class="input-group" id="show_hide_password">
                        <input type="password" class="form-control border-end-0" />
                        <a href="javascript:;" class="input-group-text bg-transparent">
                          <i class="bx bx-hide"></i>
                        </a>
                      </div>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Nhập Lại Mật khẩu</label>
                      <div class="input-group" id="show_hide_password">
                        <input type="password" class="form-control border-end-0" />
                        <a href="javascript:;" class="input-group-text bg-transparent">
                          <i class="bx bx-hide"></i>
                        </a>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" />
                        <label class="form-check-label" for="flexSwitchCheckChecked"
                          >Bằng việc đăng ký tài khoản, tôi đồng ý với Điều khoản dịch vụ &amp; Chính sách bảo mật của
                          <b>Laptop Gear</b>.</label
                        >
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-grid">
                        <router-link to="/khach-hang/dang-nhap" class="btn btn-primary text-uppercase">
                          <i class="bx bx-create_tai_khoan"></i> Đăng Ký
                        </router-link>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
    name: "DangKyClient"
};
</script>

<style></style>
