<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBaiVietRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255', 'unique:bai_viets,title'],
            'slug' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:2000'],
            'excerpt' => ['required', 'string', 'max:1000'],
            'thumbnail' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'danh_muc_bai_viet_id' => ['required', 'exists:danh_muc_bai_viets,id']
        ];
    }
    public function messages(): array
    {
        return [
            'title.required'=>'Trường Tên Bài Viết Không Được Bỏ Trống',
            'title.string'=>'Trường Tên Bài Viết Phải Là Chuỗi Ký Tự',
            'title.max'=>'Trường Tên Bài Viết Không Vược Quá 255 ký tự',
            'title.unique' => 'Tên Bài Viết Đã Tồn Tại',

            'slug.required'=>'Trường Đường Dẫn Bài Viết Không Được Bỏ Trống',
            'slug.string'=>'Trường Đường Dẫn Bài Viết Phải Là Số Nguyên',
            'slug.max'=>'Trường Đường Dẫn Bài Viết Không Được > 100',

            'content.required'=>'Trường Nội Dung Bài Bài Viết Không Được Bỏ Trống',
            'content.string'=>'Trường Nội Dung Bài Bài Viết Phải Là Số Nguyên',
            'content.max'=>'Trường Nội Dung Bài Bài Viết Không Được > 2000',

            'excerpt.required'=>'Trường Tóm Tắt Bài Viết Không Được Bỏ Trống',
            'excerpt.string'=>'Trường Tóm Tắt Bài Viết Phải Là Chuỗi',
            'excerpt.max'=>'Trường Tóm Tắt Bài Viết Không Được > 1000 Ký Tự ',

            'thumbnail.required'=>'Trường Ảnh Chưa Chọn',
            'thumbnail.image'=>'Trường Ảnh Phải Bắt Buộc Là Ảnh',
            'thumbnail.mimes'=>'Tường Ảnh Bắt Buộc Phải Là Dường Dẫn .igf, png, jpeg',
            'thumbnail.max'=>'Tường Ảnh Không Quá 2048kb',

            'danh_muc_bai_viet_id.required'=>'Trường Danh Mục Không Được Bỏ Trống',
            'danh_muc_bai_viet_id.exists'=>'Trường Danh Mục Phải Chọn',
        ];
    }
}
