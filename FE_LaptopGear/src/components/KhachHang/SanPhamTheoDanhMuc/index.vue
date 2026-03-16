<template>
  <div class="row mt">
    <div class="col-lg-12 text-center mb-2">
      <div class="d-inline-block">
<h2 class="text-dark"><b>SẢN PHẨM THEO DANH MỤC: <b class="text-primary"> {{ ten_danh_muc }}</b> </b></h2>
        <div class="text-center">
          <hr class="bg-dark mb-3" style="width: 100%; height: 4px; border: none; border-radius: 5px" />
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="row">
        <template v-for="(sp, i) in list_laptop" :key="i">
          <div class="col-lg-3 mb-4">
            <router-link :to="'/khach-hang/chi-tiet-san-pham/' + sp.id" class="text-decoration-none text-dark">
              <div class="card h-100">
                <img :src="sp.hinh" class="card-img-top" />
                <div class="card-body">
                  <h6>{{ sp.ten_sp }}</h6>
                  <h6 class="text-muted text-decoration-line-through">{{ sp.gia_cu }}đ</h6>
                  <h5 class="text-danger">{{ formatVND(sp.don_gia) }}</h5>
                </div>
              </div>
            </router-link>
          </div>
        </template>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      list_laptop: [],
      list_danh_muc: [],
        ten_danh_muc: "",
    };
  },
  mounted() {
    this.loadSanPhamTheoDanhMuc();
    this.getDanhMuc();
  },
watch: {
  "$route.params.ma_dm": function () {
    this.loadSanPhamTheoDanhMuc();
    this.getDanhMuc(); // <- Thêm dòng này
  },
},
  methods: {
  loadSanPhamTheoDanhMuc() {
    const ma_dm = this.$route.params.ma_dm;
    axios.get("http://127.0.0.1:8000/api/client/Laptop/get-data-trang-chu").then((res) => {
      if (res.data.data) {
        this.list_laptop = res.data.data.filter((sp) => sp.trang_thai === 1 && sp.ma_dm === ma_dm);
      }
    });
  },
    formatVND(number) {
      return new Intl.NumberFormat("vi-VN", {
        style: "currency",
        currency: "VND",
      }).format(number);
    },
    getLaptop() {
      axios
        .get("http://127.0.0.1:8000/api/client/Laptop/get-data-trang-chu")
        .then((res) => {
          if (res.data.data) {
            this.list_laptop = res.data.data;
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
getDanhMuc() {
  const ma_dm = this.$route.params.ma_dm;

  axios.get("http://127.0.0.1:8000/api/khach-hang/danh-muc/get-data").then((res) => {
    this.list_danh_muc = res.data.data;

    // Tìm tên danh mục
    const danh_muc = this.list_danh_muc.find(dm => dm.ma_dm === ma_dm);
    if (danh_muc) {
      this.ten_danh_muc = danh_muc.ten_danh_muc;
    }
  });
},

    formatVND(number) {
      return new Intl.NumberFormat("vi-VI", { style: "currency", currency: "VND" }).format(number);
    },
  },
};
</script>
<style>
.ribbon-blue {
  background-color: #0080ff;
  color: white;
  padding: 10px 20px;
  font-weight: bold;
  font-size: 20px;
  clip-path: polygon(0 0, 95% 0, 100% 100%, 0% 100%);
  white-space: nowrap;
}

.price-filter a {
  color: #0080ff;
  margin-right: 20px;
  text-decoration: none;
  font-weight: 500;
}

.price-filter a:hover {
  text-decoration: underline;
}

.price-label {
  font-weight: bold;
  margin-left: 15px;
  margin-right: 10px;
  white-space: nowrap;
}
</style>
