<template>
  <div class="row">
    <div class="col-lg-12">
      <div class="card radius-10 border-top border-0 border-3 border-info">
        <div class="card-header d-flex justify-content-between">
          <h4 class="mt-2 text-primary"><b>DANH SÁCH SẢN PHẨM</b></h4>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Thêm sản phẩm</button>
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
                  <th class="text-center">Tên Sản Phẩm</th>
                  <th class="text-center">Hình Ảnh</th>
                  <th class="text-center">Số Lượng</th>
                  <th class="text-center">Đơn Giá</th>
                  <th class="text-center">Giá Cũ</th>
                  <th class="text-center" style="width: 100%">Mô Tả</th>
                  <th class="text-center">Trailer</th>
                  <th class="text-center">Trạng Thái</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <template v-for="(item, index) in list_san_pham" :key="index">
                  <tr>
                    <th class="align-middle text-center">{{ index + 1 }}</th>
                    <td class="align-middle text-wrap text-center">
                      {{ item.ma_dm }}
                    </td>
                    <!-- <td class="align-middle text-wrap text-center">
                      {{ item.ma_sp }}
                    </td> -->
                    <td class="align-middle text-wrap">
                      {{ item.ten_sp }}
                    </td>
                    <td class="align-middle">
                      <img
                        :src="item.hinh"
                        alt="User Avatar"
                    class="rounded-circle"
                    width="48"
                    height="48"
                      />
                    </td>
                    <td class="align-middle text-wrap">
                      {{ item.so_luong }}
                    </td>
                    <td class="align-middle text-danger text-wrap">
                      {{ formatVND(item.don_gia) }} 
                    </td>
                    <td class="align-middle text-wrap">
                     {{ formatVND(item.gia_cu) }} 
                    </td>
                    <td class="align-middle text-wrap">
                      {{ item.mo_ta }}
                    </td>
                    <td class="align-middle text-wrap">
                      {{ item.trailer }}
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
                        v-on:click="Object.assign(edit_san_pham, item)"
                      >
                        Cập nhật
                      </button>
                      <button
                        class="btn btn-danger"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteModal"
                        v-on:click="Object.assign(del_san_pham, item)"
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
          <h5 class="modal-title">Thêm Sản Phẩm Mới</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Mã Danh Mục</label>
              <select v-model="create_san_pham.ma_dm" class="form-select">
                <option disabled value="">-- Chọn danh mục --</option>
                <option v-for="dm in list_danh_muc" :key="dm.ma_dm" :value="dm.ma_dm">
                  {{ dm.ma_dm }} - {{ dm.ten_danh_muc }}
                </option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Tên Sản Phẩm</label>
              <input v-model="create_san_pham.ten_sp" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Hình Ảnh</label>
              <input v-model="create_san_pham.hinh" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Số Lượng</label>
              <input v-model="create_san_pham.so_luong" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Đơn Giá</label>
              <input v-model="create_san_pham.don_gia" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Giá Cũ</label>
              <input v-model="create_san_pham.gia_cu" type="text" class="form-control" />
            </div>
            <div class="col-md-9 mb-3">
              <label class="form-label">Trailer</label>
              <input v-model="create_san_pham.trailer" type="text" class="form-control" />
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label">Trạng Thái</label>
              <select v-model="create_san_pham.trang_thai" class="form-select">
                <option value="0">Tạm tắt</option>
                <option value="1">Hoạt động</option>
              </select>
            </div>
            <div class="col-md-12 mb-3">
              <label class="form-label">Mô Tả</label>
              <textarea v-model="create_san_pham.mo_ta" class="form-control"> </textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" v-on:click="themSanPham()">
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
          <h5 class="modal-title">Cập Nhật Thông Tin Sản Phẩm</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Mã Danh Mục</label>
              <input v-model="edit_san_pham.ma_dm" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Mã Sản Phẩm</label>
              <input v-model="edit_san_pham.ma_sp" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Tên Sản Phẩm</label>
              <input v-model="edit_san_pham.ten_sp" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Hình Anh</label>
              <input v-model="edit_san_pham.hinh" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3 text-center">
              <label class="form-label">Số lượng</label>
              <input v-model="edit_san_pham.so_luong" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Đơn Gía</label>
              <input v-model="edit_san_pham.don_gia" type="text" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Giá Cũ</label>
              <input v-model="edit_san_pham.gia_cu" type="text" class="form-control" />
            </div>

            <div class="col-md-9 mb-3">
              <label class="form-label">Trailer</label>
              <input v-model="edit_san_pham.trailer" type="text" class="form-control" />
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label">Trạng Thái</label>
              <select v-model="edit_san_pham.trang_thai" class="form-select">
                <option value="0">Tạm tắt</option>
                <option value="1">Hoạt động</option>
              </select>
            </div>
            <div class="col-md-12 mb-3">
              <label class="form-label">Mô Tả</label>
              <textarea v-model="edit_san_pham.mo_ta" class="form-control"> </textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal" v-on:click="capNhapSanPham()">
            Cập nhật
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Xóa -->
  <div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Xóa Sản Phẩm</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="alert alert-danger" role="alert">
              Bạn có chắc chắn muốn xóa sản phẩm
              <strong>{{ del_san_pham.ten_sp }} ?</strong>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" v-on:click="xoaSanPham()">
              Xác nhận
            </button>
          </div>
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
      list_san_pham: [],
      create_san_pham: {},
      edit_san_pham: {},
      del_san_pham: {},
    };
  },
  mounted() {
    this.getSanPham();
    this.getDanhMuc();
  },
  methods: {  
            formatVND(number) {
      return new Intl.NumberFormat("vi-VI", { style: "currency", currency: "VND" }).format(number);
    },
    getDanhMuc() {
    axios.get("http://127.0.0.1:8000/api/admin/danh-muc/get-data").then((res) => {
      this.list_danh_muc = res.data.data;
    });
  },
    getSanPham() {
      axios.get("http://127.0.0.1:8000/api/admin/san-pham/get-data").then((res) => {
        this.list_san_pham = res.data.data;
      });
    },
    themSanPham() {
      axios.post("http://127.0.0.1:8000/api/admin/san-pham/add-data", this.create_san_pham).then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.create_san_pham = {};
          this.getSanPham();
        }
      });
    },
    capNhapSanPham() {
      axios.post("http://127.0.0.1:8000/api/admin/san-pham/update", this.edit_san_pham).then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.getSanPham();
        }
      });
    },
    xoaSanPham() {
      axios.post("http://127.0.0.1:8000/api/admin/san-pham/delete", this.del_san_pham).then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.getSanPham();
        }
      });
    },
    doiTrangThai(value) {
      axios.post("http://127.0.0.1:8000/api/admin/san-pham/change-status", value).then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.getSanPham();
        }
      });
    },
  },
};
</script>

<style></style>
