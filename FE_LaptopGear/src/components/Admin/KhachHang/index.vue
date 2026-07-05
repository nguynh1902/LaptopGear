<template>
  <div class="row">
    <div class="col-lg-12">
      <div class="card radius-10 border-top border-0 border-3 border-info">
        <div class="card-header d-flex justify-content-between">
          <h4 class="mt-2 text-primary"><b>DANH SÁCH KHÁCH HÀNG</b></h4>
        </div>
        <div class="card-body table-responsive">
          <div class="input-group mb-3">
            <input v-model="search_key" type="text" class="form-control" placeholder="Search...." />
            <button
              class="btn btn-secondary input-group-text"
              style="width: 110px"
            >
              Tìm kiếm
            </button>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr class="bg-primary text-light text-nowrap">
                  <th class="text-center">#</th>
                  <th class="text-center">Mã Khách Hàng</th>
                  <th class="text-center">Avatar</th>
                  <th class="text-center">Họ Và Tên</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Địa Chỉ</th>
                  <th class="text-center">Số Điện Thoại</th>
                  <th class="text-center">Giới tính</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <template v-for="(item, index) in list_khach_hang_search" :key="index">
                  <tr>
                    <th class="align-middle text-center">{{ index + 1 }}</th>
                    <td class="align-middle text-wrap text-center">
                      {{ item.ma_kh }}
                    </td>
                    <td class="align-middle text-wrap text-center">
                      <img
                        :src="item.avatar"
                        alt="User Avatar"
                        class="rounded-circle"
                        width="48"
                        height="48"
                      />
                    </td>
                    <td class="align-middle text-wrap">
                      {{ item.ho_ten }}
                    </td>
                    <td class="align-middle text-wrap">
                      {{ item.email }}
                    </td>
                    <td class="align-middle text-wrap">
                      {{ item.dia_chi }}
                    </td>
                    <td class="align-middle text-wrap text-center">
                      {{ item.sdt }}
                    </td>
                    <td
                      @click="doiTrangThai(item)"
                      class="align-middle text-center text-nowrap"
                      style="width: 140px"
                    >
                      <div
                        v-if="item.gioi_tinh == 0"
                        class="text-dark w-100"
                        style="color: white"
                      >
                        Nữ
                      </div>
                      <div
                        v-if="item.gioi_tinh == 1"
                        class="text-dark w-100"
                        style="color: white"
                      >
                        Nam
                      </div>
                    </td>
                    <td
                      class="align-middle text-center text-nowrap"
                      style="width: 200px"
                    >
                      <button
                        class="btn btn-info text-light me-2"
                        data-bs-toggle="modal"
                        data-bs-target="#updateModal"
                        v-on:click="Object.assign(edit_khach_hang, item)"
                      >
                        Cập nhật
                      </button>
                      <button
                        class="btn btn-danger"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteModal"
                        v-on:click="Object.assign(del_khach_hang, item)"
                      >
                        Xóa
                      </button>
                    </td>
                  </tr>
                </template>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Cập Nhật -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cập Nhật Thông Tin Khách Hàng</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>

        <div class="modal-body">
          <div class="row">
            <!-- <div class="col-md-6 mb-3">
              <label class="form-label">Mã Khách Hàng</label>
              <input v-model="edit_khach_hang.ma_kh" type="text" class="form-control" />
            </div> -->
            <!-- <div class="col-md-6 mb-3">
              <label class="form-label">Mật Khẩu</label>
              <input v-model="edit_khach_hang.mat_khau" type="text" class="form-control" />
            </div> -->
            <div class="col-md-6 mb-3">
              <label class="form-label">Họ Và Tên</label>
              <input
                v-model="edit_khach_hang.ho_ten"
                type="text"
                class="form-control"
              />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Email</label>
              <input
                v-model="edit_khach_hang.email"
                type="text"
                class="form-control"
              />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Địa Chỉ</label>
              <input
                v-model="edit_khach_hang.dia_chi"
                type="text"
                class="form-control"
              />
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Số Điện Thoại</label>
              <input
                v-model="edit_khach_hang.sdt"
                type="tel"
                class="form-control"
              />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label d-block">Giới Tính</label>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  id="gioi_tinh_nam"
                  value="1"
                  v-model="edit_khach_hang.gioi_tinh"
                />
                <label class="form-check-label" for="gioi_tinh_nam">Nam</label>
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  id="gioi_tinh_nu"
                  value="0"
                  v-model="edit_khach_hang.gioi_tinh"
                />
                <label class="form-check-label" for="gioi_tinh_nu">Nữ</label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Đóng
          </button>
          <button
            type="button"
            class="btn btn-success"
            data-bs-dismiss="modal"
            v-on:click="capNhapKhachHang()"
          >
            Cập nhật
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Xóa -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Xóa Khách Hàng</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" role="alert">
            Bạn có chắc chắn muốn xóa khách hàng
            <strong>{{ del_khach_hang.ho_ten }}</strong
            >?
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Đóng
          </button>
          <button
            type="button"
            class="btn btn-danger"
            data-bs-dismiss="modal"
            v-on:click="xoaKhachHang()"
          >
            Xác nhận
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
      list_khach_hang: [],
      edit_khach_hang: {},
      del_khach_hang: {},
      search_key: '',
    };
  },
  mounted() {
    this.getKhachHang();
  },
  computed: {
    list_khach_hang_search() {
      if (!this.search_key) return this.list_khach_hang;
      let k = this.search_key.toLowerCase();
      return this.list_khach_hang.filter(i => 
        (i.ho_ten && i.ho_ten.toLowerCase().includes(k)) || 
        (i.ma_kh && i.ma_kh.toLowerCase().includes(k)) ||
        (i.email && i.email.toLowerCase().includes(k)) ||
        (i.sdt && i.sdt.toLowerCase().includes(k))
      );
    }
  },
  methods: {
    getHeaders() {
      return {
        headers: {
          Authorization: `Bearer ${localStorage.getItem("admin_login")}`
        }
      };
    },
    formatVND(number) {
      return new Intl.NumberFormat("vi-VI", {
        style: "currency",
        currency: "VND",
      }).format(number);
    },
    getKhachHang() {
      axios
        .get("http://127.0.0.1:8000/api/admin/khach-hang/get-data", this.getHeaders())
        .then((res) => {
          if(res.data.data) {
            this.list_khach_hang = res.data.data;
          } else if(res.data.status == 0) {
            this.$toast.error(res.data.message);
          }
        });
    },
    capNhapKhachHang() {
      axios
        .post(
          "http://127.0.0.1:8000/api/admin/khach-hang/update",
          this.edit_khach_hang,
          this.getHeaders()
        )
        .then((res) => {
          if (res.data.status) {
            this.$toast.success(res.data.message);
            this.getKhachHang();
          } else {
            this.$toast.error(res.data.message);
          }
        });
    },
    xoaKhachHang() {
      axios
        .post(
          "http://127.0.0.1:8000/api/admin/khach-hang/delete",
          this.del_khach_hang,
          this.getHeaders()
        )
        .then((res) => {
          if (res.data.status) {
            this.$toast.success(res.data.message);
            this.getKhachHang();
          } else {
            this.$toast.error(res.data.message);
          }
        });
    },
  },
};
</script>

<style></style>
