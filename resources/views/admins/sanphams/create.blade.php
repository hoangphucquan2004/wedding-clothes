@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Sản phẩm</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Sản phẩm</a>
                            </li>
                            <li class="breadcrumb-item active">Thêm mới sản phẩm</li>
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
                                    <form action="{{ route('admin.sanphams.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Mã sản phẩm</label>
                                            <input type="text" name="ma_san_pham" class="form-control" value="{{ old('ma_san_pham') }}"
                                                placeholder="Nhập tên danh mục">
                                            @error('ma_san_pham')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tên sản phẩm</label>
                                            <input type="text" name="ten_san_pham" class="form-control" value="{{ old('ten_san_pham') }}"
                                                placeholder="Nhập tên sản phẩm">
                                            @error('ten_san_pham')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Danh mục</label>
                                            <select name="danh_muc_id" id="danh_muc_id" class="form-control">
                                                <option value="">Tùy Chọn</option>
                                                @foreach ($danhSachDanhMuc as $danhMuc)
                                                    <option value="{{ $danhMuc->id }}" {{ old('danh_muc_id') == $danhMuc->id ? 'selected' : '' }}>
                                                        {{ $danhMuc->ten_danh_muc }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('danh_muc_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Giá sản phẩm</label>
                                            <input type="text" name="gia_san_pham" class="form-control" value="{{ old('gia_san_pham') }}"
                                                placeholder="Nhập giá sản phẩm">
                                            @error('gia_san_pham')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Giá khuyến mãi</label>
                                            <input type="text" name="khuyen_mai" class="form-control" value="{{ old('khuyen_mai') }}"
                                                placeholder="Nhập giá khuyến mãi">
                                            @error('khuyen_mai')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Số lượng</label>
                                            <input type="text" name="so_luong" class="form-control" value="{{ old('so_luong') }}"
                                                placeholder="Nhập số lượng sản phẩm">
                                            @error('so_luong')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="employeeUrl" class="form-label">Hình ảnh</label>
                                            <input type="file" name="image_path" class="form-control">
                                            @error('image_path')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <label for="danh_muc_id" class="form-label">Tùy chỉnh khác</label>
                                        <div class="form-check form-switch mb-2 ps-3 d-flex justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input bg-danger" type="checkbox" id="is_new"
                                                    name="is_new" checked>
                                                <label class="form-check-label" for="is_new">New</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input bg-secondary" type="checkbox" id="is_hot"
                                                    name="is_hot" checked>
                                                <label class="form-check-label" for="is_hot">Hot</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input bg-warning" type="checkbox" id="is_hot_deal"
                                                    name="is_hot_deal" checked>
                                                <label class="form-check-label" for="trang_thai">Trạng thái</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Mô tả sản phẩm</label>
                                            <textarea name="mo_ta_san_pham" id="mo_ta_san_pham" class="form-control" cols="30" rows="10"></textarea>
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
        @endsection
