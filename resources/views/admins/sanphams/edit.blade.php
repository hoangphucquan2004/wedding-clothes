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
                                    <form action="{{ route('admin.sanphams.update', $sanPham) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Mã sản phẩm</label>
                                            <input type="text" name="ma_san_pham" class="form-control"
                                                placeholder="Nhập tên danh mục" value="{{ $sanPham->ma_san_pham }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tên sản phẩm</label>
                                            <input type="text" name="ten_san_pham" class="form-control"
                                                placeholder="Nhập tên sản phẩm" value="{{ $sanPham->ten_san_pham }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Danh mục</label>
                                            <select name="danh_muc_id" id="danh_muc_id" class="form-control">
                                                @foreach ($danhSachDanhMuc as $danhMuc)
                                                    <option value="{{ $danhMuc->id }}"
                                                        {{ $sanPham->danh_muc_id == $danhMuc->id ? 'selected' : '' }}>
                                                        {{ $danhMuc->ten_danh_muc }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Giá sản phẩm</label>
                                            <input type="text" name="gia_san_pham" class="form-control"
                                                placeholder="Nhập giá sản phẩm" value="{{ $sanPham->gia_san_pham }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Giá khuyến mãi</label>
                                            <input type="text" name="khuyen_mai" class="form-control"
                                                placeholder="Nhập giá khuyến mãi" value="{{ $sanPham->khuyen_mai }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Số lượng</label>
                                            <input type="text" name="so_luong" class="form-control"
                                                placeholder="Nhập số lượng sản phẩm" value="{{ $sanPham->so_luong }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="employeeUrl" class="form-label">Hình ảnh</label>
                                            <input type="file" name="image_path" class="form-control">
                                            @if ($sanPham->image_path)
                                                <img src="{{ Storage::url($sanPham->image_path) }}" alt="Ảnh sản phẩm"
                                                    width="120" height="100px">
                                            @else
                                                Không có ảnh sản phẩm☹️☹️☹️
                                            @endif
                                        </div>
                                        <label for="danh_muc_id" class="form-label">Tùy chỉnh khác</label>
                                        <div class="form-check form-switch mb-2 ps-3 d-flex justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input bg-danger" type="checkbox" id="is_new"
                                                    name="is_new" value="1"
                                                    {{ $sanPham->is_new == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="is_new">New</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input bg-secondary" type="checkbox" id="is_hot"
                                                    name="is_hot" value="1"
                                                    {{ $sanPham->is_hot == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="is_hot">Hot</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input bg-warning" type="checkbox" id="is_hot_deal"
                                                    name="trang_thai" value="1"
                                                    {{ $sanPham->trang_thai == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="trang_thai">Trạng thái</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Mô tả sản phẩm</label>
                                            <textarea name="mo_ta_san_pham" id="mo_ta_san_pham" class="form-control" cols="30" rows="10"> {{ $sanPham->mo_ta }}</textarea>
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Cập nhật</button>
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
