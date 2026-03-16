<template>
  <div class="row">
    <div class="col-lg-12">
      <div class="card radius-10 border-top border-0 border-3 border-info">
        <div class="card-header d-flex justify-content-between">
          <h4 class="mt-2 text-primary"><b>DANH SÁCH ĐÁNH GIÁ</b></h4>
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
                  <th class="text-center">Mã Đánh Giá</th>
                  <th class="text-center">Mã Sản Phẩm</th>
                  <th class="text-center">Họ Và Tên</th>
                  <th class="text-center">Nội Dung</th>
                  <th class="text-center">Ngày Đánh Giá</th>
                  <th class="text-center">Số Sao</th>
                  <th class="text-center">Trạng Thái</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <template v-for="(item, index) in list_danh_gia" :key="index">
                  <tr>
                    <th class="align-middle text-center">{{ index + 1 }}</th>
                    <td class="align-middle text-wrap text-center">
                      {{ item.ma_dg }}
                    </td>
                    <td class="align-middle text-wrap text-center">
                      {{ item.ma_sp }}
                    </td>
                    <td class="align-middle text-wrap">
                      {{ item.ho_ten }}
                    </td>
                    <td class="align-middle text-wrap">
                      {{ item.noi_dung }}
                    </td>
                    <td class="align-middle text-wrap text-center">
                      {{ item.ngay_danh_gia }}
                    </td>
                    <td class="align-middle text-wrap text-center">
                      {{ item.so_sao }}
                    </td>
                    <td @click="doiTrangThai(item)" class="align-middle text-center text-nowrap" style="width: 140px">
                      <button v-if="item.trang_thai == 0" class="btn btn-secondary w-100" style="color: white">
                        Tạm Ẩn
                      </button>
                      <button v-if="item.trang_thai == 1" class="btn btn-success w-100" style="color: white">
                        Hiện
                      </button>
                    </td>
                    <td class="align-middle text-center text-nowrap" >
                      <button
                        class="btn btn-danger"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteModal"
                        v-on:click="Object.assign(del_danh_gia, item)"
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

  <!-- Modal Xóa -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Xóa Đánh Giá</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" role="alert">
            Bạn có chắc chắn muốn xóa đánh giá của
            <strong>{{ del_danh_gia.ho_ten }}</strong
            >?
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" v-on:click="xoaDanhGia()">
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
      list_danh_gia: [],
      del_danh_gia: {},
    };
  },
  mounted() {
    this.getDanhGia();
  },
  methods: {
    getDanhGia() {
      axios.get("http://127.0.0.1:8000/api/admin/danh-gia/get-data").then((res) => {
        this.list_danh_gia = res.data.data;
      });
    },
    xoaDanhGia() {
      axios.post("http://127.0.0.1:8000/api/admin/danh-gia/delete", this.del_danh_gia).then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.getDanhGia();
        }
      });
    },
    doiTrangThai(value) {
      axios.post("http://127.0.0.1:8000/api/admin/danh-gia/change-status", value).then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.getDanhGia();
        }
      });
    },
  },
};
</script>

<style></style>
