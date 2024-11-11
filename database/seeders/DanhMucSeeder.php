<?php

namespace Database\Seeders;

use App\Models\DanhMuc;
use Illuminate\Database\Seeder;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenDanhMuc = [
            'Váy cưới A-line',
            'Váy cưới Ball Gown ',
            'Váy cưới Mermaid ',
            'Váy cưới Trumpet',
            'Váy cưới Sheath',
            // 'Váy cưới Tea-Length',
            // 'Váy cưới Empire Waist',
            // 'Váy cưới High-Low',
        ];

        $hinhAnh = [
            'danhmuc/10-Xu-Huong-Anh-Vay-Cuoi-2024-Buc-Anh-Hoan-Hao-cho-Ngay-Trong-Dai-5.jpg',
            'danhmuc/16-hinh-anh-vay-cuoi-dep.webp',
            'danhmuc/AD8c4Udxay5dEResDlK1NCCDHHJjprdcjQxi8OnP.jpg',
            'danhmuc/My-Muse-Felix-3.jpg',
            'danhmuc/Nicole-Bridal-Váy-cưới-dính-dá-hình-12.jpg',
            // 'danhmuc/TD7azB16e4ddpM4VN1bmPfqbJryVaLCRMbLRksNH.jpg',
            // 'danhmuc/vay-cuoi-dep__1__af6c8a39b2524344bd0f9b67c2f98c06.jpg',
            // 'danhmuc/vay-cuoi-dep-6.png',
            // 'danhmuc/vay-cuoi-dep-10.jpeg',
            // 'danhmucvay-xoe-bong-cong-chua-chup-anh-cuoi-dep-tuy-hoa-phu-yen-cho-nang-1.jpg',
        ];

        for ($i = 0; $i < count($tenDanhMuc); $i++) {
            DanhMuc::create([
                'ten_danh_muc' => $tenDanhMuc[$i],
                'anh_danh_muc' => $hinhAnh[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
