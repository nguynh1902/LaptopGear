<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DanhGiaController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ThanhToanController;
use App\Http\Controllers\ThongKeController;
use Illuminate\Support\Facades\Route;


// =========================================================================================================
// ===========================================    ADMIN   ==================================================
// =========================================================================================================

//==== Token ======
Route::get('/admin/check-token', [NhanVienController::class, 'checkToken']);
Route::get('/admin/dang-xuat', [NhanVienController::class, 'DangXuat']);

//==== Đăng Nhập & Profile Admin ======
Route::post('/admin/dang-nhap', [NhanVienController::class, 'dangNhap']);
Route::post('/admin/profile/update', [NhanVienController::class, 'updateAdmin']);
Route::post('/admin/doi-mat-khau', [NhanVienController::class, 'doiMatKhau']);

//==== Danh mục ======
Route::get('/admin/danh-muc/get-data', [DanhMucController::class, 'getData']);
Route::post('/admin/danh-muc/add-data', [DanhMucController::class, 'addData']);
Route::post('/admin/danh-muc/update', [DanhMucController::class, 'update']);
Route::post('/admin/danh-muc/delete', [DanhMucController::class, 'destroy']);
Route::post('/admin/danh-muc/change-status', [DanhMucController::class, 'changeStatus']);

//==== Sản Phẩm ======
Route::get('/admin/san-pham/get-data', [SanPhamController::class, 'getData']);
Route::post('/admin/san-pham/add-data', [SanPhamController::class, 'addData']);
Route::post('/admin/san-pham/update', [SanPhamController::class, 'update']);
Route::post('/admin/san-pham/delete', [SanPhamController::class, 'destroy']);
Route::post('/admin/san-pham/change-status', [SanPhamController::class, 'changeStatus']);

//==== Đơn Hàng ======
Route::get('/admin/don-hang/get-data', [HoaDonController::class, 'getData']);
Route::post('/admin/don-hang/delete', [HoaDonController::class, 'destroy']);
Route::post('/admin/don-hang/change-status', [HoaDonController::class, 'changeStatus']);
Route::post('/admin/don-hang/thong-ke', [HoaDonController::class, 'thongKeHoaDon']);
Route::post('/admin/don-hang/loc-chi-tiet', [HoaDonController::class, 'locHoaDonChiTiet']);
Route::post('/admin/don-hang/loc-chua-duyet', [HoaDonController::class, 'locChuaDuyet']);
Route::post('/admin/don-hang/loc-da-duyet', [HoaDonController::class, 'locDaDuyet']);

//==== Nhân Viên ======
Route::get('/admin/nhan-vien/get-data', [NhanVienController::class, 'getData']);
Route::post('/admin/nhan-vien/add-data', [NhanVienController::class, 'addData']);
Route::post('/admin/nhan-vien/update', [NhanVienController::class, 'update']);
Route::post('/admin/nhan-vien/delete', [NhanVienController::class, 'destroy']);
Route::post('/admin/nhan-vien/change-status', [NhanVienController::class, 'changeStatus']);

//==== Khách Hàng (Quản lý phía Admin) ======
Route::get('/admin/khach-hang/get-data', [KhachHangController::class, 'getData']);
Route::post('/admin/khach-hang/update', [KhachHangController::class, 'update']);
Route::post('/admin/khach-hang/delete', [KhachHangController::class, 'destroy']);

//==== Đánh Giá ======
Route::get('/admin/danh-gia/get-data', [DanhGiaController::class, 'getData']);
Route::post('/admin/danh-gia/delete', [DanhGiaController::class, 'destroy']);
Route::post('/admin/danh-gia/change-status', [DanhGiaController::class, 'changeStatus']);

//==== Thống Kê ======
Route::post('/admin/thong-ke/duyet-khach-hang', [ThongKeController::class, 'duyetKhachHang']);
Route::post('/admin/thong-ke/duyet-hoa-don', [ThongKeController::class, 'duyetHoaDon']);


// =========================================================================================================
// =======================================    KHÁCH HÀNG (CLIENT)    =======================================
// =========================================================================================================
// Học viên thực hành viết các route API cho phía Client tại đây
