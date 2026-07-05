<?php

use App\Http\Controllers\DanhGiaController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ThongKeController;
use Illuminate\Support\Facades\Route;

// ===========================================
// ADMIN ROUTES
// ===========================================

Route::post('/admin/dang-nhap', [NhanVienController::class, 'dangNhap']);
Route::get('/admin/check-token', [NhanVienController::class, 'checkToken']);
Route::get('/admin/dang-xuat', [NhanVienController::class, 'DangXuat']);

// Danh mục
Route::get('/admin/danh-muc/get-data', [DanhMucController::class, 'getData']);
Route::post('/admin/danh-muc/add-data', [DanhMucController::class, 'addData']);
Route::post('/admin/danh-muc/update', [DanhMucController::class, 'update']);
Route::post('/admin/danh-muc/delete', [DanhMucController::class, 'destroy']);
Route::post('/admin/danh-muc/change-status', [DanhMucController::class, 'changeStatus']);

// Sản phẩm
Route::get('/admin/san-pham/get-data', [SanPhamController::class, 'getData']);
Route::post('/admin/san-pham/add-data', [SanPhamController::class, 'addData']);
Route::post('/admin/san-pham/update', [SanPhamController::class, 'update']);
Route::post('/admin/san-pham/delete', [SanPhamController::class, 'destroy']);
Route::post('/admin/san-pham/change-status', [SanPhamController::class, 'changeStatus']);

// Nhân viên
Route::get('/admin/nhan-vien/get-data', [NhanVienController::class, 'getData']);
Route::post('/admin/nhan-vien/add-data', [NhanVienController::class, 'addData']);
Route::post('/admin/nhan-vien/update', [NhanVienController::class, 'update']);
Route::post('/admin/nhan-vien/delete', [NhanVienController::class, 'destroy']);
Route::post('/admin/nhan-vien/change-status', [NhanVienController::class, 'changeStatus']);

// Khách hàng
Route::get('/admin/khach-hang/get-data', [KhachHangController::class, 'getData']);
Route::post('/admin/khach-hang/update', [KhachHangController::class, 'update']);
Route::post('/admin/khach-hang/delete', [KhachHangController::class, 'destroy']);

// Đơn hàng / Hóa đơn
Route::get('/admin/don-hang/get-data', [HoaDonController::class, 'getData']);
Route::post('/admin/don-hang/change-status', [HoaDonController::class, 'changeStatus']);
Route::post('/admin/don-hang/delete', [HoaDonController::class, 'destroy']);

// Đánh giá
Route::get('/admin/danh-gia/get-data', [DanhGiaController::class, 'getData']);
Route::post('/admin/danh-gia/change-status', [DanhGiaController::class, 'changeStatus']);
Route::post('/admin/danh-gia/delete', [DanhGiaController::class, 'destroy']);

// ===========================================
// CLIENT ROUTES
// ===========================================

// Auth Client
Route::post('/khach-hang/dang-nhap', [KhachHangController::class, 'dangNhap']);
Route::post('/khach-hang/dang-ky', [KhachHangController::class, 'dangKy']);
Route::get('/khach-hang/check-token', [KhachHangController::class, 'checkToken']);
Route::get('/khach-hang/dang-xuat', [KhachHangController::class, 'dangXuat']);
Route::get('/khach-hang/profile', [KhachHangController::class, 'getProfile']);
Route::post('/khach-hang/profile/update', [KhachHangController::class, 'updateKhachHang']);

// Trang chủ / Sản phẩm client
Route::get('/khach-hang/gio-hang/get-data', [\App\Http\Controllers\GioHangController::class, 'getData']);
Route::post('/khach-hang/gio-hang/add-data', [\App\Http\Controllers\GioHangController::class, 'addData']);
Route::post('/khach-hang/gio-hang/update', [\App\Http\Controllers\GioHangController::class, 'update']);
Route::post('/khach-hang/gio-hang/delete', [\App\Http\Controllers\GioHangController::class, 'delData']);
Route::post('/khach-hang/gio-hang/remove', [\App\Http\Controllers\GioHangController::class, 'removeItem']);
Route::get('/khach-hang/danh-muc/get-data', [DanhMucController::class, 'getDataClientDanhMuc']);
Route::get('/client/Laptop/get-data-trang-chu', [SanPhamController::class, 'getDataTrangChu']);
Route::get('/client/Laptop/get-data', [SanPhamController::class, 'getDataClientSanPham']);
Route::get('/client/Laptop/san-pham/{id_san_pham}', [SanPhamController::class, 'getSanPhamById']);

// Đặt hàng / Hóa đơn Client
Route::post('/khach-hang/thanh-toan/dat-hang', [HoaDonController::class, 'datHang']);
Route::get('/khach-hang/hoa-don/get-data', [HoaDonController::class, 'getDataClient']);
