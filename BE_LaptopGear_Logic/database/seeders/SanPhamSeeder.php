<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('san_phams')->delete();
        DB::table('san_phams')->truncate();
        DB::table('san_phams')->insert([
            [
                'ma_sp' => 1,
                'ten_sp' => 'Laptop Dell XPS 13 Plus 9320 (Core i7-1360P | 32GB | 1TB SSD | Intel Iris Xe | 13.4inch UHD+ | Win 11 | Xám)',
                'don_gia' => 30000000,
                'gia_cu' => 25000000,
                'trang_thai' => 1,
                'so_luong' => 100,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_7__2_224.png',
                'ma_dm' => 'DM01',
                'mo_ta' => 'CPU: Intel® Core™ i7-1360P (1.2GHz up to 5.0GHz, 18MB Cache).
Ram: 32GB LPDDR5 6000MHz.
Ổ cứng: 1TB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Iris Xe Graphics.
Display: 13.4inch UHD+ (3840 x 2400), InfinityEdge Touch.
Pin: 55Wh, 3Cell.
Weight: 1.2 kg.
Color: Platinum (Xám).
OS: Windows 11 Home bản quyền.
NPP: Dell Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example1',
            ],
            [
                'ma_sp' => 2,
                'ten_sp' => 'Laptop HP Pavilion 15-eg3091TU (Core i5-1335U | 16GB | 512GB SSD | Intel UHD | 15.6inch FHD | Win 11 | Bạc)',
                'don_gia' => 20000000,
                'gia_cu' => 18000000,
                'trang_thai' => 1,
                'so_luong' => 150,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_6_6_2.png',
                'ma_dm' => 'DM01',
                'mo_ta' => 'CPU: Intel® Core™ i5-1335U (1.3GHz up to 4.6GHz, 12MB Cache).
Ram: 16GB DDR4 3200MHz.
Ổ cứng: 512GB M.2 PCIe 3.0 SSD.
VGA: Intel® UHD Graphics.
Display: 15.6inch FHD (1920 x 1080), Anti-glare.
Pin: 41Wh, 3Cell.
Weight: 1.75 kg.
Color: Natural Silver (Bạc).
OS: Windows 11 Home bản quyền.
NPP: HP Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example2',
            ],
            [
                'ma_sp' => 3,
                'ten_sp' => 'MacBook Pro 16 M3 Pro 2023 (M3 Pro 11CPU/14GPU | 18GB | 512GB SSD | 16.2inch Liquid Retina XDR | MacOS | Bạc)',
                'don_gia' => 25000000,
                'gia_cu' => 23000000,
                'trang_thai' => 1,
                'so_luong' => 80,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/d/i/display_14_inch__f298e9zwj02m_large.jpg',
                'ma_dm' => 'DM01',
                'mo_ta' => 'CPU: Apple M3 Pro 11-core CPU.
Ram: 18GB Unified Memory.
Ổ cứng: 512GB SSD.
VGA: Apple 14-core GPU.
Display: 16.2inch Liquid Retina XDR (3456 x 2234).
Pin: 100Wh.
Weight: 2.14 kg.
Color: Silver (Bạc).
OS: macOS Sonoma.
NPP: Apple Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example2',
            ],
            [
                'ma_sp' => 4,
                'ten_sp' => 'Laptop Asus Zenbook 14 OLED UX3405MA-PH94W (Ultra 7-155H | 32GB | 1TB SSD | Intel Arc | 14.0inch 3K OLED | Win 11 | Xanh)',
                'don_gia' => 18000000,
                'gia_cu' => 16000000,
                'trang_thai' => 1,
                'so_luong' => 120,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_15_32.png',
                'ma_dm' => 'DM01',
                'mo_ta' => 'CPU: Intel® Core™ Ultra 7 155H (1.4GHz up to 4.8GHz, 24MB Cache).
Ram: 32GB LPDDR5X 7467MHz.
Ổ cứng: 1TB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Arc™ Graphics.
Display: 14.0inch 3K OLED (2880 x 1800), 120Hz.
Pin: 75Wh, 4Cell.
Weight: 1.2 kg.
Color: Ponder Blue (Xanh).
OS: Windows 11 Home bản quyền.
NPP: ASUS Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example3',
            ],

            [
                'ma_sp' => 5,
                'ten_sp' => 'Laptop Lenovo ThinkPad X1 Carbon Gen 11 (Core i7-1355U | 16GB | 1TB SSD | Intel Iris Xe | 14.0inch 2.8K OLED | Win 11 | Đen)',
                'don_gia' => 35000000,
                'gia_cu' => 32000000,
                'trang_thai' => 1,
                'so_luong' => 50,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_5__9_255_1_1.png',
                'ma_dm' => 'DM01',
                'mo_ta' => 'CPU: Intel® Core™ i7-1355U (1.7GHz up to 5.0GHz, 12MB Cache).
Ram: 16GB LPDDR5 6400MHz.
Ổ cứng: 1TB PCIe 4.0 NVMe SSD.
VGA: Intel® Iris Xe Graphics.
Display: 14.0inch 2.8K OLED (2880 x 1800), Anti-reflection, 60Hz.
Pin: 57Wh, 3Cell.
Weight: 1.12 kg.
Color: Black (Đen).
OS: Windows 11 Home bản quyền.
NPP: Lenovo Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example4',
            ],
            [
                'ma_sp' => 6,
                'ten_sp' => 'Laptop Acer Swift 3 SF314-512-78J4 (Core i7-1260P | 16GB | 512GB SSD | Intel Iris Xe | 14.0inch FHD | Win 11 | Bạc)',
                'don_gia' => 15000000,
                'gia_cu' => 13000000,
                'trang_thai' => 1,
                'so_luong' => 200,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/2/_/2_470_1_1.png',
                'ma_dm' => 'SP03',
                'mo_ta' => 'CPU: Intel® Core™ i7-1260P (2.1GHz up to 4.7GHz, 18MB Cache).
Ram: 16GB LPDDR4X 4266MHz.
Ổ cứng: 512GB PCIe 3.0 NVMe SSD.
VGA: Intel® Iris Xe Graphics.
Display: 14.0inch FHD (1920 x 1080), IPS.
Pin: 56Wh, 3Cell.
Weight: 1.25 kg.
Color: Silver (Bạc).
OS: Windows 11 Home bản quyền.
NPP: Acer Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example5',
            ],
            [
                'ma_sp' => 7,
                'ten_sp' => 'Laptop MSI Gaming GF63 Thin 12UC-876VN (Core i5-12450H | 16GB | 512GB SSD | RTX 2050 | 15.6inch FHD 144Hz | Win 11 | Đen)',
                'don_gia' => 22000000,
                'gia_cu' => 20000000,
                'trang_thai' => 1,
                'so_luong' => 70,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/l/a/laptop_msi_8_1_1.png',
                'ma_dm' => 'SP03',
                'mo_ta' => 'CPU: Intel® Core™ i5-12450H (2.0GHz up to 4.4GHz, 12MB Cache).
Ram: 16GB DDR4 3200MHz.
Ổ cứng: 512GB PCIe Gen 4 SSD.
VGA: NVIDIA® GeForce® RTX 2050 4GB GDDR6.
Display: 15.6inch FHD (1920 x 1080), IPS, 144Hz.
Pin: 52Wh, 3Cell.
Weight: 1.86 kg.
Color: Black (Đen).
OS: Windows 11 Home bản quyền.
NPP: MSI Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example6',
            ],
            [
                'ma_sp' => 8,
                'ten_sp' => 'Laptop Razer Blade Stealth 13 (Core i7-1165G7 | 16GB | 512GB SSD | GTX 1650 Ti Max-Q | 13.3inch FHD 120Hz | Win 11 | Đen)',
                'don_gia' => 40000000,
                'gia_cu' => 38000000,
                'trang_thai' => 1,
                'so_luong' => 30,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_6__4_104.png',
                'ma_dm' => 'SP03',
                'mo_ta' => 'CPU: Intel® Core™ i7-1165G7 (2.8GHz up to 4.7GHz, 12MB Cache).
Ram: 16GB LPDDR4X 3733MHz.
Ổ cứng: 512GB M.2 NVMe SSD.
VGA: NVIDIA® GeForce® GTX 1650 Ti Max-Q 4GB.
Display: 13.3inch FHD (1920 x 1080), 120Hz, Matte.
Pin: 53Wh, 4Cell.
Weight: 1.41 kg.
Color: Black (Đen).
OS: Windows 11 Home bản quyền.
NPP: Razer Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example7',
            ],
            [
                'ma_sp' => 9,
                'ten_sp' => 'Laptop Huawei MateBook X Pro 2024 (Ultra 7 155H | 16GB | 1TB SSD | Intel Arc | 14.2inch 3.1K | Win 11 | Xám)',
                'don_gia' => 28000000,
                'gia_cu' => 26000000,
                'trang_thai' => 1,
                'so_luong' => 60,
                'hinh' => 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/h/u/huawei-matebook-x_4_.jpg',
                'ma_dm' => 'SP03',
                'mo_ta' => 'CPU: Intel® Core™ Ultra 7 155H (1.4GHz up to 4.8GHz, 24MB Cache).
Ram: 16GB LPDDR5X 7467MHz.
Ổ cứng: 1TB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Arc™ Graphics.
Display: 14.2inch 3.1K (3120 x 2080), 90Hz.
Pin: 60Wh, 4Cell.
Weight: 1.26 kg.
Color: Space Gray (Xám).
OS: Windows 11 Home bản quyền.
NPP: Huawei Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example8',
            ],
            [
                'ma_sp' => 10,
                'ten_sp' => 'Laptop LG Gram 17 2024 (Ultra 7 155H | 32GB | 1TB SSD | Intel Arc | 17.0inch WQXGA | Win 11 | Trắng)',
                'don_gia' => 32000000,
                'gia_cu' => 30000000,
                'trang_thai' => 1,
                'so_luong' => 40,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_86_.png',
                'ma_dm' => 'SP03',
                'mo_ta' => 'CPU: Intel® Core™ Ultra 7 155H (1.4GHz up to 4.8GHz, 24MB Cache).
Ram: 32GB LPDDR5X 7467MHz.
Ổ cứng: 1TB PCIe 4.0 NVMe SSD.
VGA: Intel® Arc™ Graphics.
Display: 17.0inch WQXGA (2560 x 1600), Anti-glare.
Pin: 80Wh, 4Cell.
Weight: 1.35 kg.
Color: White (Trắng).
OS: Windows 11 Home bản quyền.
NPP: LG Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example9',
            ],


            // DM02
            [
                'ma_sp' => 11,
                'ten_sp' => 'Laptop MSI Katana GF66 12UC-889VN (Core i7-12650H | 16GB | 512GB SSD | RTX 3050 | 15.6inch FHD 144Hz | Win 11 | Đen)',
                'don_gia' => 24000000,
                'gia_cu' => 22000000,
                'trang_thai' => 1,
                'so_luong' => 60,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/1/_/1_135_2_3.jpg',
                'ma_dm' => 'DM02',
                'mo_ta' => 'CPU: Intel® Core™ i7-12650H (2.3GHz up to 4.7GHz, 24MB Cache).
Ram: 16GB DDR4 3200MHz.
Ổ cứng: 512GB PCIe 4.0 NVMe SSD.
VGA: NVIDIA® GeForce® RTX 3050 4GB GDDR6.
Display: 15.6inch FHD (1920 x 1080), IPS, 144Hz.
Pin: 53.5Wh, 3Cell.
Weight: 2.25 kg.
Color: Black (Đen).
OS: Windows 11 Home bản quyền.
NPP: MSI Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'SqmpooBE0E0',
            ],
            [
                'ma_sp' => 12,
                'ten_sp' => 'Laptop ASUS ROG Strix G15 G513RC-HN095W (Ryzen 7 6800H | 8GB | 512GB SSD | RTX 3050 | 15.6inch FHD 144Hz | Win 11 | Xám)',
                'don_gia' => 29000000,
                'gia_cu' => 27000000,
                'trang_thai' => 1,
                'so_luong' => 40,
                'hinh' => 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/2/_/2_64_37.jpg',
                'ma_dm' => 'DM02',
                'mo_ta' => 'CPU: AMD Ryzen™ 7 6800H (3.2GHz up to 4.7GHz, 20MB Cache).
Ram: 8GB DDR5 4800MHz.
Ổ cứng: 512GB PCIe 4.0 NVMe SSD.
VGA: NVIDIA® GeForce® RTX 3050 4GB GDDR6.
Display: 15.6inch FHD (1920 x 1080), 144Hz, Anti-glare.
Pin: 90Wh, 4Cell.
Weight: 2.1 kg.
Color: Eclipse Gray (Xám).
OS: Windows 11 Home bản quyền.
NPP: ASUS Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'Ragp7c4xQEU',
            ],
            [
                'ma_sp' => 13,
                'ten_sp' => 'Laptop Acer Nitro 5 AN515-58-52SP (Core i5-12500H | 8GB | 512GB SSD | RTX 3050 | 15.6inch FHD 144Hz | Win 11 | Đen)',
                'don_gia' => 21000000,
                'gia_cu' => 19000000,
                'trang_thai' => 1,
                'so_luong' => 80,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/2/8/28_1_17.jpg',
                'ma_dm' => 'DM02',
                'mo_ta' => 'CPU: Intel® Core™ i5-12500H (1.8GHz up to 4.5GHz, 18MB Cache).
Ram: 8GB DDR4 3200MHz.
Ổ cứng: 512GB PCIe 4.0 NVMe SSD.
VGA: NVIDIA® GeForce® RTX 3050 4GB GDDR6.
Display: 15.6inch FHD (1920 x 1080), 144Hz, IPS.
Pin: 57.5Wh, 4Cell.
Weight: 2.5 kg.
Color: Black (Đen).
OS: Windows 11 Home bản quyền.
NPP: Acer Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => '3KoU0ZN-Ots',
            ],
            [
                'ma_sp' => 14,
                'ten_sp' => 'Laptop Lenovo Legion 5 15ARH7H (Ryzen 7 6800H | 16GB | 512GB SSD | RTX 3060 | 15.6inch WQHD 165Hz | Win 11 | Xám)',
                'don_gia' => 27000000,
                'gia_cu' => 25000000,
                'trang_thai' => 1,
                'so_luong' => 70,
                'hinh' => 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/1/_/1_154_2_2.png',
                'ma_dm' => 'DM02',
                'mo_ta' => 'CPU: AMD Ryzen™ 7 6800H (3.2GHz up to 4.7GHz, 20MB Cache).
Ram: 16GB DDR5 4800MHz.
Ổ cứng: 512GB PCIe 4.0 NVMe SSD.
VGA: NVIDIA® GeForce® RTX 3060 6GB GDDR6.
Display: 15.6inch WQHD (2560 x 1440), 165Hz, IPS.
Pin: 80Wh, 4Cell.
Weight: 2.4 kg.
Color: Storm Gray (Xám).
OS: Windows 11 Home bản quyền.
NPP: Lenovo Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'FwqaaGxl9-g',
            ],
            [
                'ma_sp' => 15,
                'ten_sp' => 'Laptop Dell G15 5525 (Ryzen 7 6800H | 16GB | 512GB SSD | RTX 3050 | 15.6inch FHD 120Hz | Win 11 | Xám)',
                'don_gia' => 26000000,
                'gia_cu' => 24000000,
                'trang_thai' => 1,
                'so_luong' => 50,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/l/a/laptop-dell-gaming-g15-5525-p105f009-cu-dep.png',
                'ma_dm' => 'DM02',
                'mo_ta' => 'CPU: AMD Ryzen™ 7 6800H (3.2GHz up to 4.7GHz, 20MB Cache).
Ram: 16GB DDR5 4800MHz.
Ổ cứng: 512GB PCIe Gen 4 SSD.
VGA: NVIDIA® GeForce® RTX 3050 4GB GDDR6.
Display: 15.6inch FHD (1920 x 1080), 120Hz, Anti-glare.
Pin: 56Wh, 3Cell.
Weight: 2.5 kg.
Color: Phantom Grey (Xám).
OS: Windows 11 Home bản quyền.
NPP: Dell Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'EKpoyrLi_uY',
            ],
            [
                'ma_sp' => 16,
                'ten_sp' => 'Laptop HP Omen 16 2023 (Ryzen 7 7840HS | 16GB | 1TB SSD | RTX 4060 | 16.1inch FHD 165Hz | Win 11 | Đen)',
                'don_gia' => 31000000,
                'gia_cu' => 28000000,
                'trang_thai' => 1,
                'so_luong' => 45,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_-_2023-04-10t140727.347.png',
                'ma_dm' => 'DM02',
                'mo_ta' => 'CPU: AMD Ryzen™ 7 7840HS (3.8GHz up to 5.1GHz, 24MB Cache).
Ram: 16GB DDR5 5600MHz.
Ổ cứng: 1TB PCIe 4.0 NVMe SSD.
VGA: NVIDIA® GeForce® RTX 4060 8GB GDDR6.
Display: 16.1inch FHD (1920 x 1080), 165Hz, IPS.
Pin: 83Wh, 6Cell.
Weight: 2.4 kg.
Color: Shadow Black (Đen).
OS: Windows 11 Home bản quyền.
NPP: HP Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'VFrw1R6NjYY',
            ],


            // DM04
            [
                'ma_sp' => 17,
                'ten_sp' => 'Laptop Dell XPS 13 (Intel Core i7 | 16GB | 1TB SSD | Intel Iris Xe | 13.4inch UHD+ | Win 11 | Xám)',
                'don_gia' => 36000000,
                'gia_cu' => 34000000,
                'trang_thai' => 1,
                'so_luong' => 55,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_5__9_25.png',
                'ma_dm' => 'DM04',
                'mo_ta' => 'CPU: Intel® Core™ i7-1360P (1.8GHz up to 5.0GHz, 18MB Cache).
Ram: 16GB LPDDR5 6000MHz.
Ổ cứng: 1TB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Iris® Xe Graphics.
Display: 13.4inch UHD+ (3840 x 2400), InfinityEdge, cảm ứng.
Pin: 55Wh, 3Cell.
Weight: 1.23 kg.
Color: Platinum (Xám).
OS: Windows 11 Home bản quyền.
NPP: Dell Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'POlrA1TSRZ4',
            ],
            [
                'ma_sp' => 18,
                'ten_sp' => 'MacBook Air 13 M2 (8-core CPU | 10-core GPU | 16GB | 512GB SSD | 13.6inch Retina | macOS | Xám)',
                'don_gia' => 32000000,
                'gia_cu' => 30000000,
                'trang_thai' => 1,
                'so_luong' => 100,
                'hinh' => 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/t/e/text_ng_n_-_2025-03-01t180344.170.png',
                'ma_dm' => 'DM04',
                'mo_ta' => 'CPU: Apple M2 (8-core CPU, 10-core GPU).
Ram: 16GB Unified Memory.
Ổ cứng: 512GB SSD.
VGA: Apple 10-core GPU.
Display: 13.6inch Liquid Retina (2560 x 1664), True Tone.
Pin: 52.6Wh.
Weight: 1.24 kg.
Color: Space Gray (Xám).
OS: macOS bản quyền.
NPP: Apple Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'Gcvcddc_Aug',
            ],
            [
                'ma_sp' => 19,
                'ten_sp' => 'Laptop LG Gram 14 (Intel Core i7 | 16GB | 512GB SSD | Intel Iris Xe | 14inch WUXGA | Win 11 | Trắng)',
                'don_gia' => 28000000,
                'gia_cu' => 26000000,
                'trang_thai' => 1,
                'so_luong' => 60,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_22__3_35_1.png',
                'ma_dm' => 'DM04',
                'mo_ta' => 'CPU: Intel® Core™ i7-1360P (1.8GHz up to 5.0GHz, 18MB Cache).
Ram: 16GB LPDDR5 6000MHz.
Ổ cứng: 512GB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Iris® Xe Graphics.
Display: 14inch WUXGA (1920 x 1200), IPS.
Pin: 72Wh, 4Cell.
Weight: 0.999 kg.
Color: Snow White (Trắng).
OS: Windows 11 Home bản quyền.
NPP: LG Việt Nam.
Xuất xứ: Hàn Quốc.',
                'trailer' => 'rmU6JnSzW-E',
            ],
            [
                'ma_sp' => 20,
                'ten_sp' => 'Laptop HP Spectre x360 (Intel Core i7 | 16GB | 1TB SSD | Intel Iris Xe | 13.5inch 3K2K OLED | Win 11 | Bạc)',
                'don_gia' => 33000000,
                'gia_cu' => 31000000,
                'trang_thai' => 1,
                'so_luong' => 40,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/h/p/hp-spectre-13.jpg',
                'ma_dm' => 'DM04',
                'mo_ta' => 'CPU: Intel® Core™ i7-1355U (1.7GHz up to 5.0GHz, 12MB Cache).
Ram: 16GB LPDDR4x 4266MHz.
Ổ cứng: 1TB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Iris® Xe Graphics.
Display: 13.5inch 3K2K OLED (3000 x 2000), cảm ứng, xoay gập 360°.
Pin: 66Wh, 4Cell.
Weight: 1.34 kg.
Color: Natural Silver (Bạc).
OS: Windows 11 Home bản quyền.
NPP: HP Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'mnWYa_EaEYQ',
            ],
            [
                'ma_sp' => 21,
                'ten_sp' => 'Laptop ASUS Zenbook S 13 OLED (Intel Core i7 | 16GB | 512GB SSD | Intel Iris Xe | 13.3inch 2.8K OLED | Win 11 | Xanh)',
                'don_gia' => 30000000,
                'gia_cu' => 28000000,
                'trang_thai' => 1,
                'so_luong' => 75,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_84__2.png',
                'ma_dm' => 'DM04',
                'mo_ta' => 'CPU: Intel® Core™ i7-1355U (1.7GHz up to 5.0GHz, 12MB Cache).
Ram: 16GB LPDDR5 6400MHz.
Ổ cứng: 512GB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Iris® Xe Graphics.
Display: 13.3inch 2.8K OLED (2880 x 1800), 16:10, 100% DCI-P3, 550nits.
Pin: 63Wh, 4Cell.
Weight: 1.00 kg.
Color: Basalt Gray (Xanh).
OS: Windows 11 Home bản quyền.
NPP: ASUS Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'pdbhHmn6Kkw',
            ],
            [
                'ma_sp' => 22,
                'ten_sp' => 'Laptop Microsoft Surface Laptop 5 (Intel Core i7 | 16GB | 512GB SSD | Intel Iris Xe | 13.5inch PixelSense | Win 11 | Bạch Kim)',
                'don_gia' => 35000000,
                'gia_cu' => 33000000,
                'trang_thai' => 1,
                'so_luong' => 35,
                'hinh' => 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/m/i/microsoft-surface-laptop-studio.png',
                'ma_dm' => 'DM04',
                'mo_ta' => 'CPU: Intel® Core™ i7-1255U (1.7GHz up to 4.7GHz, 12MB Cache).
Ram: 16GB LPDDR5x 6400MHz.
Ổ cứng: 512GB SSD.
VGA: Intel® Iris® Xe Graphics.
Display: 13.5inch PixelSense (2256 x 1504), cảm ứng, 3:2, Gorilla Glass.
Pin: 47.4Wh, 4Cell.
Weight: 1.29 kg.
Color: Platinum (Bạch Kim).
OS: Windows 11 Home bản quyền.
NPP: Microsoft Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'Yl2cQCkici8',
            ],

            // DM05
            [
                'ma_sp' => 26,
                'ten_sp' => '[Like New] Laptop Lenovo ThinkPad T480 (Intel Core i5-8350U | 8GB DDR4 | 256GB SSD | Intel UHD 620 | 14.0inch FHD IPS | Win 10 Pro | Đen)',
                'don_gia' => 13500000,
                'gia_cu' => 11500000,
                'trang_thai' => 1,
                'so_luong' => 40,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_52__4.png',
                'ma_dm' => 'DM05',
                'mo_ta' => "CPU: Intel® Core™ i5-8350U (1.7GHz up to 3.6GHz, 6MB Cache).
Ram: 8GB DDR4 2400MHz.
Ổ cứng: 256GB SSD M.2 SATA.
VGA: Intel® UHD Graphics 620.
Display: 14.0inch FHD (1920 x 1080) IPS.
Pin: 3Cell 57Wh.
Weight: 1.58 kg.
Color: Đen.
OS: Windows 10 Pro bản quyền.
NPP: Lenovo Việt Nam.
Xuất xứ: Trung Quốc.",
                'trailer' => 'LOmBPY6XmSw',
            ],
            [
                'ma_sp' => 27,
                'ten_sp' => '[Like New] Laptop Acer Aspire 5 (Ryzen 3 5300U | 8GB DDR4 | 256GB SSD | Radeon Graphics | 15.6inch FHD IPS | Win 11 | Bạc)',
                'don_gia' => 9000000,
                'gia_cu' => 8000000,
                'trang_thai' => 1,
                'so_luong' => 50,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_9__7_17_1.png',
                'ma_dm' => 'DM05',
                'mo_ta' => "CPU: AMD Ryzen™ 3 5300U (2.6GHz up to 3.8GHz, 4MB Cache).
Ram: 8GB DDR4 3200MHz.
Ổ cứng: 256GB SSD PCIe NVMe.
VGA: AMD Radeon™ Graphics.
Display: 15.6inch FHD (1920 x 1080) IPS.
Pin: 3Cell 48Wh.
Weight: 1.7 kg.
Color: Bạc.
OS: Windows 11 Home bản quyền.
NPP: Acer Việt Nam.
Xuất xứ: Trung Quốc.",
                'trailer' => '01vlqrTh4s8',
            ],
            [
                'ma_sp' => 28,
                'ten_sp' => '[Like New] Laptop Asus VivoBook 14 (Intel Core i3-1115G4 | 8GB DDR4 | 512GB SSD | Intel UHD Graphics | 14.0inch FHD IPS | Win 11 | Bạc)',
                'don_gia' => 10000000,
                'gia_cu' => 8500000,
                'trang_thai' => 1,
                'so_luong' => 45,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_4__6_10.png',
                'ma_dm' => 'DM05',
                'mo_ta' => "CPU: Intel® Core™ i3-1115G4 (3.0GHz up to 4.1GHz, 6MB Cache).
Ram: 8GB DDR4 3200MHz.
Ổ cứng: 512GB SSD M.2 PCIe.
VGA: Intel® UHD Graphics.
Display: 14.0inch FHD (1920 x 1080) IPS.
Pin: 2Cell 37Wh.
Weight: 1.4 kg.
Color: Bạc.
OS: Windows 11 Home bản quyền.
NPP: ASUS Việt Nam.
Xuất xứ: Trung Quốc.",
                'trailer' => '9owHVGfInTY',
            ],
            //DM06
            [
                'ma_sp' => 31,
                'ten_sp' => 'Laptop ASUS Vivobook 15 OLED A1505VA-L1201W (i5 Gen 13 | RAM 16GB | SSD 512GB)',
                'don_gia' => 17900000,
                'gia_cu' => 16900000,
                'trang_thai' => 1,
                'so_luong' => 60,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/l/a/laptop-asus-vivobook-15-oled-a1505va-ma468w_1_.png',
                'ma_dm' => 'DM06',
                'mo_ta' => "Màn hình: 15.6\" Full HD OLED, 60Hz.\nCPU: Intel Core i5-13500H (12 nhân).\nRAM: 16GB DDR4 3200MHz.\nSSD: 512GB PCIe Gen 3 NVMe.\nGPU: Intel Iris Xe Graphics.\nTrọng lượng: 1.7kg.\nPin: 42Wh.\nHệ điều hành: Windows 11 bản quyền.\nXuất xứ: Trung Quốc.\nNPP: ASUS Việt Nam.",
                'trailer' => 'pNwXWxzBABE',
            ],
            [
                'ma_sp' => 32,
                'ten_sp' => 'Laptop Lenovo IdeaPad Slim 5 14IAH8 (i5 Gen 13 | 16GB | SSD 512GB | 2.25K)',
                'don_gia' => 18900000,
                'gia_cu' => 17900000,
                'trang_thai' => 1,
                'so_luong' => 50,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_59__1_14.png',
                'ma_dm' => 'DM06',
                'mo_ta' => "Màn hình: 14\" 2.2K IPS, 300 nits.\nCPU: Intel Core i5-13420H.\nRAM: 16GB LPDDR5.\nSSD: 512GB PCIe Gen 4.\nGPU: Intel Iris Xe.\nPin: 56.6Wh.\nTrọng lượng: 1.46kg.\nHệ điều hành: Windows 11.\nNPP: Lenovo Việt Nam.\nXuất xứ: Trung Quốc.",
                'trailer' => '6cYdG-Ytzqk',
            ],
            [
                'ma_sp' => 33,
                'ten_sp' => 'Laptop Dell Inspiron 15 3520 (i5 Gen 12 | 8GB | SSD 256GB | Win 11)',
                'don_gia' => 14900000,
                'gia_cu' => 13900000,
                'trang_thai' => 1,
                'so_luong' => 45,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_6__2_87_3.png',
                'ma_dm' => 'DM06',
                'mo_ta' => "Màn hình: 15.6\" FHD Anti-glare.\nCPU: Intel Core i5-1235U.\nRAM: 8GB DDR4 3200MHz.\nSSD: 256GB PCIe NVMe.\nGPU: Intel Iris Xe.\nTrọng lượng: 1.9kg.\nHệ điều hành: Windows 11 bản quyền.\nNPP: Dell Việt Nam.\nXuất xứ: Việt Nam.",
                'trailer' => '6-JSqPGPuKc',
            ],
            [
                'ma_sp' => 34,
                'ten_sp' => 'Laptop Acer Aspire 7 A715 (Ryzen 5 | GTX 1650 | SSD 512GB | Gaming Giá Rẻ)',
                'don_gia' => 15900000,
                'gia_cu' => 14500000,
                'trang_thai' => 1,
                'so_luong' => 40,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_6_18.png',
                'ma_dm' => 'DM06',
                'mo_ta' => "Màn hình: 15.6\" FHD IPS 144Hz.\nCPU: AMD Ryzen 5 5625U.\nGPU: GTX 1650 4GB.\nRAM: 8GB DDR4.\nSSD: 512GB NVMe.\nPin: 48Wh.\nOS: Windows 11 Home.\nNPP: Acer Việt Nam.\nXuất xứ: Trung Quốc.",
                'trailer' => '8PZ9G-wjHh4',
            ],
            [
                'ma_sp' => 35,
                'ten_sp' => 'Laptop MSI Modern 14 C13M (i7 Gen 13 | RAM 16GB | SSD 512GB | Siêu nhẹ)',
                'don_gia' => 20500000,
                'gia_cu' => 18900000,
                'trang_thai' => 1,
                'so_luong' => 35,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_14__1_54.png',
                'ma_dm' => 'DM06',
                'mo_ta' => "Màn hình: 14\" FHD IPS.\nCPU: Intel Core i7-1355U.\nRAM: 16GB DDR4.\nSSD: 512GB NVMe.\nTrọng lượng: 1.4kg.\nPin: 3 cell 53.8Wh.\nOS: Windows 11 bản quyền.\nNPP: MSI Việt Nam.\nXuất xứ: Trung Quốc.",
                'trailer' => 'zkPtPQINhdA',
            ],
            [
                'ma_sp' => 36,
                'ten_sp' => 'Laptop LG gram 16 (i7 Gen 13 | 16GB | SSD 1TB | Siêu mỏng nhẹ 1.2kg)',
                'don_gia' => 39900000,
                'gia_cu' => 37900000,
                'trang_thai' => 1,
                'so_luong' => 20,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_38__2_16.png',
                'ma_dm' => 'DM06',
                'mo_ta' => "Màn hình: 16\" WQXGA (2560x1600).\nCPU: Intel Core i7-1360P.\nRAM: 16GB LPDDR5.\nSSD: 1TB PCIe Gen 4.\nTrọng lượng: 1.2kg.\nPin: 80Wh.\nOS: Windows 11.\nNPP: LG Việt Nam.\nXuất xứ: Hàn Quốc.",
                'trailer' => '6Z1mUDkr6l0&t=243s',
            ],
            [
                'ma_sp' => 37,
                'ten_sp' => 'Laptop Gigabyte G5 KF (i5 Gen 12 | RTX 4060 | SSD 512GB | 144Hz)',
                'don_gia' => 25900000,
                'gia_cu' => 23900000,
                'trang_thai' => 1,
                'so_luong' => 15,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_1__4_42_2.png',
                'ma_dm' => 'DM06',
                'mo_ta' => "Màn hình: 15.6\" FHD 144Hz.\nCPU: Intel Core i5-12500H.\nGPU: NVIDIA RTX 4060 8GB.\nRAM: 16GB DDR4.\nSSD: 512GB NVMe Gen 4.\nTản nhiệt: Dual Fan.\nOS: Windows 11.\nNPP: Gigabyte Việt Nam.\nXuất xứ: Trung Quốc.",
                'trailer' => 'c30cDC7bDoI',
            ],
            [
                'ma_sp' => 38,
                'ten_sp' => 'Laptop HP Pavilion 14 (i3 Gen 12 | SSD 256GB | RAM 8GB | Win 11)',
                'don_gia' => 11900000,
                'gia_cu' => 10900000,
                'trang_thai' => 1,
                'so_luong' => 30,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_13_15.png',
                'ma_dm' => 'DM06',
                'mo_ta' => "Màn hình: 14\" Full HD.\nCPU: Intel Core i3-1215U.\nRAM: 8GB DDR4 3200MHz.\nSSD: 256GB PCIe.\nGPU: Intel UHD Graphics.\nPin: 41Wh.\nTrọng lượng: 1.4kg.\nOS: Windows 11.\nNPP: HP Việt Nam.\nXuất xứ: Việt Nam.",
                'trailer' => '24A1pEX2vGU',
            ],
            [
                'ma_sp' => 39,
                'ten_sp' => 'Laptop ASUS ROG Strix G16 (i7 Gen 13 | RTX 4070 | 16GB | SSD 1TB | 165Hz)',
                'don_gia' => 39900000,
                'gia_cu' => 37900000,
                'trang_thai' => 1,
                'so_luong' => 10,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_1__5_9.png',
                'ma_dm' => 'DM06',
                'mo_ta' => "Màn hình: 16\" FHD+ 165Hz.\nCPU: Intel Core i7-13650HX.\nGPU: NVIDIA RTX 4070 8GB.\nRAM: 16GB DDR5 4800MHz.\nSSD: 1TB PCIe Gen 4.\nOS: Windows 11.\nNPP: ASUS ROG Việt Nam.\nXuất xứ: Trung Quốc.",
                'trailer' => 'MpAiuQyd6Z8',
            ],
            [
                'ma_sp' => 40,
                'ten_sp' => 'Laptop Acer Swift 3 SF314 (i5 Gen 12 | OLED 2.8K | 16GB | SSD 512GB)',
                'don_gia' => 18500000,
                'gia_cu' => 16900000,
                'trang_thai' => 1,
                'so_luong' => 20,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/2/_/2_470_1_1.png',
                'ma_dm' => 'DM06',
                'mo_ta' => "Màn hình: 14\" OLED 2.8K 90Hz.\nCPU: Intel Core i5-1240P.\nRAM: 16GB LPDDR4x.\nSSD: 512GB PCIe Gen 4.\nTrọng lượng: 1.25kg.\nPin: 56Wh.\nOS: Windows 11.\nNPP: Acer Việt Nam.\nXuất xứ: Trung Quốc.",
                'trailer' => 'yKiLKj3R810',
            ],

        ]);
    }
}
