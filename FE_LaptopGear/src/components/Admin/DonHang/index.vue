<template>
  <div class="row">
    <div class="col-lg-12">
      <div class="card radius-10 border-top border-0 border-3 border-info">
        <div class="card-header d-flex justify-content-between">
          <h4 class="mt-2 text-primary"><b>DANH SÁCH HÓA ĐƠN</b></h4>
        </div>
        <div class="card-body table-responsive">
          <div class="input-group mb-3">
            <input v-model="search_key" type="text" class="form-control" placeholder="Search mã hóa đơn, SĐT, Email...." />
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr class="bg-primary text-light text-nowrap">
                  <th class="text-center">MHĐ</th>
                  <th class="text-center">Họ Và Tên</th>
                  <th class="text-center">Ngày đặt</th>
                  <th class="text-center">SĐT</th>
                  <th class="text-center">Tên Sản Phẩm</th>
                  <th class="text-center">Số Lượng</th>
                  <th class="text-center">Đơn Giá</th>
                  <th class="text-center">Trạng Thái</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <template v-for="(items, maHD, hoaDonIndex) in groupedHoaDonSearch" :key="maHD">
                  <template v-for="(item, idx) in items" :key="item.id">
                    <tr>
                      <td v-if="idx === 0" class="align-middle text-center" :rowspan="items.length">{{ item.ma_hoa_don }}</td>
                      <td v-if="idx === 0" class="align-middle text-center" :rowspan="items.length">{{ item.ho_ten }}</td>
                      <td v-if="idx === 0" class="align-middle text-center" :rowspan="items.length">{{ formatDate(item.created_at) }}</td>
                      <td v-if="idx === 0" class="align-middle text-center" :rowspan="items.length">{{ item.sdt }}</td>
                      
                      <td class="align-middle text-wrap" style="min-width: 200px; max-width: 300px; white-space: normal;">{{ item.ten_sp }}</td>
                      <td class="align-middle text-center">{{ item.so_luong }}</td>
                      <td class="align-middle text-danger text-center">{{ formatVND(item.don_gia) }}</td>

                      <td v-if="idx === 0" @click="duyetHoaDon(item)" class="align-middle text-warning text-nowrap text-center" :rowspan="items.length">
                        <button v-if="item.tinh_trang == 0" class="btn btn-secondary me-2" style="color: white; width: 127px">
                          Chờ Duyệt
                        </button>
                        <button v-else class="btn btn-success me-2" style="color: white; width: 127px">
                          Đã Duyệt
                        </button>
                      </td>

                      <td v-if="idx === 0" class="align-middle text-center" :rowspan="items.length">
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" @click="Object.assign(del_hoa_don, item)">
                          Hủy Đơn
                        </button>
                      </td>
                    </tr>
                  </template>
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
          <h5 class="modal-title">Hủy Hóa Đơn</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" role="alert">
            Bạn có chắc chắn muốn hủy hóa đơn <strong>{{ del_hoa_don.ma_hoa_don }}</strong>?
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" v-on:click="xoaHoaDon()">
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
      list_hoa_don: [],
      del_hoa_don: {},
      search_key: '',
    };
  },
  mounted() {
    this.getHoaDon();
  },
  computed: {
    groupedHoaDonSearch() {
      let filtered = this.list_hoa_don;
      if (this.search_key) {
        let k = this.search_key.toLowerCase();
        filtered = this.list_hoa_don.filter(i => 
          (i.ma_hoa_don && i.ma_hoa_don.toLowerCase().includes(k)) ||
          (i.sdt && i.sdt.toLowerCase().includes(k)) ||
          (i.email && i.email.toLowerCase().includes(k)) ||
          (i.ho_ten && i.ho_ten.toLowerCase().includes(k))
        );
      }

      const grouped = {};
      filtered.forEach((item) => {
        if (!grouped[item.ma_hoa_don]) {
          grouped[item.ma_hoa_don] = [];
        }
        grouped[item.ma_hoa_don].push(item);
      });
      return grouped;
    },
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
      return new Intl.NumberFormat("vi-VI", { style: "currency", currency: "VND" }).format(number);
    },
    formatDate(date) {
      const d = new Date(date);
      return d.toLocaleString('vi-VN', {
        hour: '2-digit', minute: '2-digit',
        day: '2-digit', month: '2-digit', year: 'numeric'
      });
    },
    getHoaDon() {
      axios.get("http://127.0.0.1:8000/api/admin/don-hang/get-data", this.getHeaders()).then((res) => {
        if(res.data.data) {
          this.list_hoa_don = res.data.data;
        } else if(res.data.status == 0) {
          this.$toast.error(res.data.message);
        }
      });
    },
    xoaHoaDon() {
      axios.post("http://127.0.0.1:8000/api/admin/don-hang/delete", this.del_hoa_don, this.getHeaders()).then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.getHoaDon();
        } else {
          this.$toast.error(res.data.message);
        }
      });
    },
    duyetHoaDon(item) {
      axios.post("http://127.0.0.1:8000/api/admin/don-hang/change-status", { ma_hoa_don: item.ma_hoa_don }, this.getHeaders()).then((res) => {
        if (res.data.status) {
          this.$toast.success(res.data.message);
          this.getHoaDon();
        } else {
          this.$toast.error(res.data.message);
        }
      });
    }
  },
};
</script>
<style></style>
