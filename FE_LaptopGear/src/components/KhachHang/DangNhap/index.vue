<template>
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="text-uppercase">Đăng Nhập Khách Hàng <span class="text-primary fw-bold">Laptop
                                            Gear</span></h3>
                                    <p>
                                        Bạn chưa có tài khoản?
                                        <router-link to="/khach-hang/dang-ky">
                                            <a href="/khach-hang/dang-ky">Đăng ký ngay</a>
                                        </router-link>
                                    </p>
                                </div>
                                <div class="login-separater text-center mb-4">
                                    <span>OR</span>
                                    <hr />
                                </div>
                                <div class="form-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-transparent">
                                                    <i class="fa-solid fa-envelope"></i>
                                                </span>
                                                <input v-model="user.email" class="form-control border-start-0"
                                                    placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Mật khẩu</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-transparent">
                                                    <i class="fa-solid fa-lock"></i>
                                                </span>
                                                <input v-model="user.mat_khau" class="form-control border-start-0"
                                                    placeholder="Mật khẩu" />
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6 text-end"><a href="">Quên mật khẩu</a></div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button v-on:click="Login()" class="btn btn-primary btn-pill">
                                                    <i class="bx bxs-lock-open"></i>Đăng Nhập
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
            user: {
                email: '',
                mat_khau: ''
            }
        };
    },
    methods: {
        Login() {
            axios
                .post("http://127.0.0.1:8000/api/khach-hang/dang-nhap", this.user)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        localStorage.setItem('khach_hang_login', res.data.token);
                        localStorage.setItem('ho_ten_khach_hang', res.data.ho_ten);
                        if (res.data.avatar) {
                            localStorage.setItem('avatar_khach_hang', res.data.avatar);
                        } else {
                            localStorage.removeItem('avatar_khach_hang');
                        }
                        this.$router.push('/trang-chu');
                    } else {
                        this.$toast.error(res.data.message);
                    }
                })
                .catch((error) => {
                    console.error(error);
                    this.$toast.error("Lỗi kết nối tới máy chủ");
                })
        }
    },
};
</script>
<style></style>
