<template>
  <div class="row">
    <div id="carouselExampleControls" class="carousel slide pointer-event" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class=""></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class=""></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active" aria-current="true"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active rounded-4" data-bs-interval="10000" style="background-color: #1c2331">
          <div class="row">
            <div class="col-5 d-flex align-items-center">
              <div class="container ms-5">
                <h2 class="text-white mb-4">
                  Sắm laptop mới – Nhận ngay, dùng liền!
                  <i class="fa-brands fa-square-web-awesome-stroke text-warning"></i>
                </h2>
                <span class="text-white">
                  Tại Laptop Gear, chúng tôi mang đến những chiếc laptop chính hãng, cấu hình tối ưu, phù hợp mọi nhu
                  cầu học tập, làm việc, giải trí. Giao tận tay, không chờ đợi!
                </span>
                <p class="mt-4">
                  <button class="btn btn-outline-light rounded-4">
                    <b>ĐẶT HÀNG NGAY</b>
                  </button>
                </p>
              </div>
            </div>
            <div class="col-7">
              <img
                src="https://cdn.mos.cms.futurecdn.net/kZj6ncQfVcpXUzsPPPaRrm.jpg"
                class="d-block w-100 rounded-4"
                alt="..."
                style="width: 450px; height: 500px; object-fit: cover"
              />
            </div>
          </div>
        </div>
        <div class="carousel-item rounded-4" style="background-color: #1c2331">
          <div class="row">
            <div class="col-5 d-flex align-items-center">
              <div class="container ms-5">
                <h2 class="text-white mb-4">
                  Laptop hiệu năng cao đến tay bạn chỉ trong vài phút!
                  <i class="fa-brands fa-square-web-awesome-stroke text-warning"></i>
                </h2>
                <span class="text-white">
                  Laptop Gear cam kết giao máy nguyên seal, cấu hình mạnh, đúng hẹn tận nơi bạn muốn. Sẵn sàng đồng hành
                  cùng bạn mọi lúc, mọi nơi!
                </span>
                <p class="mt-4">
                  <button class="btn btn-outline-light rounded-4">
                    <b>THỬ NGAY</b>
                  </button>
                </p>
              </div>
            </div>
            <div class="col-7">
              <img
                src="https://www.lydogbillede.dk/wp-content/uploads/2025/07/Predator-Helios-16-18-lifestyle-04-custom.jpg"
                class="d-block w-100 rounded-4"
                alt="..."
                style="width: 450px; height: 500px; object-fit: cover"
              />
            </div>
          </div>
        </div>
        <div class="carousel-item rounded-4" data-bs-interval="2000" style="background-color: #1c2331">
          <div class="row">
            <div class="col-5 d-flex align-items-center">
              <div class="container ms-5">
                <h2 class="text-white mb-4">
                  Làm việc mượt mà với laptop siêu tốc, nhận hàng siêu nhanh!
                  <i class="fa-brands fa-square-web-awesome-stroke text-warning"></i>
                </h2>
                <span class="text-white">
                  Laptop Gear chuyên cung cấp các dòng laptop chất lượng, đa dạng mẫu mã, giao hàng tận nơi siêu tốc. Dù
                  bạn là dân văn phòng hay game thủ, chúng tôi đều có giải pháp cho bạn!
                </span>
                <p class="mt-4">
                  <button class="btn btn-outline-light rounded-4">
                    <b>TRẢI NGHIỆM NGAY</b>
                  </button>
                </p>
              </div>
            </div>
            <div class="col-7">
              <img
                src="https://cellphones.com.vn/sforum/wp-content/uploads/2022/01/ROG-Strix-SCAR-2.jpg"
                class="d-block w-100 rounded-4"
                alt="..."
                style="width: 400px; height: 500px; object-fit: cover"
              />
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>

  <div class="card mt-2">
    <div class="d-flex align-items-center text-white" style="background-color: #1c2331; height: 50px">
      <div
        class="d-flex align-items-center px-3 fw-bold text-white"
        style="
          background-color: red;
          clip-path: polygon(0 0, 90% 0, 100% 50%, 90% 100%, 0 100%);
          width: 250px;
          height: 100%;
        "
      >
        Liên hệ với Laptop Gear
      </div>
      <marquee class="ms-3 text-truncate">
        <b>LaptopGear</b> - Cơ sở: K266/50 Hoàng Diệu, Nam Dương, Hải Châu, Đà Nẵng - Tel: 0961 1560999 Nguyễn Thành Đạt
        - Nguyễn Văn Hiếu - Nguyễn Trọng Tính
      </marquee>
    </div>
  </div>

  <!-- GIỜ VÀNG GIÁ SỐC (Dữ liệu mẫu tĩnh) -->
  <div class="card mt-5">
    <div class="card-header" style="background-color: red">
      <div class="d-flex align-items-center text-white rounded-3">
        <h4 style="width: 30%" class="fw-bold mt-2 text-light">GIỜ VÀNG GIÁ SỐC</h4>
        <div class="d-flex align-items-center">
          <b>Còn lại</b>
          <div class="countdown-box">599</div>
          <b>giờ</b>
          <div class="countdown-box">08</div>
          <b>phút</b>
          <div class="countdown-box">41</div>
          <b>giây</b>
        </div>
        <div class="row ms-auto">
          <router-link to="/khach-hang/san-pham" class="text-white fw-bold text-decoration-underline">Xem tất cả &raquo;</router-link>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="row product-grid">
        <!-- Sản phẩm mẫu 1 -->
        <div class="col-lg-3">
          <router-link to="/khach-hang/chi-tiet-san-pham/1" class="text-decoration-none text-dark">
            <div class="card h-100">
              <span class="sale-badge">-24%</span>
              <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/l/a/laptop-asus-vivobook-15-oled-a1505va-ma468w_1_.png" class="card-img-top" />
              <div class="card-body text-center mt">
                <h5 class="text-danger fw-bold">17.900.000 ₫</h5>
                <h6 class="text-decoration-line-through text-muted">21.500.000đ</h6>
                <b class="card-text">Laptop ASUS Vivobook 15 OLED (i5 Gen 13 | RAM 16GB | SSD 512GB)</b>
              </div>
              <div class="card-footer bg-transparent text-center">
                <button class="btn btn-outline-danger fw-bold text-center rounded-pill w-100">60🔥</button>
              </div>
            </div>
          </router-link>
        </div>

        <!-- Sản phẩm mẫu 2 -->
        <div class="col-lg-3">
          <router-link to="/khach-hang/chi-tiet-san-pham/2" class="text-decoration-none text-dark">
            <div class="card h-100">
              <span class="sale-badge">-20%</span>
              <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_59__1_14.png" class="card-img-top" />
              <div class="card-body text-center mt">
                <h5 class="text-danger fw-bold">18.900.000 ₫</h5>
                <h6 class="text-decoration-line-through text-muted">22.900.000đ</h6>
                <b class="card-text">Laptop Lenovo IdeaPad Slim 5 (i5 Gen 13 | 16GB | SSD 512GB)</b>
              </div>
              <div class="card-footer bg-transparent text-center">
                <button class="btn btn-outline-danger fw-bold text-center rounded-pill w-100">50🔥</button>
              </div>
            </div>
          </router-link>
        </div>

        <!-- Sản phẩm mẫu 3 -->
        <div class="col-lg-3">
          <router-link to="/khach-hang/chi-tiet-san-pham/3" class="text-decoration-none text-dark">
            <div class="card h-100">
              <span class="sale-badge">-18%</span>
              <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_1__4_42_2.png" class="card-img-top" />
              <div class="card-body text-center mt">
                <h5 class="text-danger fw-bold">25.900.000 ₫</h5>
                <h6 class="text-decoration-line-through text-muted">29.900.000đ</h6>
                <b class="card-text">Laptop Gigabyte G5 KF (i5 Gen 12 | RTX 4060 | SSD 512GB | 144Hz)</b>
              </div>
              <div class="card-footer bg-transparent text-center">
                <button class="btn btn-outline-danger fw-bold text-center rounded-pill w-100">15🔥</button>
              </div>
            </div>
          </router-link>
        </div>

        <!-- Sản phẩm mẫu 4 -->
        <div class="col-lg-3">
          <router-link to="/khach-hang/chi-tiet-san-pham/4" class="text-decoration-none text-dark">
            <div class="card h-100">
              <span class="sale-badge">-15%</span>
              <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_1__5_9.png" class="card-img-top" />
              <div class="card-body text-center mt">
                <h5 class="text-danger fw-bold">39.900.000 ₫</h5>
                <h6 class="text-decoration-line-through text-muted">44.900.000đ</h6>
                <b class="card-text">Laptop ASUS ROG Strix G16 (i7 Gen 13 | RTX 4070 | 16GB | SSD 1TB)</b>
              </div>
              <div class="card-footer bg-transparent text-center">
                <button class="btn btn-outline-danger fw-bold text-center rounded-pill w-100">10🔥</button>
              </div>
            </div>
          </router-link>
        </div>
      </div>
    </div>
  </div>

  <!-- SẢN PHẨM MỚI THEO DANH MỤC (Dữ liệu mẫu tĩnh) -->
  <div class="row mt-5">
    <div class="col-lg-12 text-center mb-2">
      <div class="d-inline-block">
        <h2 class="text-dark"><b>SẢN PHẨM MỚI</b></h2>
        <div class="text-center">
          <hr class="bg-dark mb-3" style="width: 100%; height: 4px; border: none; border-radius: 5px" />
        </div>
      </div>
    </div>
  </div>

  <div class="row mt">
    <div class="col-lg-12">
      <div class="card-header">
        <!-- Danh mục mẫu 1: HỌC TẬP - VĂN PHÒNG -->
        <div class="row">
          <div class="col">
            <div class="d-flex align-items-center bg-light">
              <div class="ribbon-blue">HỌC TẬP - VĂN PHÒNG</div>
              <div class="d-flex align-items-center flex-wrap ms-3 price-filter py-2">
                <span class="price-label">Mức giá:</span>
                <a href="#">5 TRIỆU - 10 TRIỆU</a>
                <a href="#">10 TRIỆU - 20 TRIỆU</a>
                <a href="#">20 TRIỆU - 30 TRIỆU</a>
                <a href="#">30 TRIỆU - 40 TRIỆU</a>
                <a href="#" class="text-danger">BỎ LỌC</a>
              </div>
              <div class="ms-auto">
                <router-link to="/khach-hang/san-pham" class="text-primary fw-bold text-decoration-underline">Xem tất cả &raquo;</router-link>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body mt-3" style="height: 380px;">
          <div class="row product-grid">
            <div class="col-lg-3">
              <router-link to="/khach-hang/chi-tiet-san-pham/1">
                <div class="card flex-fill">
                  <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_6__2_87_3.png" class="card-img-top ms-5" style="height: 200px; width: 65%" />
                  <div class="card-body">
                    <h6 class="card-title cursor-pointer" style="height: 80px">Laptop Dell Inspiron 15 3520 (i5 Gen 12 | 8GB | SSD 256GB | Win 11)</h6>
                    <div class="row mt-2">
                      <div class="col-lg-5 mt-1 text-center">
                        <h6 class="text-decoration-line-through text-muted">16.900.000đ</h6>
                      </div>
                      <div class="col-lg-7 text-end">
                        <h5 class="text-danger fw-bold">14.900.000 ₫</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </router-link>
            </div>

            <div class="col-lg-3">
              <router-link to="/khach-hang/chi-tiet-san-pham/2">
                <div class="card flex-fill">
                  <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_13_15.png" class="card-img-top ms-5" style="height: 200px; width: 65%" />
                  <div class="card-body">
                    <h6 class="card-title cursor-pointer" style="height: 80px">Laptop HP Pavilion 14 (i3 Gen 12 | SSD 256GB | RAM 8GB | Win 11)</h6>
                    <div class="row mt-2">
                      <div class="col-lg-5 mt-1 text-center">
                        <h6 class="text-decoration-line-through text-muted">13.900.000đ</h6>
                      </div>
                      <div class="col-lg-7 text-end">
                        <h5 class="text-danger fw-bold">11.900.000 ₫</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </router-link>
            </div>

            <div class="col-lg-3">
              <router-link to="/khach-hang/chi-tiet-san-pham/3">
                <div class="card flex-fill">
                  <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/2/_/2_470_1_1.png" class="card-img-top ms-5" style="height: 200px; width: 65%" />
                  <div class="card-body">
                    <h6 class="card-title cursor-pointer" style="height: 80px">Laptop Acer Swift 3 SF314 (i5 Gen 12 | OLED 2.8K | 16GB | SSD 512GB)</h6>
                    <div class="row mt-2">
                      <div class="col-lg-5 mt-1 text-center">
                        <h6 class="text-decoration-line-through text-muted">20.900.000đ</h6>
                      </div>
                      <div class="col-lg-7 text-end">
                        <h5 class="text-danger fw-bold">18.500.000 ₫</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </router-link>
            </div>

            <div class="col-lg-3">
              <router-link to="/khach-hang/chi-tiet-san-pham/4">
                <div class="card flex-fill">
                  <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_14__1_54.png" class="card-img-top ms-5" style="height: 200px; width: 65%" />
                  <div class="card-body">
                    <h6 class="card-title cursor-pointer" style="height: 80px">Laptop MSI Modern 14 C13M (i7 Gen 13 | RAM 16GB | SSD 512GB)</h6>
                    <div class="row mt-2">
                      <div class="col-lg-5 mt-1 text-center">
                        <h6 class="text-decoration-line-through text-muted">22.500.000đ</h6>
                      </div>
                      <div class="col-lg-7 text-end">
                        <h5 class="text-danger fw-bold">20.500.000 ₫</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </router-link>
            </div>
          </div>
        </div>

        <!-- Danh mục mẫu 2: LAPTOP GAMING -->
        <div class="row mt-4">
          <div class="col">
            <div class="d-flex align-items-center bg-light">
              <div class="ribbon-blue">LAPTOP GAMING</div>
              <div class="d-flex align-items-center flex-wrap ms-3 price-filter py-2">
                <span class="price-label">Mức giá:</span>
                <a href="#">10 TRIỆU - 20 TRIỆU</a>
                <a href="#">20 TRIỆU - 30 TRIỆU</a>
                <a href="#">30 TRIỆU - 40 TRIỆU</a>
                <a href="#">TRÊN 50 TRIỆU</a>
                <a href="#" class="text-danger">BỎ LỌC</a>
              </div>
              <div class="ms-auto">
                <router-link to="/khach-hang/san-pham" class="text-primary fw-bold text-decoration-underline">Xem tất cả &raquo;</router-link>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body mt-3" style="height: 380px;">
          <div class="row product-grid">
            <div class="col-lg-3">
              <router-link to="/khach-hang/chi-tiet-san-pham/1">
                <div class="card flex-fill">
                  <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_6_18.png" class="card-img-top ms-5" style="height: 200px; width: 65%" />
                  <div class="card-body">
                    <h6 class="card-title cursor-pointer" style="height: 80px">Laptop Acer Aspire 7 A715 (Ryzen 5 | GTX 1650 | SSD 512GB)</h6>
                    <div class="row mt-2">
                      <div class="col-lg-5 mt-1 text-center">
                        <h6 class="text-decoration-line-through text-muted">17.500.000đ</h6>
                      </div>
                      <div class="col-lg-7 text-end">
                        <h5 class="text-danger fw-bold">15.900.000 ₫</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </router-link>
            </div>

            <div class="col-lg-3">
              <router-link to="/khach-hang/chi-tiet-san-pham/2">
                <div class="card flex-fill">
                  <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_1__4_42_2.png" class="card-img-top ms-5" style="height: 200px; width: 65%" />
                  <div class="card-body">
                    <h6 class="card-title cursor-pointer" style="height: 80px">Laptop Gigabyte G5 KF (i5 Gen 12 | RTX 4060 | SSD 512GB | 144Hz)</h6>
                    <div class="row mt-2">
                      <div class="col-lg-5 mt-1 text-center">
                        <h6 class="text-decoration-line-through text-muted">27.900.000đ</h6>
                      </div>
                      <div class="col-lg-7 text-end">
                        <h5 class="text-danger fw-bold">25.900.000 ₫</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </router-link>
            </div>

            <div class="col-lg-3">
              <router-link to="/khach-hang/chi-tiet-san-pham/3">
                <div class="card flex-fill">
                  <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_1__5_9.png" class="card-img-top ms-5" style="height: 200px; width: 65%" />
                  <div class="card-body">
                    <h6 class="card-title cursor-pointer" style="height: 80px">Laptop ASUS ROG Strix G16 (i7 Gen 13 | RTX 4070 | 16GB | SSD 1TB)</h6>
                    <div class="row mt-2">
                      <div class="col-lg-5 mt-1 text-center">
                        <h6 class="text-decoration-line-through text-muted">42.900.000đ</h6>
                      </div>
                      <div class="col-lg-7 text-end">
                        <h5 class="text-danger fw-bold">39.900.000 ₫</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </router-link>
            </div>

            <div class="col-lg-3">
              <router-link to="/khach-hang/chi-tiet-san-pham/4">
                <div class="card flex-fill">
                  <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_38__2_16.png" class="card-img-top ms-5" style="height: 200px; width: 65%" />
                  <div class="card-body">
                    <h6 class="card-title cursor-pointer" style="height: 80px">Laptop LG Gram 16 (i7 Gen 13 | 16GB | SSD 1TB | Siêu mỏng nhẹ)</h6>
                    <div class="row mt-2">
                      <div class="col-lg-5 mt-1 text-center">
                        <h6 class="text-decoration-line-through text-muted">41.900.000đ</h6>
                      </div>
                      <div class="col-lg-7 text-end">
                        <h5 class="text-danger fw-bold">39.900.000 ₫</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </router-link>
            </div>
          </div>
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
.countdown-box {
  background-color: #000;
  color: #fff;
  padding: 8px 16px;
  font-weight: bold;
  font-size: 18px;
  border-radius: 6px;
  margin: 0 5px;
}
.sale-badge {
  position: absolute;
  top: 10px;
  right: 10px;
  background-color: red;
  color: white;
  padding: 4px 8px;
  font-weight: bold;
  border-radius: 50%;
}
.card-img-top {
  object-fit: contain;
  height: 200px;
}
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
