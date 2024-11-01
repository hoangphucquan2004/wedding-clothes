<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSanPhamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ten_san_pham' => ['required', 'string', 'max:255', 'unique:san_phams,ten_san_pham'],
            'gia_san_pham' => ['required', 'integer', 'min:1'],
            'khuyen_mai' => ['required', 'integer', 'min:1'],
            'ma_san_pham' => ['required', 'string', 'max:7'],
            'so_luong' => ['required', 'integer', 'min:1'],
            'image_path' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'danh_muc_id' => ['required', 'exists:danh_mucs,id']
        ];
    }
    public function messages(): array
    {
        return [
            'ten_san_pham.required'=>'Trường Tên Sản Phẩm Không Được Bỏ Trống',
            'ten_san_pham.string'=>'Trường Tên Sản Phẩm Phải Là Chuỗi Ký Tự',
            'ten_san_pham.max'=>'Trường Tên Sản Phẩm Không Vược Quá 255 ký tự',
            'ten_san_pham.unique' => 'Tên Sản Phẩm Đã Tồn Tại',

            'gia_san_pham.required'=>'Trường Giá Sản Phẩm Không Được Bỏ Trống',
            'gia_san_pham.integer'=>'Trường Giá Sản Phẩm Phải Là Số Nguyên',
            'gia_san_pham.min'=>'Trường Giá Sản Phẩm Không Được < 1',

            'khuyen_mai.required'=>'Trường Giá Sản Phẩm Không Được Bỏ Trống',
            'khuyen_mai.integer'=>'Trường Giá Sản Phẩm Phải Là Số Nguyên',
            'khuyen_mai.min'=>'Trường Giá Sản Phẩm Không Được < 1',

            'ma_san_pham.required'=>'Trường MÃ Sản Phẩm Không Được Bỏ Trống',
            'ma_san_pham.string'=>'Trường MÃ Sản Phẩm Phải Là Chuỗi',
            'ma_san_pham.max'=>'Trường MÃ Sản Phẩm Không Được > 7 Ký Tự ',

            'so_luong.required'=>'Trường Số Lượng Không Được Bỏ Trống',
            'so_luong.integer'=>'Trường Giá Phải Là Số Nguyên',
            'so_luong.min'=>'Trường Số Lượng Không Được Nhỏ Hơn 1',

            'image_path.required'=>'Trường Ảnh Chưa Chọn',
            'image_path.image'=>'Trường Ảnh Phải Bắt Buộc Là Ảnh',
            'image_path.mimes'=>'Tường Ảnh Bắt Buộc Phải Là Dường Dẫn .igf, png, jpeg',
            'image_path.max'=>'Tường Ảnh Không Quá 2048kb',

            'danh_muc_id.required'=>'Trường Danh Mục Không Được Bỏ Trống',
            'danh_muc_id.exists'=>'Trường Danh Mục Phải Chọn',
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->input('khuyen_mai') > $this->input('gia_san_pham')) {
                $validator->errors()->add('khuyen_mai', 'Giá khuyến mãi không được nhỏ hơn giá sản phẩm.');
            }
        });
    }
}
