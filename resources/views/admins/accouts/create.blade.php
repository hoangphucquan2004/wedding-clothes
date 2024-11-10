@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Bài Viết</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bài Viết</a>
                            </li>
                            <li class="breadcrumb-item active">Thêm mới Bài Viết</li>
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
                                    <form action="{{ route('admin.baiviets.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Tiêu Đề</label>
                                            <input type="text" name="title" class="form-control"
                                                value="{{ old('title') }}" placeholder="Nhập tên sản phẩm">
                                            @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Danh mục Bài Viết</label>
                                            <select name="danh_muc__bai_viet_id" id="danh_muc__bai_viet_id"
                                                class="form-control">
                                                <option value="">Tùy Chọn</option>
                                                @foreach ($danhSachDanhMuc as $danhMuc)
                                                    <option value="{{ $danhMuc->id }}"
                                                        {{ old('danh_muc__bai_viet_id') == $danhMuc->id ? 'selected' : '' }}>
                                                        {{ $danhMuc->ten_danh_muc }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('danh_muc__bai_viet_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="employeeName" class="form-label">Đường Dẫn Đẹp</label>
                                            <input type="text" name="slug" class="form-control" id="employeeName" value="{{ old('slug') }}"
                                                placeholder="Nhập tên danh mục bài Viết">
                                            @error('slug')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="employeeUrl" class="form-label">Hình ảnh</label>
                                            <input type="file" name="thumbnail" class="form-control" value="value="{{ old('thumbnail') }}"">
                                            @error('thumbnail')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Trạng thái:</label>
                                            <select class="form-control" name="status" id="" value="{{ old('status') }}">
                                                <option value="">Tùy Chọn</option>
                                                <option value="Nháp">Nháp</option>
                                                <option value="Đã Xuất Bản">Đã Xuất Bản</option>
                                                <option value="Đã Lưu Trữ">Đã Lưu Trữ</option>
                                            </select>
                                            @error('status')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nội Dung Bài Viết</label>
                                            <textarea name="content" id="content" class="form-control" cols="30" rows="10" value="{{ old('content') }}"></textarea>
                                            @error('content')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tóm Tắt Bài Viết</label>
                                            <textarea name="excerpt" id="excerpt" class="form-control" cols="30" rows="10" value="{{ old('excerpt') }}"></textarea>
                                            @error('excerpt')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Thêm mới</button>
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
            <script>
                // Hàm tạo slug
                function generateSlug(text) {
                    return text.toString().toLowerCase()
                        .normalize('NFD') // Chuẩn hóa chuỗi để loại bỏ dấu
                        .replace(/[\u0300-\u036f]/g, '') // Loại bỏ các ký tự đặc biệt
                        .replace(/\s+/g, '-') // Thay khoảng trắng bằng dấu gạch ngang
                        .replace(/[^\w\-]+/g, '') // Loại bỏ các ký tự không phải chữ
                        .replace(/\-\-+/g, '-') // Loại bỏ các dấu gạch ngang kép
                        .replace(/^-+/, '') // Loại bỏ dấu gạch ngang ở đầu
                        .replace(/-+$/, ''); // Loại bỏ dấu gạch ngang ở cuối
                }

                // Sự kiện cập nhật slug khi tiêu đề thay đổi
                document.getElementById('title').addEventListener('input', function() {
                    var title = this.value;
                    var slug = generateSlug(title);
                    document.getElementById('slug').value = slug;
                });
            </script>
        @endsection
