<template>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="topbar-logo-header">
                <div class="">
                    <img src="../../../../img/Admin.png" style="width: 150px" class="logo-icon mb-1" alt="logo icon" />
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
                    <img src="../../../../img/logo1.png" class="user-img" alt="user avatar" />
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">{{ ho_ten_admin }}</p>
                        <p class="designattion mb-0">{{ admin.vai_tro }}</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <router-link to="/admin/profile">
                            <a class="dropdown-item" href="/admin/profile"><i
                                    class="bx bx-user"></i><span>Profile</span></a>
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
            ho_ten_admin: localStorage.getItem('ho_ten_admin'),
        };
    },
    mounted() {
        const token = localStorage.getItem("admin_login");
        if (!token) {
            this.$router.push("/admin/dang-nhap");
        }
    },

    methods: {
        logout() {
        	axios.get('http://127.0.0.1:8000/api/admin/dang-xuat', {
        		headers: {
        			Authorization: "Bearer " + localStorage.getItem("admin_login"),
        		},
        	})
        		.then(res => {
        			if (res.data.status) {
        				this.$toast.success(res.data.message);
        				localStorage.removeItem('admin_login');
        				this.$router.push('/admin/dang-nhap');
        			} else {
        				this.$toast.error(res.data.message);
        			}
        		})
        		.catch(error => {
                    console.error(error);
        			this.$toast.error("Lỗi đăng xuất");
        		});
        },
        // logoutAll() {
        //     axios
        //         .get("http://127.0.0.1:8000/api/admin/dang-xuat-tat-ca", {
        //             headers: {
        //                 Authorization: "Bearer " + localStorage.getItem("nhan_vien_login"),
        //             },
        //         })
        //         .then((res) => {
        //             if (res.data.status) {
        //                 this.$toast.success(res.data.message);
        //                 localStorage.removeItem("nhan_vien_login");
        //                 this.$router.push("/admin/dang-nhap");
        //             } else {
        //                 this.$toast.error(res.data.message);
        //             }
        //         })
        //         .catch((res) => {
        //             const list = Object.values(res.res.data.errors);
        //             list.forEach((v, i) => {
        //                 this.$toast.error(v[0]);
        //             });
        //         });
        // },
    },
};
</script>
<style></style>
