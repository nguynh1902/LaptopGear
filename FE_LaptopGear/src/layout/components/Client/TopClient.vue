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
                        <a @click="logout()" class="dropdown-item" href="javascript:;">
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
import axios from "axios";

export default {
    data() {
        return {
            khach_hang: {},
            ho_ten: localStorage.getItem("ho_ten_khach_hang"),
            avatar: localStorage.getItem("avatar_khach_hang") || 'https://st3.depositphotos.com/15648834/17930/v/450/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg',
            noi_dung_tim: "",
        };
    },

    mounted() {
        const token = localStorage.getItem("khach_hang_login");

        if (!token) {
            // Optional: don't force redirect if they are on a public page
        }
    },

    methods: {

        timKiem() {
            this.$router.push({
                name: "name_tim_kiem",
                params: {
                    thong_tin: this.noi_dung_tim,
                },
            });
        },

        logout() {
            axios.get("http://127.0.0.1:8000/api/khach-hang/dang-xuat", {
                headers: {
                    Authorization:
                        "Bearer " + localStorage.getItem("khach_hang_login"),
                },
            })
            .then((res) => {

                if (res.data.status) {
                    this.$toast.success(res.data.message);

                    localStorage.removeItem("khach_hang_login");
                    localStorage.removeItem("ho_ten_khach_hang");
                    localStorage.removeItem("avatar_khach_hang");

                    this.$router.push("/khach-hang/dang-nhap");
                } 
                else {
                    this.$toast.error(res.data.message);
                }

            })
            .catch((error) => {

                if (error.response && error.response.data.errors) {

                    const list = Object.values(error.response.data.errors);

                    list.forEach((v) => {
                        this.$toast.error(v[0]);
                    });

                }

            });
        },
    },
};
</script>

<style>

</style>