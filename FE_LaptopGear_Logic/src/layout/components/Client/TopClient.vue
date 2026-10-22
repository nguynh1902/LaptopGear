<template>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <!-- LOGO -->
            <div class="topbar-logo-header">
                <div>
                    <img src="/img/logo.png" style="height: 55px" alt="logo icon" />
                </div>
            </div>

            <!-- MENU MOBILE -->
            <div class="mobile-toggle-menu">
                <i class="bx bx-menu"></i>
            </div>

            <!-- SEARCH -->
            <div class="search-bar flex-grow-1">
                <div class="position-relative search-bar-box">
                    <input
                        type="text"
                        class="form-control search-control"
                        placeholder="Tìm kiếm laptop, phụ kiện..."
                    />
                    <span class="position-absolute top-50 search-show translate-middle-y">
                        <i class="bx bx-search"></i>
                    </span>
                    <span class="position-absolute top-50 search-close translate-middle-y">
                        <i class="bx bx-x"></i>
                    </span>
                </div>
            </div>

            <!-- HOTLINE -->
            <div class="text-center me-2">
                <i class="fa-solid fa-phone me-1" style="color: #ff0000"></i>
                <b class="text-danger">HOTLINE</b>
                <br />
                <b>0961 1560999</b>
            </div>

            <!-- USER (Dữ liệu tĩnh mẫu) -->
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                   href="#"
                   role="button"
                   data-bs-toggle="dropdown"
                   aria-expanded="false">
                    <img src="/img/logo.png" class="user-img" alt="user avatar" />
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">Nguyễn Văn A</p>
                        <p class="designattion mb-0">Khách Hàng</p>
                    </div>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <router-link to="/khach-hang/profile" class="dropdown-item">
                            <i class="bx bx-user"></i>
                            <span>Profile</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/khach-hang/dang-nhap" class="dropdown-item">
                            <i class="bx bx-log-in-circle"></i>
                            <span>Đăng nhập</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/khach-hang/dang-ky" class="dropdown-item">
                            <i class="bx bx-user-plus"></i>
                            <span>Đăng ký</span>
                        </router-link>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:;">
                            <i class="bx bx-log-out-circle"></i>
                            <span>Đăng xuất</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },
    methods: {},
};
</script>

<style></style>
