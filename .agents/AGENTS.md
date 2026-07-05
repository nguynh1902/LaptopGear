# AGENT RULES CHO DỰ ÁN NÀY

Bất cứ khi nào bạn (hoặc subagent) tạo file mới, viết mã mới, hoặc sửa đổi mã trong dự án này, bạn PHẢI tuân thủ các quy tắc trong tài liệu tiêu chuẩn sau đây:

## JPM DEVELOPMENT STANDARD

### 1. BACKEND CONVENTION (Laravel)
- **Migration:** Tên bảng `snake_case` số nhiều. Cột `tinh_trang` là `integer` default 1. Đa số nullable trừ primary key/bắt buộc. Có `timestamps()`.
- **Model:** Có khai báo `$table` và `$fillable`. Các hằng số trạng thái định nghĩa bằng `const UPPER_SNAKE_CASE`.
- **Controller:** Tên hàm: `getData`, `addData`, `update`, `destroy`, `changeStatus`, `search`. 
  - KHÔNG dùng `$request->validate()` hay FormRequest. Lấy trực tiếp từ Request.
  - Phân quyền trực tiếp ở đầu action bằng query bảng `PhanQuyen` và `Auth::guard('sanctum')`.
  - Lấy list: `return response()->json(['data' => $data]);`. Hành động: `return response()->json(['status' => true/0, 'message' => '...']);`. Dùng query builder trực tiếp (`Model::get()`, `Model::create()`).

### 2. FRONTEND CONVENTION (Vue)
- **State Data:** Khai báo kiểu `snake_case`. Các cụm riêng biệt: `list_x: []`, `create_x: {}`, `edit_x: {}`, `del_x: {}`, `tim_kiem: {noi_dung: ''}`.
- **Methods:** Đặt tên hàm `camelCase` (vd: `getPhuTung`). Gọi axios trực tiếp, URL hardcode đủ domain (vd `http://127.0.0.1:8000/api/...`).
- Bắt buộc gắn token `Authorization: 'Bearer ' + localStorage.getItem("key_admin")`.
- Sau khi request `axios` thành công (check `status`), gọi `$toast.success()`, reset form (`this.create_x = {}`), và load lại list (`this.getX()`).
