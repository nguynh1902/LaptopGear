<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongKeController
{
    public function duyetKhachHang(Request $request)
    {
        $data = KhachHang::whereDate('created_at', '>=', $request->begin)
            ->whereDate('created_at', '<=', $request->end)
            ->select(
                DB::raw('DATE(created_at) AS ngay_dang_ky'),
                DB::raw('COUNT(id) AS so_khach_hang_moi')
            )
            ->groupBy('ngay_dang_ky')
            ->orderBy('ngay_dang_ky')
            ->get();

        $colors = [];
        foreach ($data as $item) {
            $colors[] = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
        }

        return response()->json([
            'status' => true,
            'data' => $data,
            'labels' => $data->pluck('ngay_dang_ky'),
            'datasets' => [
                [
                    'label' => 'Khách hàng mới',
                    'data' => $data->pluck('so_khach_hang_moi'),
                    'backgroundColor' => $colors,
                ]
            ]
        ]);
    }

public function duyetHoaDon(Request $request)
{
    $data = HoaDon::whereDate('created_at', '>=', $request->begin)
        ->whereDate('created_at', '<=', $request->end)
        ->select(
            DB::raw('DATE(created_at) AS ngay_created_at'),
            DB::raw('COUNT(id) AS so_hoa_don_theo_ngay')
        )
        ->groupBy('ngay_created_at')
        ->orderBy('ngay_created_at')
        ->get();

    return response()->json([
        'status' => true,
        'labels' => $data->pluck('ngay_created_at'),
        'datasets' => [
            [
                'label' => 'Số hóa đơn trong ngày',
                'data' => $data->pluck('so_hoa_don_theo_ngay'),
                'borderColor' => '#3498db',
                'backgroundColor' => 'rgba(52, 152, 219, 0.2)',
                'fill' => true,
                'tension' => 0.3,
            ]
        ]
    ]);
}
}
