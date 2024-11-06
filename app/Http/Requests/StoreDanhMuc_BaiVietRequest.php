<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDanhMuc_BaiVietRequest extends FormRequest
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
            'ten_danh_muc' => ['required', 'string', 'max:255', 'unique:danh_muc__bai_viets,ten_danh_muc'],
            'slug' => ['required', 'string', 'max:100'],
            'mo_ta_bai_viet' => ['required', 'string', 'max:2000'],
            'thu_tu' => ['required', 'string', 'min:1'],
            'anh_danh_muc' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'danh_muc__bai_viet_id' => ['required', 'exists:danh_muc__bai_viets,id']
        ];
    }
    public function messages(): array
    {
        return [
            'ten_danh_muc.required'=>'Trường Tên Danh Mục Bài Viết Không Được Bỏ Trống',
            'ten_danh_muc.string'=>'Trường Tên Danh Mục Bài Viết Phải Là Chuỗi Ký Tự',
            'ten_danh_muc.max'=>'Trường Tên Danh Mục Bài Viết Không Vược Quá 255 ký tự',
            'ten_danh_muc.unique' => 'Tên Danh Mục Bài Viết Đã Tồn Tại',

            'slug.required'=>'Trường Đường Dẫn Danh Mục Bài Viết Không Được Bỏ Trống',
            'slug.string'=>'Trường Đường Dẫn Danh Mục Bài Viết Phải Là Số Nguyên',
            'slug.max'=>'Trường Đường Dẫn Danh Mục Bài Viết Không Được > 100',

            'mo_ta_bai_viet.required'=>'Trường Nội Dung Bài Danh Mục Bài Viết Không Được Bỏ Trống',
            'mo_ta_bai_viet.string'=>'Trường Nội Dung Bài Danh Mục Bài Viết Phải Là Số Nguyên',
            'mo_ta_bai_viet.max'=>'Trường Nội Dung Bài Danh Mục Bài Viết Không Được > 2000',

            'thu_tu.required'=>'Trường Tóm Tắt Danh Mục Bài Viết Không Được Bỏ Trống',
            'thu_tu.string'=>'Trường Tóm Tắt Danh Mục Bài Viết Phải Là Chuỗi',
            'thu_tu.min'=>'Trường Tóm Tắt Danh Mục Bài Viết Không Được < 1 Ký Tự ',

            'anh_danh_muc.required'=>'Trường Ảnh Chưa Chọn',
            'anh_danh_muc.image'=>'Trường Ảnh Phải Bắt Buộc Là Ảnh',
            'anh_danh_muc.mimes'=>'Tường Ảnh Bắt Buộc Phải Là Dường Dẫn .igf, png, jpeg',
            'anh_danh_muc.max'=>'Tường Ảnh Không Quá 2048kb',

            'danh_muc__bai_viet_id.required'=>'Trường Danh Mục Không Được Bỏ Trống',
            'danh_muc__bai_viet_id.exists'=>'Trường Danh Mục Phải Chọn',

        ];
    }

}
