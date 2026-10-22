<template>
  <div class="nav-container primary-menu">
    <div class="mobile-topbar-header">
      <div>
        <img
          src="https://i.pinimg.com/736x/78/4d/19/784d19602be7f1d070b6a13001b7fc5c.jpg"
          class="logo-icon"
          alt="logo icon"
        />
      </div>
      <div></div>
      <div class="toggle-icon ms-auto"><i class="bx bx-arrow-to-left"></i></div>
    </div>
    <nav class="navbar navbar-expand-xl w-100">
      <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
        <li class="nav-item">
          <router-link to="/admin/thong-ke">
            <a href="/admin/thong-ke" class="nav-link">
              <div class="parent-icon"><i class="fa-solid fa-chart-simple"></i></div>
              <div class="menu-title">Dashboad</div>
            </a>
          </router-link>

          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="index.html"
                ><i class="bx bx-right-arrow-alt"></i>Thống Kê Khách Hàng Đăng Ký</a
              >
            </li>
			            <li>
              <a class="dropdown-item" href="index.html"><i class="bx bx-right-arrow-alt"></i>Thống Kê Hóa Đơn</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <router-link to="/admin/danh-muc">
            <a class="nav-link" href="/admin/danh-muc">
              <div class="parent-icon"><i class="fa-solid fa-bars"></i></div>
              <div class="menu-title">Danh Mục</div>
            </a>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/admin/san-pham">
            <a class="nav-link" href="/admin/san-pham">
              <div class="parent-icon"><i class="fa-solid fa-laptop"></i></div>
              <div class="menu-title">Sản Phẩm</div>
            </a>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/admin/nhan-vien">
            <a class="nav-link" href="/admin/nhan-vien">
              <div class="parent-icon"><i class="fa-solid fa-user-lock"></i></div>
              <div class="menu-title">Nhân Viên</div>
            </a>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/admin/khach-hang">
            <a class="nav-link" href="/admin/khach-hang">
              <div class="parent-icon"><i class="fa-solid fa-users"></i></div>
              <div class="menu-title">Khách Hàng</div>
            </a>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/admin/don-hang">
            <a class="nav-link" href="/admin/don-hang">
              <div class="parent-icon"><i class="fa-solid fa-file-invoice"></i></div>
              <div class="menu-title">Đơn Hàng</div>
            </a>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/admin/danh-gia">
            <a class="nav-link" href="/admin/danh-gia">
              <div class="parent-icon"><i class="fa-solid fa-comment"></i></div>
              <div class="menu-title">Đánh Giá</div>
            </a>
          </router-link>
        </li>
      </ul>
    </nav>
  </div>
</template>
<script>
export default {};
</script>
<style></style>
