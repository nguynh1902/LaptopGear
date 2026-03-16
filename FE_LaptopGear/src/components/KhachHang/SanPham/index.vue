<template>
  <div class="row mt">
    <div class="col-lg-12 text-center mb-2">
      <div class="d-inline-block">
        <h2 class="text-dark"><b>TẤT CẢ SẢN PHẨM</b></h2>
        <div class="text-center">
          <hr class="bg-dark mb-3" style="width: 100%; height: 4px; border: none; border-radius: 5px" />
        </div>
      </div>
    </div>
  </div>
  <div class="row mt">
    <div class="col-lg-12">
      <div class="card-header">
        <!-- Lặp qua từng danh mục đang hoạt động -->
        <template v-for="(danh_muc, index) in list_danh_muc.filter((x) => x.trang_thai === 1)" :key="index">
          <div class="row ">
            <div class="col">
              <div class="d-flex align-items-center bg-light">
                <div class="ribbon-blue">{{ danh_muc.ten_danh_muc }}</div>
                <div class="d-flex align-items-center flex-wrap ms-3 price-filter py-2">
                  <span class="price-label">Mức giá:</span>
<a href="#" @click.prevent="chonMucGia(danh_muc.ma_dm, 5000000, 10000000)">5 TRIỆU - 10 TRIỆU</a>
                  <a href="#" @click.prevent="chonMucGia(danh_muc.ma_dm, 10000000, 20000000)">10 TRIỆU - 20 TRIỆU</a>
                  <a href="#" @click.prevent="chonMucGia(danh_muc.ma_dm, 20000000, 30000000)">20 TRIỆU - 30 TRIỆU</a>
                  <a href="#" @click.prevent="chonMucGia(danh_muc.ma_dm, 30000000, 40000000)">30 TRIỆU - 40 TRIỆU</a>
                  <a href="#" @click.prevent="chonMucGia(danh_muc.ma_dm, 40000000, 50000000)">40 TRIỆU - 50 TRIỆU</a>
                  <a href="#" @click.prevent="chonMucGia(danh_muc.ma_dm, 50000000, Infinity)">TRÊN 50 TRIỆU</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Lưới sản phẩm theo danh mục -->
          <div class="card-body mt-3">
            <div class="row product-grid">
<template
  v-for="(sp, i) in list_laptop.filter((x) => {
    const dmMatch = x.trang_thai === 1 && x.ma_dm === danh_muc.ma_dm;
    const priceMatch =
      !selectedPriceRange || selectedPriceRange.ma_dm !== danh_muc.ma_dm ||
      (x.don_gia >= selectedPriceRange.min && x.don_gia <= selectedPriceRange.max);
    return dmMatch && priceMatch;
  })"
  :key="i"
>
  <div class="col-lg-3">
    <router-link :to="'/khach-hang/chi-tiet-san-pham/' + sp.id">
      <div class="card flex-fill">
        <img :src="sp.hinh" class="card-img-top ms-5" style="height: 200px; width: 65%" />
        <div class="card-body">
          <h6 class="card-title cursor-pointer" style="height: 80px">
            {{ sp.ten_sp }}
          </h6>
          <div class="row mt-2">
            <div class="col-lg-5 mt-1 text-center">
              <h6 class="text-decoration-line-through text-muted">{{ sp.gia_cu }}đ</h6>
            </div>
            <div class="col-lg-7 text-end">
              <h5 class="text-danger fw-bold">{{ formatVND(sp.don_gia) }}</h5>
            </div>
          </div>
        </div>
      </div>
    </router-link>
  </div>
</template>

            </div>
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
       selectedPriceRange: {},
    };
  },
  mounted() {
    this.getLaptop();
    this.getDanhMuc();
  },
  methods: {
        chonMucGia(ma_dm, min, max) {
      this.selectedPriceRange = { ma_dm, min, max };
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
      axios.get("http://127.0.0.1:8000/api/khach-hang/danh-muc/get-data").then((res) => {
        this.list_danh_muc = res.data.data;
      });
    },
    formatVND(number) {
      return new Intl.NumberFormat("vi-VI", { style: "currency", currency: "VND" }).format(number);
    },
  },
};
</script>
<style>
/* thanh  */
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
</style>.