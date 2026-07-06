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
                        placeholder="Tìm kiếm?"
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

            <!-- USER -->
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                   href="#"
                   role="button"
                   data-bs-toggle="dropdown"
                   aria-expanded="false">

                    <img src="https://st3.depositphotos.com/15648834/17930/v/450/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" class="user-img" alt="user avatar" />

                    <div class="user-info ps-3">
                        <p class="user-name mb-0">Nguyễn Văn A</p>
                        <p class="designattion mb-0">Khách Hàng</p>
                    </div>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">

                    <li>
                        <router-link 
                            to="/khach-hang/profile"
                            class="dropdown-item">
                            <i class="bx bx-user"></i>
                            <span>Profile</span>
                        </router-link>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-log-out-circle"></i>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>
            </div>

        </nav>
    </div>
</template>

<script>
export default {
    name: "TopClient"
};
</script>

<style>

</style>