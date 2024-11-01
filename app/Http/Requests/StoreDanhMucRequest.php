<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDanhMucRequest extends FormRequest
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
            'ten_danh_muc' => ['required', 'string', 'max:255', 'unique:danh_mucs,ten_danh_muc'],
            'anh_danh_muc' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048']
        ];
    }
    public function messages(): array
    {
        return [
            'ten_danh_muc.required'=>'Trường Tên Danh Mục Không Được Bỏ Trống',
            'ten_danh_muc.string'=>'Trường Tên Danh Mục Phải Là Chuỗi Ký Tự',
            'ten_danh_muc.max'=>'Trường Tên Danh Mục Không Vược Quá 255 ký tự',
            'ten_danh_muc.unique' => 'Tên Danh Mục Đã Tồn Tại',

            'anh_danh_muc.required'=>'Trường Ảnh Chưa Chọn',
            'anh_danh_muc.image'=>'Trường Ảnh Phải Bắt Buộc Là Ảnh',
            'anh_danh_muc.mimes'=>'Tường Ảnh Bắt Buộc Phải Là Dường Dẫn .igf, png, jpeg',
            'anh_danh_muc.max'=>'Tường Ảnh Không Quá 2048kb',
        ];
    }

}
