<template>
  <div class="row mt">
    <div class="col-lg-12 text-center mb-2">
      <div class="d-inline-block">
<h2 class="text-dark"><b>SẢN PHẨM THEO DANH MỤC: <b class="text-primary"> Laptop Gaming</b> </b></h2>
        <div class="text-center">
          <hr class="bg-dark mb-3" style="width: 100%; height: 4px; border: none; border-radius: 5px" />
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="row">
          <div class="col-lg-3 mb-4">
            <router-link to="/khach-hang/chi-tiet-san-pham/1" class="text-decoration-none text-dark">
              <div class="card h-100">
                <img src="https://product.hstatic.net/200000722513/product/thumb_gigabyte_g5_mf5-52vn383sh_5c4b3f8dd0e14ff2be9dc3df4fc9d5eb.png" class="card-img-top" />
                <div class="card-body">
                  <h6>Laptop Gaming Mẫu 1</h6>
                  <h6 class="text-muted text-decoration-line-through">20.000.000đ</h6>
                  <h5 class="text-danger">18.000.000đ</h5>
                </div>
              </div>
            </router-link>
          </div>
          <div class="col-lg-3 mb-4">
            <router-link to="/khach-hang/chi-tiet-san-pham/2" class="text-decoration-none text-dark">
              <div class="card h-100">
                <img src="https://product.hstatic.net/200000722513/product/thumb_gigabyte_g5_mf5-52vn383sh_5c4b3f8dd0e14ff2be9dc3df4fc9d5eb.png" class="card-img-top" />
                <div class="card-body">
                  <h6>Laptop Gaming Mẫu 2</h6>
                  <h6 class="text-muted text-decoration-line-through">25.000.000đ</h6>
                  <h5 class="text-danger">23.000.000đ</h5>
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
    name: "SanPhamTheoDanhMucClient"
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
