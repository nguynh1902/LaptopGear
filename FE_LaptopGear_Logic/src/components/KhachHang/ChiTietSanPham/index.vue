<template>
  <div class="row">
    <div class="col-lg-5 mt-4">
      <div class="card">
        <img
          src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_1__5_9.png"
          style="width: 80%; height: 100%"
          alt="Laptop mẫu"
          class="ms-5"
        />
      </div>
      <hr />
      <div class="pb-4 mb-4 border-bottom mt-3">
        <div>
          <span class="badge bg-primary p-2 me-2 mb-1">Văn phòng</span>
          <span class="badge bg-primary p-2 me-2 mb-1">Gaming</span>
          <span class="badge bg-primary p-2 me-2 mb-1">Đồ họa</span>
          <span class="badge bg-primary p-2 me-2 mb-1">Editor</span>
        </div>
      </div>
    </div>

    <div class="col-lg-7">
      <div class="container py-4">
        <div class="row g-4">
          <div class="col-md-12">
            <div class="row mt-2">
              <div class="col-lg-12">
                <h2 class="fw-bold mb-3 text-primary position-relative border-bottom pb-2">
                  <span>Thông tin chi tiết</span>
                  <div
                    class="bg-danger"
                    style="width: 60px; height: 4px; position: absolute; bottom: -2px; left: 0"
                  ></div>
                </h2>
                <div class="card shadow-sm">
                  <div class="card-body bg-light">
                    <div class="mb-3 pb-3 border-bottom">
                      <span class="fw-bold text-dark pe-2">Tên sản phẩm: </span>
                      <b>Laptop ASUS ROG Strix G16 (i7 Gen 13 | RTX 4070 | 16GB | SSD 1TB | 165Hz)</b>
                    </div>
                    <div class="mb-3 pb-3 border-bottom">
                      <span class="fw-bold text-dark pe-2">Giá máy:</span>
                      <b class="text-danger">39.900.000 ₫</b>
                    </div>
                    <div>
                      <span class="fw-bold text-dark pe-2">Mô tả:</span>
                      <div class="mt-1 mota">
                        Màn hình: 16 inch FHD+ 165Hz IPS.<br />
                        CPU: Intel Core i7-13650HX (14 nhân, 20 luồng).<br />
                        GPU: NVIDIA GeForce RTX 4070 8GB GDDR6.<br />
                        RAM: 16GB DDR5 4800MHz.<br />
                        Ổ cứng: 1TB PCIe 4.0 NVMe M.2 SSD.<br />
                        Hệ điều hành: Windows 11 Home bản quyền.<br />
                        Bảo hành: 24 tháng chính hãng ASUS Việt Nam.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-lg-6">
                    <div class="d-grid gap-3 mb-4">
                      <button class="btn btn-outline-danger py-3 fw-bold">
                        <i class="fa-solid fa-cart-plus"></i> Thêm vào giỏ hàng
                      </button>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-grid gap-3 mb-4">
                      <router-link to="/khach-hang/gio-hang">
                        <button class="btn btn-primary py-3 fw-bold w-100">
                          <i class="fa-solid fa-cart-shopping"></i> Đặt hàng
                        </button>
                      </router-link>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-4">
              <h4 class="fw-bold mb-3 position-relative border-bottom pb-2">
                <span>Review máy</span>
                <div
                  class="bg-danger"
                  style="width: 60px; height: 4px; position: absolute; bottom: -2px; left: 0"
                ></div>
              </h4>
              <div class="d-grid gap-3 mb-4">
                <button
                  class="btn btn-outline-danger py-3 fw-bold"
                  data-bs-toggle="modal"
                  data-bs-target="#Trailer"
                >
                  <i class="fa-brands fa-youtube"></i> Xem ngay
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12">
        <!-- Phần Bình Luận (Tĩnh) -->
        <div class="bg-white rounded shadow-sm p-3 p-md-4">
          <h2 class="fs-3 fw-bold text-danger pb-2 mb-3 border-bottom position-relative">
            BÌNH LUẬN
          </h2>
          <div class="mb-4">
            <div class="mb-3">
              <textarea
                class="form-control"
                rows="4"
                placeholder="Ý kiến của bạn về sản phẩm này..."
              ></textarea>
            </div>
            <div class="text-end">
              <button class="btn btn-danger px-3 py-2 fw-semibold">
                GỬI BÌNH LUẬN
              </button>
            </div>
          </div>
          <div>
            <!-- Bình luận mẫu 1 -->
            <div class="d-flex mb-4 pb-4 border-bottom">
              <div class="me-3">
                <img
                  src="https://i.pravatar.cc/48?img=12"
                  alt="User Avatar"
                  class="rounded-circle"
                  width="48"
                  height="48"
                />
              </div>
              <div>
                <div class="mb-2">
                  <span class="fw-semibold me-2">Nguyễn Văn Minh</span>
                  <span class="small text-secondary">20/10/2025</span>
                </div>
                <div class="text-secondary">
                  Máy chạy rất mượt, tản nhiệt mát, màn hình 165Hz chơi game cực kỳ đã!
                </div>
              </div>
            </div>

            <!-- Bình luận mẫu 2 -->
            <div class="d-flex mb-4 pb-4 border-bottom">
              <div class="me-3">
                <img
                  src="https://i.pravatar.cc/48?img=32"
                  alt="User Avatar"
                  class="rounded-circle"
                  width="48"
                  height="48"
                />
              </div>
              <div>
                <div class="mb-2">
                  <span class="fw-semibold me-2">Trần Thị Hương</span>
                  <span class="small text-secondary">18/10/2025</span>
                </div>
                <div class="text-secondary">
                  Shop giao hàng nhanh, đóng gói cẩn thận, nhân viên tư vấn nhiệt tình.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Sản phẩm liên quan (Tĩnh) -->
        <div class="bg-white rounded shadow-sm p-3 p-md-4 mt-3">
          <h4>Các dòng máy đang bán chạy khác</h4>
          <div class="row mt-3">
            <div class="col-lg-3">
              <router-link to="/khach-hang/chi-tiet-san-pham/1">
                <div class="card text-center">
                  <div class="card-img-top">
                    <img
                      src="https://cdn2.cellphones.com.vn/x/media/catalog/product/l/a/laptop-asus-vivobook-15-oled-a1505va-ma468w_1_.png"
                      class="img-fluid"
                      style="width: 100%; height: 220px; object-fit: contain"
                      alt=""
                    />
                  </div>
                  <div class="card-body">
                    <h6>Laptop ASUS Vivobook 15 OLED</h6>
                    <button class="btn btn-info p-2 mt-2" style="width: 170px">
                      <i class="fa-solid fa-cart-shopping"></i> Xem máy
                    </button>
                  </div>
                </div>
              </router-link>
            </div>

            <div class="col-lg-3">
              <router-link to="/khach-hang/chi-tiet-san-pham/2">
                <div class="card text-center">
                  <div class="card-img-top">
                    <img
                      src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_59__1_14.png"
                      class="img-fluid"
                      style="width: 100%; height: 220px; object-fit: contain"
                      alt=""
                    />
                  </div>
                  <div class="card-body">
                    <h6>Laptop Lenovo IdeaPad Slim 5</h6>
                    <button class="btn btn-info p-2 mt-2" style="width: 170px">
                      <i class="fa-solid fa-cart-shopping"></i> Xem máy
                    </button>
                  </div>
                </div>
              </router-link>
            </div>

            <div class="col-lg-3">
              <router-link to="/khach-hang/chi-tiet-san-pham/3">
                <div class="card text-center">
                  <div class="card-img-top">
                    <img
                      src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_1__4_42_2.png"
                      class="img-fluid"
                      style="width: 100%; height: 220px; object-fit: contain"
                      alt=""
                    />
                  </div>
                  <div class="card-body">
                    <h6>Laptop Gigabyte G5 KF</h6>
                    <button class="btn btn-info p-2 mt-2" style="width: 170px">
                      <i class="fa-solid fa-cart-shopping"></i> Xem máy
                    </button>
                  </div>
                </div>
              </router-link>
            </div>

            <div class="col-lg-3">
              <router-link to="/khach-hang/chi-tiet-san-pham/4">
                <div class="card text-center">
                  <div class="card-img-top">
                    <img
                      src="https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_38__2_16.png"
                      class="img-fluid"
                      style="width: 100%; height: 220px; object-fit: contain"
                      alt=""
                    />
                  </div>
                  <div class="card-body">
                    <h6>Laptop LG Gram 16</h6>
                    <button class="btn btn-info p-2 mt-2" style="width: 170px">
                      <i class="fa-solid fa-cart-shopping"></i> Xem máy
                    </button>
                  </div>
                </div>
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Trailer -->
  <div
    class="modal fade"
    id="Trailer"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title fs-3" id="exampleModalLabel">Review sản phẩm</h4>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="ratio ratio-16x9">
            <iframe
              id="youtubeVideo"
              src="https://www.youtube.com/embed/MpAiuQyd6Z8"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Đóng
          </button>
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
.mota {
  white-space: pre-line;
}
</style>
