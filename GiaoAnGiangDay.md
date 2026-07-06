# 📚 GIÁO ÁN CHI TIẾT: LẬP TRÌNH WEBSITE BÁN LAPTOP (LAPTOP GEAR)

Bản giáo án này chia nhỏ quá trình giảng dạy thành từng **Buổi học (Session)**. Mỗi buổi sẽ chỉ rõ học viên cần làm gì ở Backend (API) và ghép nối thế nào ở Frontend (VueJS - Giao diện tĩnh đã chuẩn bị sẵn).

---

## PHẦN 1: WARM UP & HỆ THỐNG QUẢN TRỊ (ADMIN PANEL)
*Phần này dạy học viên cách làm Backend cơ bản (CRUD) và ghép nối vào Admin Panel để quản trị dữ liệu gốc.*

### Buổi 1: Khởi tạo Database & Đăng Nhập Admin
* **Mục tiêu:** Hiểu luồng kết nối FE - BE, cơ chế bảo mật cơ bản.
* **Backend (API) cần viết:**
  * Tạo Database và cấu hình kết nối.
  * API `POST /api/admin/login`: Nhận email, password -> Check DB -> Trả về JSON Web Token (JWT) hoặc Session.
* **Frontend (`Admin/DangNhap`) cần ghép:**
  * Dạy sử dụng `v-model` để lấy dữ liệu từ form (Email, Password).
  * Dạy dùng `axios.post` gọi API đăng nhập.
  * Dạy cách lưu `Token` và thông tin user vào `localStorage`. Điều hướng (`$router.push`) vào trang chủ Admin.

### Buổi 2: Quản lý Danh Mục (Nền tảng CRUD)
* **Mục tiêu:** Dạy các thao tác Create, Read, Update, Delete kinh điển nhất.
* **Backend (API) cần viết:**
  * Các API cho bảng `danh_muc`: `GET` (List), `POST` (Tạo mới), `PUT` (Cập nhật), `DELETE` (Xóa).
* **Frontend (`Admin/DanhMuc`) cần ghép:**
  * Gọi API `GET` lúc `mounted()`, dùng vòng lặp `v-for` đổ dữ liệu ra bảng (`table`).
  * Gắn form Thêm/Sửa (Modal), dùng `v-model` lấy dữ liệu, gọi API `POST/PUT`.
  * Xử lý thông báo (Toast/Alert) khi thành công hoặc thất bại.

### Buổi 3: Quản lý Sản Phẩm (Upload File & Relationship)
* **Mục tiêu:** Xử lý nghiệp vụ phức tạp hơn: upload hình ảnh và liên kết khóa ngoại.
* **Backend (API) cần viết:**
  * API CRUD bảng `san_pham`. Viết logic lưu file ảnh vào server/cloud và lưu đường dẫn ảnh vào DB.
* **Frontend (`Admin/SanPham`) cần ghép:**
  * Dạy cách gọi API danh mục để đổ vào thẻ `<select>` (chọn danh mục cho laptop).
  * Dạy cách bắt sự kiện `@change` ở thẻ `<input type="file">` để lấy File Object, dùng `FormData` để gửi ảnh qua API.
  * Hiển thị danh sách sản phẩm bằng `v-for`, bind ảnh bằng `:src`.

### Buổi 4: Quản trị Nhân Viên & Khách Hàng (Quản lý User)
* **Mục tiêu:** Quản lý con người và phân quyền.
* **Backend (API) cần viết:**
  * API CRUD bảng `nhan_vien` (Mã hóa mật khẩu khi tạo mới).
  * API Read, Delete, Khóa/Mở Khóa bảng `khach_hang`.
* **Frontend (`Admin/NhanVien`, `Admin/KhachHang`) cần ghép:**
  * Hiển thị danh sách người dùng.
  * Dạy cách truyền dữ liệu lên form Cập Nhật. Dạy cách gọi API thay đổi trạng thái hoạt động (Active/Inactive) của tài khoản.

---

## PHẦN 2: GIAO DIỆN KHÁCH HÀNG (CLIENT SHOPPING)
*Phần này chuyển sang giao diện Khách hàng, dạy cách fetch dữ liệu hiển thị (Public API).*

### Buổi 5: Hiển thị Trang Chủ & Routing Động
* **Mục tiêu:** Xây dựng mặt tiền của Shop.
* **Backend (API) cần viết:**
  * API `GET /api/client/home`: Lấy danh sách danh mục và Top sản phẩm nổi bật/mới nhất (Không yêu cầu Token).
* **Frontend (`KhachHang/TrangChu`) cần ghép:**
  * Dùng `v-for` render danh sách danh mục lên thanh Menu.
  * Dùng `v-for` render các "Card" Laptop. Dạy cách format tiền tệ (VND).

### Buổi 6: Chi Tiết Sản Phẩm & Lọc Theo Danh Mục
* **Mục tiêu:** Giao tiếp giữa các trang thông qua URL.
* **Backend (API) cần viết:**
  * API `GET /api/client/products/{id}`: Lấy chi tiết 1 sản phẩm.
  * API `GET /api/client/category/{id}/products`: Lấy toàn bộ laptop của 1 hãng.
* **Frontend (`KhachHang/ChiTietSanPham`, `KhachHang/SanPhamTheoDanhMuc`) cần ghép:**
  * Dạy học viên cách lấy tham số động trên URL (`this.$route.params.id`).
  * Gọi API chi tiết và bind dữ liệu (Tên, Giá, Cấu hình, Hình ảnh) lên màn hình chi tiết. 

### Buổi 7: Tài Khoản Khách Hàng (Auth Client)
* **Mục tiêu:** Hệ thống đăng ký, đăng nhập dành riêng cho khách.
* **Backend (API) cần viết:**
  * API Đăng ký khách hàng (Băm mật khẩu).
  * API Đăng nhập khách hàng (Trả Token riêng, khác với Token của Admin).
* **Frontend (`KhachHang/DangKy`, `KhachHang/DangNhap`, `KhachHang/Profile`) cần ghép:**
  * Xử lý Validation Form (Mật khẩu nhập lại phải khớp).
  * Gọi API Đăng nhập, lưu LocalStorage. Đổi giao diện Header (ẩn nút Đăng Nhập, hiện Avatar người dùng).

---

## PHẦN 3: LOGIC LÕI THƯƠNG MẠI ĐIỆN TỬ (CORE E-COMMERCE)
*Phần quan trọng và khó nhất: Xử lý giỏ hàng, đặt hàng, quản lý đơn.*

### Buổi 8: Logic Giỏ Hàng (Shopping Cart)
* **Mục tiêu:** Khách bấm "Thêm vào giỏ" -> Lưu giữ trạng thái giỏ hàng.
* **Backend (Tùy chọn) / Frontend (`KhachHang/GioHang`):**
  * *Cách 1 (Dễ dạy):* Không dùng BE. Lưu giỏ hàng hoàn toàn dưới mảng (Array) trong LocalStorage của trình duyệt. 
  * *Cách 2 (Khó hơn):* API lưu giỏ hàng vào Database.
  * **Frontend:** Dạy cách tính Tổng tiền giỏ hàng (`computed` property), tăng giảm số lượng, xóa khỏi giỏ.

### Buổi 9: Thanh Toán & Đặt Đơn Hàng (Checkout)
* **Mục tiêu:** Biến giỏ hàng thành Đơn đặt hàng chính thức.
* **Backend (API) cần viết:**
  * API `POST /api/client/checkout`: Nhận thông tin người nhận + mảng Giỏ hàng. 
  * Dạy khái niệm **Database Transaction** (Rất quan trọng): 
    1. Tạo 1 Record `don_hang` -> Lấy ID.
    2. Vòng lặp tạo nhiều Record `chi_tiet_don_hang` dựa vào ID trên.
    3. Trừ số lượng tồn kho trong bảng `san_pham`.
* **Frontend (`KhachHang/ThanhToan`) cần ghép:**
  * Gửi cục Data (Địa chỉ + Giỏ hàng) lên API. Thành công thì xóa trắng Giỏ hàng ở FE.

### Buổi 10: Lịch Sử Đơn Hàng & Đánh Giá
* **Mục tiêu:** Cho khách xem lại lịch sử chi tiêu.
* **Backend (API) cần viết:**
  * API `GET /api/client/orders`: Lấy danh sách đơn của User hiện tại (Lấy ID User từ Token gửi lên).
  * API `POST /api/client/reviews`: Viết đánh giá sản phẩm.
* **Frontend (`KhachHang/HoaDon`) cần ghép:**
  * Đổ danh sách đơn hàng đã mua ra bảng. Hiển thị Trạng Thái (Đang chờ, Đã duyệt, Hủy).

---

## PHẦN 4: VÒNG LẶP ĐÓNG & THỐNG KÊ (ADMIN FINISHING)
*Quay lại Admin để duyệt đơn và kết thúc khóa học.*

### Buổi 11: Admin Duyệt Đơn & Kiểm duyệt Đánh Giá
* **Mục tiêu:** Hoàn thiện luồng mua bán.
* **Backend (API) cần viết:**
  * API `GET` danh sách Đơn hàng toàn hệ thống.
  * API `PUT` đổi trạng thái Đơn hàng (Duyệt đơn).
* **Frontend (`Admin/DonHang`, `Admin/DanhGia`) cần ghép:**
  * Hiển thị bảng toàn bộ đơn hàng.
  * Bấm nút "Duyệt đơn" -> Gọi API -> Cập nhật UI. 

### Buổi 12: Báo Cáo Thống Kê (Dashboard)
* **Mục tiêu:** Tổng hợp dữ liệu hiển thị biểu đồ trực quan.
* **Backend (API) cần viết:**
  * Dạy SQL nâng cao: `GROUP BY` theo ngày/tháng, `SUM(thanh_tien)`. Trả về Array Data (Labels & Values).
* **Frontend (`Admin/ThongKe`) cần ghép:**
  * Tích hợp thư viện `Chart.js` hoặc `ApexCharts`. Truyền Data từ API vào Chart để vẽ biểu đồ doanh thu và cơ cấu sản phẩm bán chạy.

### Buổi 13: Middleware, Bảo Mật & Tổng Kết Khóa Học
* **Mục tiêu:** Clean source code và triển khai (Deploy).
* **Backend:** Viết Middleware bảo vệ API (Chặn khách thường truy cập API của Admin).
* **Frontend:** Dạy Vue Router Navigation Guards (Nếu chưa login thì không cho vào `/admin/...`, tự động đẩy ra trang `/dang-nhap`).
* **Deploy:** Triển khai Backend và Database lên Cloud, Frontend lên Vercel/Netlify. Dọn dẹp đồ án tốt nghiệp!
