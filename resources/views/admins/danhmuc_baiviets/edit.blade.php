@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Danh mục Bài Viết</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Danh mục Bài Viết</a>
                            </li>
                            <li class="breadcrumb-item active">Cập nhật danh mục Bài Viết</li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="h-100">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="live-preview">
                                    <form action="{{ route('admin.danhmuc_baiviets.update', $danhMuc) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="employeeName" class="form-label">Tên danh mục bài Viết</label>
                                            <input type="text" name="ten_danh_muc" class="form-control" id="employeeName" value="{{$danhMuc->ten_danh_muc }}"
                                                placeholder="Nhập tên danh mục bài Viết">
                                            @error('ten_danh_muc')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="employeeUrl" class="form-label">Hình ảnh</label>
                                            <input type="file" name="anh_danh_muc" class="form-control" id="employeeUrl">
                                            <img src="{{ Storage::url($danhMuc->anh_danh_muc) }}" alt="Hình ảnh danh mục"
                                                width="200px" height="170px" class="mt-1">
                                            @error('anh_danh_muc')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="employeeName" class="form-label">Đường Dẫn Đẹp</label>
                                            <input type="text" name="slug" class="form-control" id="employeeName" value="{{$danhMuc->slug }}"
                                                placeholder="Nhập tên danh mục bài Viết">
                                            @error('slug')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Mô tả bài viết</label>
                                            <textarea name="mo_ta_bai_viet" id="mo_ta_bai_viet" class="form-control" cols="30" rows="10">{{$danhMuc->mo_ta_bai_viet }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="employeeName" class="form-label">Thứ tự</label>
                                            <input type="number" name="thu_tu" class="form-control" id="employeeName" value="{{$danhMuc->thu_tu }}"
                                                placeholder="Nhập tên danh mục bài Viết">
                                            @error('thu_tu')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <label for="danh_muc_id" class="form-label">Tùy chỉnh khác</label>
                                        <div class="form-check form-switch mb-2 ps-3 d-flex justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input bg-warning" type="checkbox" id="is_hot_deal"
                                                    name="trang_thai" value="1"
                                                    {{ $danhMuc->trang_thai == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="trang_thai">Trạng thái</label>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="d-none code-view">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
