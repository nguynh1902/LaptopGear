<template>
    <div class="page-content">
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <div class="position-relative">
                                        <img src="https://th.bing.com/th/id/OIP.V0NH3fa-mZ4AJ94SEQTy_wHaHa?rs=1&pid=ImgDetMain"
                                            alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                        <button
                                            class="btn btn-light btn-sm rounded-circle position-absolute bottom-0 end-0">
                                            <i class="fa-solid fa-camera"></i>
                                        </button>
                                    </div>
                                    <div class="mt-3">
                                        <h4>Nguyễn Admin</h4>
                                        <p class="text-secondary mb-1">Quản trị viên</p>
                                        <p class="text-muted font-size-sm">
                                            <i class="fa-solid fa-circle text-success me-1"></i>
                                            Đang hoạt động
                                        </p>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">
                                            <i class="fa-solid fa-envelope text-primary me-2"></i>
                                            Email
                                        </h6>
                                        <span class="text-secondary">admin@laptopgear.com</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">
                                            <i class="fa-solid fa-phone text-primary me-2"></i>
                                            Số điện thoại
                                        </h6>
                                        <span class="text-secondary">0987654321</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">
                                            <i class="fa-solid fa-calendar text-primary me-2"></i>
                                            Ngày tham gia
                                        </h6>
                                        <span class="text-secondary">01/01/2026</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">
                                            <i class="fa-solid fa-clock text-primary me-2"></i>
                                            Lần cuối đăng nhập
                                        </h6>
                                        <span class="text-secondary">Hôm nay, 10:30</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="border rounded-3 p-4 mb-4">
                                    <h5 class="mb-4 text-primary">
                                        <i class="fa-regular fa-user me-2"></i>
                                        Thông tin cá nhân
                                    </h5>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Họ và tên</h6>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="Nguyễn Admin">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="admin@laptopgear.com">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Số điện thoại</h6>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="0987654321">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Địa chỉ</h6>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="Hà Nội">
                                        </div>
                                    </div>
                                </div>

                                <div class="border rounded-3 p-4">
                                    <h5 class="mb-4 text-primary">
                                        <i class="fa-solid fa-lock me-2"></i>
                                        Đổi mật khẩu
                                    </h5>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Mật khẩu hiện tại</h6>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" placeholder="Nhập mật khẩu hiện tại">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Mật khẩu mới</h6>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" placeholder="Nhập mật khẩu mới">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Xác nhận mật khẩu</h6>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" placeholder="Xác nhận mật khẩu mới">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-12 d-flex justify-content-end">
                                            <button type="button" class="btn btn-outline-primary">Thay Đổi Mật Khẩu</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end mt-4">
                                    <button type="button" class="btn btn-light me-2">Hủy thay đổi</button>
                                    <button type="button" class="btn btn-primary px-4">
                                        <i class="fa-regular fa-floppy-disk me-2"></i>
                                        Lưu thay đổi
                                    </button>
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
    name: "ProfileAdmin"
}
</script>

<style scoped>
.list-group-item {
    padding: 0.75rem 1.25rem;
}
</style>
