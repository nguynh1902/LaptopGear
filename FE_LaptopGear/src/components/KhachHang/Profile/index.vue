<template>
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <ul class="nav nav-tabs nav-fill mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#profile">
                                <i class="fa-solid fa-user me-2"></i>Thông tin cá nhân
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#address">
                                <i class="fa-solid fa-location-dot me-2"></i>Địa chỉ nhận hàng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#password">
                                <i class="fa-solid fa-lock me-2"></i>Đổi mật khẩu
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="profile">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body text-center p-4">
                                            <img v-bind:src="user.avatar" alt="Avatar"
                                                class="rounded-circle mb-3 shadow-sm" width="120" height="120" />
                                            <h2 class="mb-1">{{user.ho_ten}}</h2>
                                            <p class="text-muted mb-3">Khách hàng thân thiết</p>
                                            <div class="row mt-5">
                                                <div class="col-5 text-center ms-auto">
                                                    <h1 class="mb-3 text-danger"><b>12</b></h1>
                                                    <h5 class="text-muted">Đơn hàng</h5>
                                                </div>
                                                <div class="col-5 text-center me-auto">
                                                    <h1 class="mb-3 text-primary"><b>5</b></h1>
                                                    <h5 class="text-muted">Đánh giá</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body p-4">
                                            <h3 class="card-title mb-4">Thông tin cá nhân</h3>
                                            <form>
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Họ và tên</label>
                                                        <input v-model="user.ho_ten" type="text"
                                                            class="form-control" placeholder="Nhập họ và tên" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Email</label>
                                                        <input v-model="user.email" type="email"
                                                            class="form-control" placeholder="example@email.com" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Số điện thoại</label>
                                                        <input v-model="user.sdt" type="tel" class="form-control"
                                                            placeholder="0123 456 789" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Giới Tính</label>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    id="gioi_tinh_nam" value="1"
                                                                    v-model="user.gioi_tinh" />
                                                                <label class="form-check-label"
                                                                    for="gioi_tinh_nam">Nam</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    id="gioi_tinh_nu" value="0"
                                                                    v-model="user.gioi_tinh" />
                                                                <label class="form-check-label"
                                                                    for="gioi_tinh_nu">Nữ</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <label class="form-label">Ảnh đại diện</label>
                                                        <input v-model="user.avatar" type="text"
                                                            class="form-control"
                                                            placeholder="Nhập vào link đường ảnh giao diện - ta sẽ upload file sau" />
                                                    </div>
                                                </div>
                                                <div class="text-end mt-4">
                                                    <button type="button" class="btn btn-light me-2">Huỷ</button>
                                                    <button type="button" v-on:click="updateProfile()"
                                                        class="btn btn-primary px-4">
                                                        Lưu thay đổi
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0 ms-4">Địa chỉ nhận hàng</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDiaChiModal">
                                    <i class="fa-solid fa-plus me-2"></i>Thêm địa chỉ
                                </button>
                            </div>
                            <template v-for="(value, index) in list_dia_chi" :key="index">
                                <div class="card border border-primary">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">{{ value.ten_nguoi_nhan }}</h6>
                                                <p class="mb-1">{{ value.so_dien_thoai }}</p>
                                                <p class="mb-0 text-muted">
                                                    {{ value.dia_chi }}, {{ value.ten_quan_huyen }}, {{
                                                    value.ten_tinh_thanh }}
                                                </p>
                                            </div>
                                            <div>
                                                <button v-on:click="Object.assign(detail_dia_chi, value)"
                                                    class="btn btn-outline-primary btn-2xl me-2" data-bs-toggle="modal"
                                                    data-bs-target="#updateDiaChiModal">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                                <button v-on:click="Object.assign(detail_dia_chi, value)"
                                                    class="btn btn-outline-danger btn-2xl" data-bs-toggle="modal"
                                                    data-bs-target="#deleteDiaChiModal">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div class="tab-pane fade" id="password">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body p-4">
                                            <h5 class="card-title mb-4">Đổi mật khẩu</h5>

                                            <div class="mb-3">
                                                <label class="form-label fw-semibold">Mật khẩu hiện tại</label>
                                                <input type="password" class="form-control"
                                                    v-model="doi_mat_khau.old_password"
                                                    placeholder="Nhập mật khẩu hiện tại" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold">Mật khẩu mới</label>
                                                <input type="password" class="form-control"
                                                    v-model="doi_mat_khau.password" placeholder="Nhập mật khẩu mới" />
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label fw-semibold">Xác nhận mật khẩu mới</label>
                                                <input type="password" class="form-control"
                                                    v-model="doi_mat_khau.re_password"
                                                    placeholder="Nhập lại mật khẩu mới" />
                                            </div>
                                            <button v-on:click="doiMatKhau()" type="submit"
                                                class="btn btn-primary px-4">
                                                Cập nhật mật khẩu
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

    <!-- Modal Thêm Mới Địa Chỉ-->
    <div class="modal fade" id="addDiaChiModal" tabindex="-1" aria-labelledby="addDiaChiModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addDiaChiModalLabel">Thêm Mới Địa Chỉ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="">Họ và tên</label>
                            <input v-model="dia_chi.ten_nguoi_nhan" type="text" class="form-control mt-2 mb-3"
                                placeholder="Nhập địa chỉ" />
                        </div>
                        <div class="col-lg-12">
                            <label class="">Số điện thoại</label>
                            <input v-model="dia_chi.so_dien_thoai" type="text" class="form-control mt-2 mb-3"
                                placeholder="Nhập số điện thoại" />
                        </div>
                        <div class="col-lg-12">
                            <label class="">Địa chỉ</label>
                            <input v-model="dia_chi.dia_chi" type="text" class="form-control mt-2 mb-3"
                                placeholder="Nhập địa chỉ" />
                        </div>
                        <div class="col-lg-12">
                            <label class="">Chọn Tỉnh Thành</label>
                            <select v-on:change="loadQuanHuyen(dia_chi.id_tinh_thanh)" v-model="dia_chi.id_tinh_thanh"
                                class="form-select mt-2 mb-3">
                                <template v-for="(value, index) in list_tinh_thanh" :key="index">
                                    <option v-bind:value="value.id">{{ value.ten_tinh_thanh }}</option>
                                </template>
                            </select>
                        </div>
                        <div class="col-lg-12" v-if="dia_chi.id_tinh_thanh">
                            <label class="">Quận Huyện</label>
                            <select v-model="dia_chi.id_quan_huyen" class="form-select mt-2 mb-3">
                                <template v-for="(value, index) in list_quan_huyen" :key="index">
                                    <option v-bind:value="value.id">{{ value.ten_quan_huyen }}</option>
                                </template>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button @click="addDiaChi()" type="button" class="btn btn-primary" data-bs-dismiss="modal">Thêm
                        Mới</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cập Nhật Địa Chỉ-->
    <div class="modal fade" id="updateDiaChiModal" tabindex="-1" aria-labelledby="updateDiaChiModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addDiaChiModalLabel">Cập Nhật Địa Chỉ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label class="">Họ và tên</label>
                        <input v-model="detail_dia_chi.ten_nguoi_nhan" type="text" class="form-control mt-1"
                            placeholder="Nhập địa chỉ" />
                    </div>
                    <div class="mb-2">
                        <label class="">Số điện thoại</label>
                        <input v-model="detail_dia_chi.so_dien_thoai" type="text" class="form-control mt-1"
                            placeholder="Nhập số điện thoại" />
                    </div>
                    <div class="mb-2">
                        <label class="">Địa chỉ</label>
                        <input v-model="detail_dia_chi.dia_chi" type="text" class="form-control" />
                    </div>
                    <div class="mb-2">
                        <label class="">Quận Huyện</label>
                        <select v-model="detail_dia_chi.id_quan_huyen" class="form-select mt-1">
                            <template v-for="(value, index) in list_quan_huyen" :key="index">
                                <option v-bind:value="value.id">{{ value.ten_quan_huyen }}</option>
                            </template>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button @click="updateDiaChi()" type="button" class="btn btn-primary" data-bs-dismiss="modal">
                        Xác Nhận
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Xóa Địa Chỉ-->
    <div class="modal fade" id="deleteDiaChiModal" tabindex="-1" aria-labelledby="deleteDiaChiModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addDiaChiModalLabel">Xóa Địa Chỉ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning" role="alert">
                        Bạn có chắc chắn muốn xóa địa chỉ
                        <b>{{ detail_dia_chi.dia_chi }}, {{ detail_dia_chi.ten_quan_huyen }}, {{
                            detail_dia_chi.ten_tinh_thanh }}</b>
                        này không?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button @click="deleteDiaChi()" type="button" class="btn btn-primary" data-bs-dismiss="modal">
                        Xác Nhận
                    </button>
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
            edit_profile: {},
            khach_hang: {},
            list_dia_chi: [],
            dia_chi: {},
            detail_dia_chi: {},
            user: {},
            doi_mat_khau: {
                old_password: "",
                password: "",
                re_password: "",

            },
        };
    },
    mounted() {
        const token = localStorage.getItem("khach_hang_login");
        if (!token) {
            this.$toast.error("Vui lòng đăng nhập!");
            this.$router.push("/khach-hang/dang-nhap");
            return;
        }
        this.layThongTinLogin();
    },
    // this.loadDiaChi();
    // this.layThongTinLogin();
    methods: {
        updateProfile() {
            var token = localStorage.getItem("khach_hang_login");
            axios.post("http://127.0.0.1:8000/api/khach-hang/profile/update", this.user, {
                headers: {
                    Authorization: "Bearer " + token,
                },
            }).then((res) => {
                if (res.data.status) {
                    this.$toast.success(res.data.message);
                } else {
                    this.$toast.error(res.data.message);
                }
            }).catch(() => {
                this.$toast.error("Có lỗi xảy ra khi cập nhật!");
            });
        },

        layThongTinLogin() {
            var token = localStorage.getItem("khach_hang_login");
            axios
                .get("http://127.0.0.1:8000/api/khach-hang/profile", {
                    headers: {
                        Authorization: "Bearer " + token,
                    },
                })
                .then((res) => {
                    if (res.data.status) {
                        console.log(res.data.data);
                        this.user = res.data.data;
                    } else {
                        this.$toast.error(res.data.message);
                    }
                });
        },

    },
};
</script>

<style></style>
