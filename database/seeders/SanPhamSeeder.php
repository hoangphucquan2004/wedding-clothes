<?php

namespace Database\Seeders;

use App\Models\DanhMuc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $proSeed = [];

        // Sử dụng vòng lặp for để tạo dữ liệu sản phẩm
        for ($i = 1; $i <= 20; $i++) {
            $proSeed[] = [
                'danh_muc_id' => DanhMuc::inRandomOrder()->first()->id, // Danh mục ngẫu nhiên từ bảng danh_mucs
                'ma_san_pham' => 'SP' . str_pad($i, 3, '0', STR_PAD_LEFT), // Mã sản phẩm duy nhất
                'ten_san_pham' => 'Váy Cưới Làm lễ số ' . $i,
                'gia_san_pham' => rand(100000, 1000000), // Giá sản phẩm ngẫu nhiên
                'image_path' => 'images/products/sample' . $i . '.jpg', // Đường dẫn ảnh giả lập
                'mo_ta_san_pham' => 'Mô tả sản phẩm số ' . $i,
                'so_luong' => rand(10, 100), // Số lượng ngẫu nhiên
                'khuyen_mai' => rand(0, 50), // Phần trăm khuyến mãi ngẫu nhiên
                'trang_thai' => true, // Trạng thái luôn khả dụng
                'is_new' => rand(0, 1), // Sản phẩm mới hoặc không
                'is_hot' => rand(0, 1), // Sản phẩm nổi bật hoặc không
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Thêm dữ liệu vào bảng `products`
        DB::table('san_phams')->insert($proSeed);
    }
}
