@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Danh mục</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Danh mục</a>
                            </li>
                            <li class="breadcrumb-item active">Chi tiết danh mục</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1 mb-3"> <a href="{{ route('admin.danhmucs.index') }}"
                                            class="btn btn-primary">Quay  lại</a></h4>
                                    <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">Trường</th>
                                                <th>Dữ liệu</th>
                                                {{-- <th scope="col">Tên danh mục</th>
                                                <th scope="col">Hình ảnh</th>
                                                <th scope="col">Hành động</th> --}}
                                            </tr>
                                            <tr>
                                                <td>Tên danh mục</td>
                                                <td>{{ $danhMuc->ten_danh_muc }}</td>
                                            </tr>
                                            <tr>
                                                <td>Ảnh danh mục</td>
                                                <td>
                                                    @if ($danhMuc->anh_danh_muc)
                                                        <img src="{{ Storage::url($danhMuc->anh_danh_muc) }}"
                                                            alt="Ảnh danh mục" width="200px" height="150px">
                                                    @else
                                                        Ảnh danh mục đang trống☹️☹️☹️
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
