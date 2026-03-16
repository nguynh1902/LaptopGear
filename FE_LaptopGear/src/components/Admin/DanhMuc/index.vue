<template>
  <div class="row">
    <div class="col-lg-4">
      <div class="card radius-10 border-top border-0 border-3 border-info">
        <div class="card-header d-flex justify-content-between">
          <h4 class="mt-2 text-primary"><b>THÊM MỚI DANH MỤC</b></h4>
        </div>
        <div class="card-body table-responsive">
          <div class="row">
                        <div class="col-md-8 mb-3">
              <label class="form-label">Tên Danh Mục</label>
              <input v-model="create_danh_muc.ten_danh_muc" type="text" class="form-control" />
            </div>
                        <div class="col-md-4 mb-3">
              <label class="form-label">Trạng Thái</label>
              <select v-model="create_danh_muc.trang_thai" class="form-select">
                <option value="0">Tạm tắt</option>
                <option value="1">Hoạt động</option>
              </select>
            </div>


          </div>
        </div>
        <div class="card-footer  table-responsive text-end">
          <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" v-on:click="themDanhMuc()">
            Thêm mới
          </button>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="card radius-10 border-top border-0 border-3 border-info">
        <div class="card-header d-flex justify-content-between">
          <h4 class="mt-2 text-primary"><b>DANH SÁCH DANH MỤC</b></h4>
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
                  <th class="text-center">Mã Danh Mục</th>
                  <th class="text-center">Tên Danh Mục</th>
                  <th class="text-center">Trạng Thái</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <template v-for="(item, index) in list_danh_muc" :key="index">
                  <tr>
                    <th class="align-middle text-center">{{ index + 1 }}</th>
                    <td class="align-middle text-wrap text-center" style="width: 200px">
                      {{ item.ma_dm }}
                    </td>
                    <td class="align-middle text-wrap">
                      {{ item.ten_danh_muc }}
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
                        v-on:click="Object.assign(edit_danh_muc, item)"
                      >
                        Cập nhật
                      </button>
                      <button
                        class="btn btn-danger"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteModal"
                        v-on:click="Object.assign(del_danh_muc, item)"
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
          <h5 class="modal-title">Cập Nhật Thông Tin Danh Mục</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <!-- <div class="col-md-6 mb-3">
              <label class="form-label">Mã Danh Mục</label>
              <input v-model="edit_danh_muc.ma_dm" type="text" class="form-control" />
            </div> -->
            <div class="col-md-8 mb-3">
              <label class="form-label">Tên Danh Mục</label>
              <input v-model="edit_danh_muc.ten_danh_muc" type="text" class="form-control" />
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Trạng Thái</label>
              <select v-model="edit_danh_muc.trang_thai" class="form-select">
                <option value="0">Tạm tắt</option>
                <option value="1">Hoạt động</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal" v-on:click="capNhatDanhMuc()">
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
          <h5 class="modal-title">Xóa Danh Mục</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" role="alert">
            Bạn có chắc chắn muốn xóa danh mục
            <strong>{{ del_danh_muc.ten_danh_muc }}</strong
            >?
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" v-on:click="xoaDanhMuc()">
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
      list_danh_muc: [],
      create_danh_muc: {},
      edit_danh_muc: {},
      del_danh_muc: {},
    };
  },
  mounted() {
    this.getDanhMuc();
  },
  methods: {
    getDanhMuc() {
      axios.get("http://127.0.0.1:8000/api/admin/danh-muc/get-data").then((res) => {
        this.list_danh_muc = res.data.data;
      });
    },
    themDanhMuc() {
      axios.post("http://127.0.0.1:8000/api/admin/danh-muc/add-data", this.create_danh_muc).then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.create_danh_muc = {};
          this.getDanhMuc();
        }
      });
    },
    capNhatDanhMuc() {
      axios.post("http://127.0.0.1:8000/api/admin/danh-muc/update", this.edit_danh_muc).then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.getDanhMuc();
        }
      });
    },
    xoaDanhMuc() {
      axios.post("http://127.0.0.1:8000/api/admin/danh-muc/delete", this.del_danh_muc).then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.getDanhMuc();
        }
      });
    },
    doiTrangThai(value) {
      axios.post("http://127.0.0.1:8000/api/admin/danh-muc/change-status", value).then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.getDanhMuc();
        }
      });
    },
  },
};
</script>

<style></style>
