<template>
  <div class="row mt">
    <div class="col-lg-12 text-center mb-2">
      <div class="d-inline-block">
        <h2 class="text-dark">
          <b>SẢN PHẨM THEO DANH MỤC: <b class="text-primary"> LAPTOP GAMING</b></b>
        </h2>
        <div class="text-center">
          <hr class="bg-dark mb-3" style="width: 100%; height: 4px; border: none; border-radius: 5px" />
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="row">
        <!-- Sản phẩm mẫu 1 -->
        <div class="col-lg-3 mb-4">
          <router-link to="/khach-hang/chi-tiet-san-pham/1" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_6_18.png" class="card-img-top" />
              <div class="card-body">
                <h6>Laptop Acer Aspire 7 A715 (Ryzen 5 | GTX 1650 | SSD 512GB)</h6>
                <h6 class="text-muted text-decoration-line-through">17.500.000đ</h6>
                <h5 class="text-danger">15.900.000 ₫</h5>
              </div>
            </div>
          </router-link>
        </div>

        <!-- Sản phẩm mẫu 2 -->
        <div class="col-lg-3 mb-4">
          <router-link to="/khach-hang/chi-tiet-san-pham/2" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_1__4_42_2.png" class="card-img-top" />
              <div class="card-body">
                <h6>Laptop Gigabyte G5 KF (i5 Gen 12 | RTX 4060 | SSD 512GB | 144Hz)</h6>
                <h6 class="text-muted text-decoration-line-through">27.900.000đ</h6>
                <h5 class="text-danger">25.900.000 ₫</h5>
              </div>
            </div>
          </router-link>
        </div>

        <!-- Sản phẩm mẫu 3 -->
        <div class="col-lg-3 mb-4">
          <router-link to="/khach-hang/chi-tiet-san-pham/3" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_1__5_9.png" class="card-img-top" />
              <div class="card-body">
                <h6>Laptop ASUS ROG Strix G16 (i7 Gen 13 | RTX 4070 | 16GB | SSD 1TB)</h6>
                <h6 class="text-muted text-decoration-line-through">42.900.000đ</h6>
                <h5 class="text-danger">39.900.000 ₫</h5>
              </div>
            </div>
          </router-link>
        </div>

        <!-- Sản phẩm mẫu 4 -->
        <div class="col-lg-3 mb-4">
          <router-link to="/khach-hang/chi-tiet-san-pham/4" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/l/a/laptop-asus-vivobook-15-oled-a1505va-ma468w_1_.png" class="card-img-top" />
              <div class="card-body">
                <h6>Laptop ASUS Vivobook 15 OLED (i5 Gen 13 | RAM 16GB | SSD 512GB)</h6>
                <h6 class="text-muted text-decoration-line-through">19.900.000đ</h6>
                <h5 class="text-danger">17.900.000 ₫</h5>
              </div>
            </div>
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {},
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
