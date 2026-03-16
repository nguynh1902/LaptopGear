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
                      <input v-model="create_tai_khoan.ho_ten" type="text" class="form-control" />
                    </div>
                    <div class="col-sm-6">
                      <label for="inputEmailAddress" class="form-label">Email</label>
                      <input v-model="create_tai_khoan.email" type="email" class="form-control" />
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label">Số điện thoại</label>
                      <input v-model="create_tai_khoan.sdt" type="text" class="form-control" />
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label">Địa Chỉ</label>
                      <input v-model="create_tai_khoan.dia_chi" type="text" class="form-control" />
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label">Giới tính</label>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          id="gioiTinhNam"
                          value="1"
                          v-model="create_tai_khoan.gioi_tinh"
                        />
                        <label class="form-check-label" for="gioiTinhNam">Nam</label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          id="gioiTinhNu"
                          value="0"
                          v-model="create_tai_khoan.gioi_tinh"
                        />
                        <label class="form-check-label" for="gioiTinhNu">Nữ</label>
                      </div>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Mật khẩu</label>
                      <div class="input-group" id="show_hide_password">
                        <input v-model="create_tai_khoan.mat_khau" type="password" class="form-control border-end-0" />
                        <a href="javascript:;" class="input-group-text bg-transparent">
                          <i class="bx bx-hide"></i>
                        </a>
                      </div>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Nhập Lại Mật khẩu</label>
                      <div class="input-group" id="show_hide_password">
                        <input
                          v-model="create_tai_khoan.re_mat_khau"
                          type="password"
                          class="form-control border-end-0"
                        />
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
                        <button @click="dangKyTaiKhoan()" type="submit" class="btn btn-primary text-uppercase">
                          <i class="bx bx-create_tai_khoan"></i> Đăng Ký
                        </button>
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
import axios from "axios";
export default {
  data() {
    return {
      create_tai_khoan: {
        ho_ten: "",
        email: "",
        sdt: "",
        dia_chi: "",
        gioi_tinh: null,

        mat_khau: "",
        re_mat_khau: "",
      },
    };
  },
  methods: {
    dangKyTaiKhoan() {
      if (this.create_tai_khoan.mat_khau !== this.create_tai_khoan.re_mat_khau) {
        this.$toast.error("Mật khẩu không trùng khớp");
        return;
      }

      const payload = { ...this.create_tai_khoan };
      delete payload.re_mat_khau;

      axios
        .post("http://127.0.0.1:8000/api/khach-hang/dang-ky", payload)
        .then((res) => {
          if (res.data.status) {
            this.$toast.success(res.data.message);
            this.create_tai_khoan = {
              ho_ten: "",
              email: "",
              sdt: "",
              dia_chi: "",
              gioi_tinh: "",
              mat_khau: "",
              re_mat_khau: "",
            };
            this.$router.push("/khach-hang/dang-nhap");
          } else {
            this.$toast.error("Đăng ký tài khoản thất bại");
          }
        })
        .catch((error) => {
          console.error(error);
          if (error.response?.status === 422) {
            const errors = error.response.data.errors;
            for (const key in errors) {
              this.$toast.error(errors[key][0]);
              break;
            }
          } else {
            this.$toast.error("Lỗi kết nối tới máy chủ");
          }
        });
    },
  },
};
</script>

<style></style>
