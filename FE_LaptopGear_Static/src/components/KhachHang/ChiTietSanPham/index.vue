<template>
  <div class="row">
    <div class="col-lg-5 mt-4">
      <div class="">
        <div style="height: 100%S">
          <div class="card">
            <img
              src="https://cdn.tgdd.vn/Products/Images/44/282827/asus-tuf-gaming-f15-fx506hc-i5-hn144w-1.jpg"
              style="width: 80%; height: 100%"
              alt=""
              class="ms-5"
            />
          </div>
        </div>
      </div>
      <hr />
      <div class="pb-4 mb-4 border-bottom mt-3">
        <div class="">
          <span class="badge bg-primary p-2 me-2 mb-1">Văn phòng</span>
          <span class="badge bg-primary p-2 me-2 mb-1">Gaming</span>
          <span class="badge bg-primary p-2 me-2 mb-1">Đồ họa</span>
          <span class="badge bg-primary p-2 me-2 mb-1">Editer</span>
        </div>
      </div>
    </div>
    <div class="col-lg-7">
      <div class="container py-4">
        <div class="row g-4">
          <!-- Phần thông tin chi tiết phim -->
          <div class="col-col-md-8">
            <div class="row mt-2">
              <div class="col-lg-12">
                <h2
                  class="fw-bold mb-3 text-primary position-relative border-bottom pb-2"
                >
                  <span>Thông tin chi tiết</span>
                  <div
                    class="bg-danger"
                    style="
                      width: 60px;
                      height: 4px;
                      position: absolute;
                      bottom: -2px;
                      left: 0;
                    "
                  ></div>
                </h2>
                <div class="card shadow-sm">
                  <div class="card-body bg-light">
                    <div class="mb-3 pb-3 border-bottom">
                      <span class="fw-bold text-dark pe-2">Tên sản phẩm: </span>
                      <b>Laptop Asus TUF Gaming F15</b>
                    </div>
                    <div class="mb-3 pb-3 border-bottom">
                      <span class="fw-bold text-dark pe-2">Giá máy:</span>
                      <b class="text-danger"
                        >18.500.000 ₫
                      </b>
                    </div>
                    <div>
                      <span class="fw-bold text-dark pe-2">Mô tả:</span>
                      <div>
                        <div class="mt-1 mota">Laptop gaming hiệu năng cao với chip Intel Core i5 thế hệ 11.<br>Card đồ họa NVIDIA GeForce RTX 3050 mạnh mẽ.<br>Màn hình 144Hz mượt mà cho trải nghiệm game tuyệt vời.</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="d-grid gap-3 mb-4">
                      <button
                        class="btn btn-outline-primary py-3 fw-bold"
                        style="width: 100%"
                      >
                        <i class="fa-solid fa-cart-plus"></i> Thêm vào giỏ hàng
                      </button>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-grid gap-3 mb-4">
                      <button
                        class="btn btn-primary py-3 fw-bold"
                        style="width: 100%"
                        data-bs-toggle="modal"
                        data-bs-target="#DatHang"
                      >
                        <i class="fa-solid fa-cart-shopping"></i> Đặt hàng ngay
                      </button>
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
                  style="
                    width: 60px;
                    height: 4px;
                    position: absolute;
                    bottom: -2px;
                    left: 0;
                  "
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
              <div class="card">
                <div class="card-body">
                  <p class="fs-6 lh-base text-dark text-justify"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <!-- Comment Section -->
        <div class="bg-white rounded shadow-sm p-3 p-md-4">
          <h2
            class="fs-3 fw-bold text-danger pb-2 mb-3 border-bottom position-relative"
          >
            BÌNH LUẬN
          </h2>
          <div class="mb-4">
            <div class="mb-3">
              <textarea
                class="form-control"
                rows="4"
                placeholder="Ý kiến của bạn về ưu đãi này..."
              ></textarea>
            </div>
            <div class="text-end">
              <button class="btn btn-danger px-3 py-2 fw-semibold">
                GỬI BÌNH LUẬN
              </button>
            </div>
          </div>
          <div>
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
                    <span class="fw-semibold me-2">Nguyễn Văn A</span>
                    <span class="small text-secondary">2026-07-05</span>
                  </div>
                  <div class="text-secondary">
                    Máy dùng rất sướng, chạy mượt, chơi game không bị nóng!
                  </div>
                </div>
              </div>
              <div class="d-flex mb-4 pb-4 border-bottom">
                <div class="me-3">
                  <img
                    src="https://i.pravatar.cc/48?img=13"
                    alt="User Avatar"
                    class="rounded-circle"
                    width="48"
                    height="48"
                  />
                </div>
                <div>
                  <div class="mb-2">
                    <span class="fw-semibold me-2">Trần B</span>
                    <span class="small text-secondary">2026-07-04</span>
                  </div>
                  <div class="text-secondary">
                    Giao hàng nhanh, nhân viên tư vấn nhiệt tình. Cấu hình đúng như mô tả.
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="bg-white rounded shadow-sm p-3 p-md-4 mt-3">
          <h4>Các dòng máy đang bán chạy khác</h4>
          <div class="row">
              <div class="col-lg-3">
                <router-link to="/khach-hang/chi-tiet-san-pham/5">
                  <div class="card text-center">
      
                      <div class="card-img-top">
                        <img
                          src="https://cdn.tgdd.vn/Products/Images/44/282827/asus-tuf-gaming-f15-fx506hc-i5-hn144w-1.jpg"
                          class="img-fluid"
                          style="width: 100%; height: 100%"
                          alt=""
                        />
                      </div>
                      <div
                        class="card-img-overlay text-center"
                        style="margin-top: 200px"
                      >
                        <div class="col mt-4">
                          <br />
                          <button
                            class="btn btn-info p-2 mt-3"
                            style="width: 170px"
                          >
                            <i class="fa-solid fa-cart-shopping"></i> Xem máy
                          </button>
                        </div>
                      </div>
              
                  </div>
                </router-link>
              </div>
              <div class="col-lg-3">
                <router-link to="/khach-hang/chi-tiet-san-pham/6">
                  <div class="card text-center">
      
                      <div class="card-img-top">
                        <img
                          src="https://cdn.tgdd.vn/Products/Images/44/282827/asus-tuf-gaming-f15-fx506hc-i5-hn144w-1.jpg"
                          class="img-fluid"
                          style="width: 100%; height: 100%"
                          alt=""
                        />
                      </div>
                      <div
                        class="card-img-overlay text-center"
                        style="margin-top: 200px"
                      >
                        <div class="col mt-4">
                          <br />
                          <button
                            class="btn btn-info p-2 mt-3"
                            style="width: 170px"
                          >
                            <i class="fa-solid fa-cart-shopping"></i> Xem máy
                          </button>
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

  <!-- Modal Ticket-->
  <div
    class="modal fade"
    id="DatHang"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title fs-3" id="exampleModalLabel">
            Thông tin giao hàng
          </h4>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <label for="">Tên người nhận (*)</label>
              <input type="text" class="form-control mt-2" placeholder="Nhập tên người nhận" />
              
              <label class="mt-3" for="">Email</label>
              <input type="email" class="form-control mt-2" placeholder="Nhập email" />
              
              <label class="mt-3" for="">Số điện thoại (*)</label>
              <input type="text" class="form-control mt-2" placeholder="Nhập số điện thoại" />
              
              <label class="mt-3" for="">Địa chỉ (*)</label>
              <input type="text" class="form-control mt-2" placeholder="Nhập địa chỉ" />
              
              <label class="mt-3" for="">Số lượng</label>
              <input type="number" min="1" class="form-control mt-2" placeholder="Nhập số lượng" value="1" />
              
              <label class="mt-3" for="">Ghi chú</label>
              <input type="text" class="form-control mt-2" placeholder="Ghi chú thêm" />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Xác nhận đặt hàng</button>
        </div>
      </div>
    </div>
  </div>
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
          <h4 class="modal-title fs-3" id="exampleModalLabel">
            Review sản phẩm
          </h4>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-3">
              <VDatePicker v-model="selectedDate" />
            </div>
            <div class="col-lg-12">
              <div class="ratio ratio-16x9">
                <iframe
                  id="youtubeVideo"
                  src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                  title="YouTube video"
                  allowfullscreen
                ></iframe>
              </div>
              <!-- <div class="">
        <div class="ratio ratio-16x9 shadow-lg overflow-hidden" style="height: 450px; object-fit: cover; ">
            <iframe :src="chi_tiet_phim.trailer" title="YouTube video player" allowfullscreen></iframe>
        </div>
    </div> -->
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Đóng
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ChiTietSanPhamClient"
};
</script>
<style>
.mota {
  white-space: pre-line;
}
</style>
