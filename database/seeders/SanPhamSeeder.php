<?php

namespace Database\Seeders;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Database\Seeder;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenSanPham = [
            'Váy cưới A-line',
            'Váy cưới Ball Gown ',
            'Váy cưới Mermaid ',
            'Váy cưới Trumpet',
            'Váy cưới Sheath',
            'Váy cưới Tea-Length',
            'Váy cưới Empire Waist',
            'Váy cưới High-Low',
            'Váy cưới Boho',
            'Váy cưới Vintage',
            'Váy cưới tối giản ',
            'Váy cưới ngắn',
            'Váy cưới cổ điển',
            'Váy cưới dài tay',
            'Váy cưới trễ vai',
            'Váy cưới lụa',
        ];
        $moTa = [
            'Váy cưới A-line: Váy cưới A-line có phần thân trên ôm sát và dần rộng ra từ eo xuống dưới, tạo hình dáng giống chữ "A". Đây là kiểu váy phổ biến và phù hợp với nhiều dáng người, mang lại sự thanh thoát và nhẹ nhàng.',
            'Váy cưới Ball Gown: Váy cưới Ball Gown có thân trên ôm sát và phần chân váy xòe rộng, giống như một chiếc váy công chúa. Kiểu váy này mang đến vẻ ngoài lộng lẫy, hoàn hảo cho các cô dâu muốn nổi bật.',

            'Váy cưới Mermaid: Váy cưới Mermaid ôm sát từ ngực đến đầu gối và xòe rộng ở phần đuôi. Đây là lựa chọn tuyệt vời cho các cô dâu muốn tôn vinh đường cong cơ thể.',

            'Váy cưới Trumpet: Tương tự như váy Mermaid, nhưng phần xòe bắt đầu từ đầu gối thay vì phía dưới, tạo ra dáng váy ôm sát và dễ di chuyển hơn.',

            'Váy cưới Sheath: Váy cưới Sheath có thiết kế ôm sát theo đường cơ thể mà không xòe ra. Kiểu váy này mang lại vẻ thanh lịch và phù hợp cho cô dâu có dáng người mảnh mai.',

            'Váy cưới Tea-Length: Váy cưới Tea-Length có chiều dài ngang bắp chân, tạo sự tươi mới và cổ điển. Đây là lựa chọn lý tưởng cho những buổi lễ cưới ngoài trời hoặc những đám cưới không quá formal.',

            'Váy cưới Empire Waist: Váy cưới Empire Waist có phần eo cao, ngay dưới ngực, tạo dáng dài và thanh thoát. Kiểu váy này rất phù hợp cho các cô dâu mang thai hoặc muốn giấu đi vòng bụng.',

            'Váy cưới High-Low: Váy cưới High-Low có chiều dài ngắn phía trước và dài phía sau, tạo phong cách trẻ trung, năng động và hiện đại. Đây là lựa chọn phổ biến cho các cô dâu muốn thể hiện sự cá tính.',

            'Váy cưới Boho: Váy cưới Boho mang phong cách tự do, thoải mái và không cầu kỳ, thường được thiết kế với chất liệu mềm mại như ren hoặc voan, kết hợp với các chi tiết hoa lá và phụ kiện tự nhiên.',

            'Váy cưới Vintage: Váy cưới Vintage mang đậm ảnh hưởng của những thập kỷ trước, với thiết kế tinh tế và cổ điển. Kiểu váy này thường sử dụng chất liệu như ren, satin và các chi tiết thêu tay hoặc hoa văn truyền thống.',

            'Váy cưới tối giản: Váy cưới tối giản có thiết kế đơn giản nhưng tinh tế, với đường nét sạch sẽ và không có quá nhiều chi tiết phức tạp. Đây là lựa chọn phổ biến cho những cô dâu yêu thích vẻ đẹp thanh lịch và hiện đại.',

            'Váy cưới ngắn: Váy cưới ngắn có chiều dài trên đầu gối, mang lại sự năng động, tươi mới. Đây là lựa chọn hoàn hảo cho những buổi tiệc cưới không chính thức hoặc cho các cô dâu muốn thể hiện phong cách trẻ trung.',

            'Váy cưới cổ điển: Váy cưới cổ điển mang đến vẻ đẹp trang nhã và sang trọng, thường có kiểu dáng A-line hoặc Ball Gown với chi tiết thêu ren, vải lụa cao cấp và các phụ kiện lộng lẫy.',

            'Váy cưới dài tay: Váy cưới dài tay thường được làm từ chất liệu ren hoặc vải voan, tạo ra vẻ đẹp vừa kín đáo, vừa quyến rũ. Đây là lựa chọn tuyệt vời cho các đám cưới mùa thu hoặc đông.',

            'Váy cưới trễ vai: Váy cưới trễ vai mang đến vẻ ngoài gợi cảm và quyến rũ, với phần cổ khoét sâu và đôi vai lộ ra. Đây là lựa chọn phù hợp cho những cô dâu muốn tôn lên vẻ đẹp của vai và cổ.',

            'Váy cưới lụa: Váy cưới lụa mang đến sự sang trọng và mượt mà, với chất liệu vải lụa cao cấp tạo cảm giác thoải mái và dễ chịu cho cô dâu. Kiểu váy này thường có thiết kế đơn giản nhưng vô cùng thanh thoát.',
        ];
        $hinhAnh = [
            'danhmuc/10-Xu-Huong-Anh-Vay-Cuoi-2024-Buc-Anh-Hoan-Hao-cho-Ngay-Trong-Dai-5.jpg',
            'danhmuc/16-hinh-anh-vay-cuoi-dep.webp',
            'danhmuc/AD8c4Udxay5dEResDlK1NCCDHHJjprdcjQxi8OnP.jpg',
            'danhmuc/My-Muse-Felix-3.jpg',
            'danhmuc/Nicole-Bridal-Váy-cưới-dính-dá-hình-12.jpg',
            'danhmuc/TD7azB16e4ddpM4VN1bmPfqbJryVaLCRMbLRksNH.jpg',
            'danhmuc/vay-cuoi-dep__1__af6c8a39b2524344bd0f9b67c2f98c06.jpg',
            'danhmuc/vay-cuoi-dep-6.png',
            'danhmuc/vay-cuoi-dep-10.jpeg',
            'danhmucvay-xoe-bong-cong-chua-chup-anh-cuoi-dep-tuy-hoa-phu-yen-cho-nang-1.jpg',
            'danhmuc/AD8c4Udxay5dEResDlK1NCCDHHJjprdcjQxi8OnP.jpg',
            'danhmuc/My-Muse-Felix-3.jpg',
            'danhmuc/Nicole-Bridal-Váy-cưới-dính-dá-hình-12.jpg',
            'danhmuc/TD7azB16e4ddpM4VN1bmPfqbJryVaLCRMbLRksNH.jpg',
            'danhmuc/vay-cuoi-dep__1__af6c8a39b2524344bd0f9b67c2f98c06.jpg',
            'danhmuc/vay-cuoi-dep-6.png',
        ];

        $idDanhMuc = DanhMuc::pluck('id');

        for ($i = 0; $i < 16; $i++) {
            SanPham::create([
                'danh_muc_id' => $idDanhMuc->random(),
                'ma_san_pham' => 'PROD-' . Str::random(8),
                'ten_san_pham' => $tenSanPham[$i],
                'gia_san_pham' => rand(500000, 2000000),
                'image_path' =>  $hinhAnh[$i],
                'mo_ta_san_pham' => $moTa[$i],
                'so_luong' => rand(10, 20),
                'khuyen_mai' => null,
                'trang_thai' => rand(0, 1),
                'is_hot' => rand(0, 1),
                'is_new' => rand(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
}
}
