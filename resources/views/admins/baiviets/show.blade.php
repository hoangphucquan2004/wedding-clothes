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
                            <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1 mb-3"> <a
                                            href="{{ route('admin.sanphams.index') }}" class="btn btn-primary">Quay lại</a>
                                    </h4>
                                    <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">Trường</th>
                                                <th>Dữ liệu</th>
                                            <tr>
                                                <td>Mã sản phẩm</td>
                                                <td>{{ $sanPham->ma_san_pham }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tên sản phẩm</td>
                                                <td>{{ $sanPham->ten_san_pham }}</td>
                                            </tr>
                                            <tr>
                                                <td>Danh mục</td>
                                                <td>{{ $sanPham->danhMuc->ten_danh_muc }}</td>
                                            </tr>
                                            <tr>
                                                <td>Giá sản phẩm</td>
                                                <td>{{ $sanPham->gia_san_pham }}</td>
                                            </tr>
                                            <tr>
                                                <td>Giá khuyến mãi</td>
                                                <td>
                                                    @if ($sanPham->gia_khuyen_mai)
                                                        {{ $sanPham->gia_khuyen_mai }}
                                                    @else
                                                        Sản phẩm không có giá khuyến mãi☹️☹️☹️
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ảnh sản phẩm</td>
                                                <td>
                                                    @if ($sanPham->image_path)
                                                        <img src="{{ Storage::url($sanPham->image_path) }}"
                                                            alt="Ảnh sản phẩm" width="200px" height="150px">
                                                    @else
                                                        Ảnh sản phẩm đang trống☹️☹️☹️
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Số lượng</td>
                                                <td>{{ $sanPham->so_luong }}</td>
                                            </tr>
                                            <tr>
                                                <td>Trạng thái</td>
                                                <td>
                                                    @if ($sanPham->so_luong)
                                                        <span class="badge bg-success">Trạng thái hiện</span>
                                                    @else
                                                        <span class="badge bg-danger">Trạng thái ẩn</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Hot</td>
                                                <td>
                                                    @if ($sanPham->is_hot)
                                                        <span class="badge bg-success">Trạng thái hot</span>
                                                    @else
                                                        <span class="badge bg-danger">Trạng thái bình thường</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>New</td>
                                                <td>
                                                    @if ($sanPham->is_hot)
                                                        <span class="badge bg-success">Trạng thái mới</span>
                                                    @else
                                                        <span class="badge bg-danger">Trạng thái bình thường</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mô tả ngắn</td>
                                                <td>
                                                    @if ($sanPham->mo_ta)
                                                        {{ $sanPham->mo_ta }}
                                                    @else
                                                        Sản phẩm không có mô tả☹️☹️☹️
                                                    @endif
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
