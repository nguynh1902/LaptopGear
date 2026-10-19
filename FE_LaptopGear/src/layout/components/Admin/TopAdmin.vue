<template>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="topbar-logo-header">
                <div class="">
                    <img src="/img/Admin.png" style="width: 150px" class="logo-icon mb-1" alt="logo icon" />
                </div>
            </div>
            <div class="mobile-toggle-menu"><i class="bx bx-menu"></i></div>
            <div class="search-bar flex-grow-1">
                <div class="position-relative search-bar-box">
                    <input type="text" class="form-control search-control" placeholder="Tìm Kiếm?" />
                    <span class="position-absolute top-50 search-show translate-middle-y"><i
                            class="bx bx-search"></i></span>
                    <span class="position-absolute top-50 search-close translate-middle-y"><i
                            class="bx bx-x"></i></span>
                </div>
            </div>
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/img/logo1.png" class="user-img" alt="user avatar" />
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">{{ ho_ten_admin }}</p>
                        <p class="designattion mb-0">{{ admin.vai_tro || 'Quản trị viên' }}</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <router-link to="/admin/profile">
                            <span class="dropdown-item"><i class="bx bx-user"></i><span>Profile</span></span>
                        </router-link>
                    </li>
                    <li>
                        <a v-on:click="logout()" class="dropdown-item" href="javascript:;"><i
                                class="bx bx-log-out-circle"></i><span>Logout</span></a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </div>
</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
            admin: {},
            ho_ten_admin: localStorage.getItem('ho_ten_admin') || "Quản trị viên",
        };
    },
    mounted() {
        this.ho_ten_admin = localStorage.getItem('ho_ten_admin') || "Quản trị viên";
        const adminStr = localStorage.getItem("admin");
        if (adminStr) {
            try {
                this.admin = JSON.parse(adminStr);
            } catch (e) {
                this.admin = {};
            }
        }
    },

    methods: {
        logout() {
            const token = localStorage.getItem("admin_login");
            const clearAdmin = () => {
                localStorage.removeItem("admin_login");
                localStorage.removeItem("admin");
                localStorage.removeItem("ho_ten_admin");
                this.$router.push("/admin/dang-nhap");
            };

            if (token) {
                axios
                    .get("http://127.0.0.1:8000/api/admin/dang-xuat", {
                        headers: {
                            Authorization: "Bearer " + token,
                        },
                    })
                    .then((res) => {
                        this.$toast.success(res.data.message || "Đăng xuất thành công");
                        clearAdmin();
                    })
                    .catch(() => {
                        clearAdmin();
                    });
            } else {
                clearAdmin();
            }
        },
    },
};
</script>
<style></style>
