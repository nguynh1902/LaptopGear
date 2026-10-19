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
                        v-model="noi_dung_tim"
                        type="text"
                        class="form-control search-control"
                        placeholder="Tìm kiếm?"
                    />

                    <span 
                        @click="timKiem()"
                        class="position-absolute top-50 search-show translate-middle-y">
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

                    <img :src="avatar" class="user-img" alt="user avatar" />

                    <div class="user-info ps-3">
                        <p class="user-name mb-0">{{ ho_ten }}</p>
                        <p class="designattion mb-0">{{ isLoggedIn ? 'Khách Hàng' : 'Tài khoản' }}</p>
                    </div>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <template v-if="isLoggedIn">
                        <li>
                            <router-link 
                                to="/khach-hang/profile"
                                class="dropdown-item">
                                <i class="bx bx-user"></i>
                                <span>Profile</span>
                            </router-link>
                        </li>

                        <li>
                            <a @click="logout()" class="dropdown-item" href="javascript:;">
                                <i class="bx bx-log-out-circle"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </template>
                    <template v-else>
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
                    </template>
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
            khach_hang: {},
            ho_ten: localStorage.getItem("ho_ten_khach_hang") || "Khách",
            avatar: localStorage.getItem("avatar_khach_hang") || "/img/logo.png",
            isLoggedIn: !!localStorage.getItem("khach_hang_login"),
            noi_dung_tim: "",
        };
    },

    mounted() {
        this.syncUser();
    },

    methods: {
        syncUser() {
            this.isLoggedIn = !!localStorage.getItem("khach_hang_login");
            this.ho_ten = localStorage.getItem("ho_ten_khach_hang") || (this.isLoggedIn ? "Khách Hàng" : "Khách");
            this.avatar = localStorage.getItem("avatar_khach_hang") || "/img/logo.png";
            const kh = localStorage.getItem("khach_hang");
            if (kh) {
                try {
                    this.khach_hang = JSON.parse(kh);
                } catch (e) {
                    this.khach_hang = {};
                }
            }
        },

        timKiem() {
            this.$router.push({
                name: "name_tim_kiem",
                params: {
                    thong_tin: this.noi_dung_tim,
                },
            });
        },

        logout() {
            const token = localStorage.getItem("khach_hang_login");
            const clearLocal = () => {
                localStorage.removeItem("khach_hang_login");
                localStorage.removeItem("khach_hang");
                localStorage.removeItem("ho_ten_khach_hang");
                localStorage.removeItem("avatar_khach_hang");
                this.isLoggedIn = false;
                this.ho_ten = "Khách";
                this.avatar = "/img/logo.png";
                this.$router.push("/khach-hang/dang-nhap");
            };

            if (token) {
                axios.get("http://127.0.0.1:8000/api/khach-hang/dang-xuat", {
                    headers: {
                        Authorization: "Bearer " + token,
                    },
                })
                .then((res) => {
                    this.$toast.success(res.data.message || "Đăng xuất thành công");
                    clearLocal();
                })
                .catch(() => {
                    clearLocal();
                });
            } else {
                clearLocal();
            }
        },
    },
};
</script>

<style>

</style>