<template>
  <div class="row">
    <div class="col-lg-12">
      <div class="card radius-10 border-top border-0 border-3 border-info">
        <div class="card-header d-flex justify-content-between">
          <h4 class="mt-2 text-primary"><b>DANH SÁCH NHÂN VIÊN</b></h4>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Thêm nhân viên</button>
        </div>
        <div class="card-body table-responsive">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search...." />
            <button class="btn btn-secondary input-group-text" style="width: 110px">Tìm kiếm</button>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr class="bg-primary text-light text-nowrap">
                  <th class="text-center">#</th>
                  <th class="text-center">Mã Nhân Viên</th>
                  <th class="text-center">Họ Và Tên</th>
                  <th class="text-center">Lương</th>
                  <th class="text-center">Ngày Sinh</th>
                  <th class="text-center">Địa Chỉ</th>
                  <th class="text-center">Số Điện Thoại</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Mật Khẩu</th>
                  <th class="text-center">Ghi Chú</th>
                  <th class="text-center">Trạng Thái</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <template v-for="(item, index) in list_nhan_vien" :key="index">
                  <tr>
                    <th class="align-middle text-center">{{ index + 1 }}</th>
                    <td class="align-middle text-wrap text-center">
                      {{ item.ma_nv }}
                    </td>
                    <td class="align-middle text-wrap" style="width: 200px;">
                      {{ item.ho_ten }}
                    </td>
                    <td class="align-middle text-danger text-center text-wrap">
                      {{formatVND( item.luong_cb )}}
                    </td>
                    <td class="align-middle text-wrap text-center" style="width: 100px;">
                      {{ item.ngay_sinh }}
                    </td>
                    <td class="align-middle text-wrap">
                      {{ item.dia_chi }}
                    </td>
                    <td class="align-middle text-wrap">
                      {{ item.sdt }}
                    </td>
                    <td class="align-middle text-wrap">
                      {{ item.email }}
                    </td>                    <td class="align-middle text-wrap text-center">
                      {{ item.mat_khau }}
                    </td>
                    <td class="align-middle text-wrap">
                      {{ item.ghi_chu }}
                    </td>
                    <td @click="doiTrangThai(item)" class="align-middle text-center text-nowrap" style="width: 140px">
                      <button v-if="item.trang_thai == 0" class="btn btn-secondary w-100" style="color: white">
                        Tạm tắt
                      </button>
                      <button v-if="item.trang_thai == 1" class="btn btn-success w-100" style="color: white">
                        Hoạt động
                      </button>
                    </td>
                    <td class="align-middle text-center text-nowrap" style="width: 200px">
                      <button
                        class="btn btn-info text-light me-2"
                        data-bs-toggle="modal"
                        data-bs-target="#updateModal"
                        v-on:click="Object.assign(edit_nhan_vien, item)"
                      >
                        Cập nhật
                      </button>
                      <button
                        class="btn btn-danger"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteModal"
                        v-on:click="Object.assign(del_nhan_vien, item)"
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

  <!-- Modal Thêm Mới -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Thêm Nhân Viên Mới</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Họ Và Tên</label>
              <input v-model="create_nhan_vien.ho_ten" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Lương</label>
              <input v-model="create_nhan_vien.luong_cb" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Ngày Sinh</label>
              <input v-model="create_nhan_vien.ngay_sinh" type="date" class="form-control" />
            </div>
                        <div class="col-md-6 mb-3">
              <label class="form-label">Ngày Vào Làm</label>
              <input v-model="create_nhan_vien.ho_ten" type="date" class="form-control" />
            </div>
                        <div class="col-md-6 mb-3">
              <label class="form-label">Vai Trò</label>
              <input v-model="create_nhan_vien.ten_nv" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Địa Chỉ</label>
              <input v-model="create_nhan_vien.dia_chi" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Số Điện Thoại</label>
              <input v-model="create_nhan_vien.sdt" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Email</label>
              <input v-model="create_nhan_vien.email" type="text" class="form-control" />
            </div>            <div class="col-md-6 mb-3">
              <label class="form-label">Mật Khẩu</label>
              <input v-model="create_nhan_vien.mat_khau" type="text" class="form-control" />
            </div>
            <div class="col-md-9 mb-3">
              <label class="form-label">Ghi Chú</label>
              <input v-model="create_nhan_vien.ghi_chu" type="text" class="form-control" />
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label">Trạng Thái</label>
              <select v-model="create_nhan_vien.trang_thai" class="form-select">
                <option value="0">Tạm tắt</option>
                <option value="1">Hoạt động</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" v-on:click="themNhanVien()">
            Thêm mới
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Cập Nhật -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cập Nhật Thông Tin Nhân Viên</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Mã Nhân Viên</label>
              <input v-model="edit_nhan_vien.ma_nv" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Họ Và Tên</label>
              <input v-model="edit_nhan_vien.ho_ten" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Lương</label>
              <input v-model="edit_nhan_vien.luong_cb" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Ngày Sinh</label>
              <input v-model="edit_nhan_vien.ngay_sinh" type="text" class="form-control" />
            </div>
                        <div class="col-md-6 mb-3">
              <label class="form-label">Ngày Vào Làm</label>
              <input v-model="edit_nhan_vien.ngay_vao_lam" type="date" class="form-control" />
            </div>
                        <div class="col-md-6 mb-3">
              <label class="form-label">Vai Trò</label>
              <input v-model="edit_nhan_vien.vai_tro" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Địa Chỉ</label>
              <input v-model="edit_nhan_vien.dia_chi" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Số Điện Thoại</label>
              <input v-model="edit_nhan_vien.sdt" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Email</label>
              <input v-model="edit_nhan_vien.email" type="text" class="form-control" />
            </div>
                        <div class="col-md-6 mb-3">
              <label class="form-label">Mật Khẩu</label>
              <input v-model="edit_nhan_vien.mat_khau" type="text" class="form-control" />
            </div>
            <div class="col-md-9 mb-3">
              <label class="form-label">Ghi Chú</label>
              <input v-model="edit_nhan_vien.ghi_chu" type="text" class="form-control" />
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label">Trạng Thái</label>
              <select v-model="edit_nhan_vien.trang_thai" class="form-select">
                <option value="0">Tạm tắt</option>
                <option value="1">Hoạt động</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal" v-on:click="capNhapNhanVien()">
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
          <h5 class="modal-title">Xóa Nhân Viên</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" role="alert">
            Bạn có chắc chắn muốn xóa nhân viên
            <strong>{{ del_nhan_vien.ho_ten }}</strong
            >?
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" v-on:click="xoaNhanVien()">
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
      list_nhan_vien: [],
      create_nhan_vien: {
      ho_ten: '',
      ngay_sinh: '',
      dia_chi: '',
      luong_cb: '',
      sdt: '', 
      email: '',
      mat_khau: '',
      trang_thai: '',
      ghi_chu: '',
      ngay_vao_lam: '',
      vai_tro: '',
    },
      edit_nhan_vien: {},
      del_nhan_vien: {},
    };
  },
  mounted() {
    this.getNhanVien();
  },
  methods: {
    formatVND(number) {
            return new Intl.NumberFormat("vi-VI", { style: "currency", currency: "VND" }).format(number,);
        },
    getNhanVien() {
      axios.get("http://127.0.0.1:8000/api/admin/nhan-vien/get-data")
      .then((res) => {
        this.list_nhan_vien = res.data.data;
      });
    },
    themNhanVien() {
      axios.post("http://127.0.0.1:8000/api/admin/nhan-vien/add-data", this.create_nhan_vien)
      .then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.create_nhan_vien = {};
          this.getNhanVien();
        }
      });
    },
    capNhapNhanVien() {
      axios.post("http://127.0.0.1:8000/api/admin/nhan-vien/update", this.edit_nhan_vien)
      .then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.getNhanVien();
        }
      });
    },
    xoaNhanVien() {
      axios.post("http://127.0.0.1:8000/api/admin/nhan-vien/delete", this.del_nhan_vien)
      .then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.getNhanVien();
        }
      });
    },
    doiTrangThai(value) {
      axios.post("http://127.0.0.1:8000/api/admin/nhan-vien/change-status", value).then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.getNhanVien();
        }
      });
    },
  },
};
</script>

<style></style>
