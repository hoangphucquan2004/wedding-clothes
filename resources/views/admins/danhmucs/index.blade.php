@extends('layouts.admin')

@section('content')
<style>
    .page-title-box {
        background-color: #f4f6f9;
        padding: 15px;
        border-radius: 8px;
    }

    .breadcrumb {
        background-color: transparent;
    }

    .card {
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        border: none;
        border-radius: 8px;
    }

    .table {
        margin-top: 20px;
    }

    .table thead th {
        background-color: #e9ecef;
        font-weight: bold;
        color: #333;
        text-align: center;
    }

    .table tbody tr td {
        text-align: center;
        vertical-align: middle;
    }

    .table-responsive {
        overflow-x: auto;
    }

    .btn-link {
        color: #333;
    }

    .btn-link i {
        transition: color 0.2s;
    }

    .btn-link:hover i {
        color: #0d6efd;
    }

    /* Badge color for status */
    .badge-status {
        padding: 5px 10px;
        border-radius: 8px;
        font-size: 0.85em;
        font-weight: bold;
    }

    .badge-status.chua-lien-he {
        background-color: #f8d7da;
        color: #721c24;
    }

    .badge-status.dang-lien-he {
        background-color: #fff3cd;
        color: #856404;
    }

    .badge-status.hoan-thanh {
        background-color: #d4edda;
        color: #155724;
    }
</style>
    <div class="row">
        <div class="col">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Danh mục</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Danh mục</a>
                            </li>
                            <li class="breadcrumb-item active">Danh sách danh mục</li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="h-100">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1"> <a href="{{ route('admin.danhmucs.create') }}"
                                        class="btn btn-primary">+ Thêm
                                        danh mục</a></h4>
                                <div class="flex-shrink-0">
                                    <div class="form-check form-switch form-switch-right form-switch-md">
                                        <label for="card-tables-showcode" class="form-label text-muted">Show Code</label>
                                        <input class="form-check-input code-switcher" type="checkbox"
                                            id="card-tables-showcode">
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">


                                <div class="live-preview">
                                    <div class="table-responsive table-card">
                                        <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">Tên danh mục</th>
                                                    <th scope="col">Hình ảnh</th>
                                                    <th scope="col">Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($listDanhMuc as $danhMuc)
                                                    <tr>
                                                        <td>{{ $danhMuc->id }}</td>
                                                        <td>{{ $danhMuc->ten_danh_muc }}</td>
                                                        <td>
                                                            @if ($danhMuc->anh_danh_muc)
                                                                <img src="{{ Storage::url($danhMuc->anh_danh_muc) }}"
                                                                    alt="Ảnh danh mục" width="120px" height="100px">
                                                            @else
                                                                Ảnh danh mục đang trống☹️☹️☹️
                                                            @endif
                                                        </td>
                                                        <td class="d-flex align-items-center justify-content-between" style="height: 124.89px;">
                                                            <a href="{{ route('admin.danhmucs.show', $danhMuc->id) }}" class="btn btn-sm btn-outline-primary mx-1">
                                                                <i class="ri-eye-line fs-5"></i>
                                                            </a>
                                                            <a href="{{ route('admin.danhmucs.edit', $danhMuc->id) }}" class="btn btn-sm btn-outline-secondary mx-1">
                                                                <i class="ri-edit-2-line fs-5"></i>
                                                            </a>
                                                            <form action="{{ route('admin.danhmucs.destroy', $danhMuc->id) }}" method="POST" class="d-inline-block mx-1">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                                        onclick="return confirm('Bạn có chắc chắn xóa danh mục này không?')">
                                                                    <i class="ri-delete-bin-line fs-5"></i>
                                                                </button>
                                                            </form>
                                                        </td>

                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="d-none code-view">
                                    <pre class="language-markup" style="height: 275px;"><code>&lt;div class=&quot;table-responsive table-card&quot;&gt;
&lt;table class=&quot;table table-nowrap table-striped-columns mb-0&quot;&gt;
&lt;thead class=&quot;table-light&quot;&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;
            &lt;div class=&quot;form-check&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;cardtableCheck&quot;&gt;
                &lt;label class=&quot;form-check-label&quot; for=&quot;cardtableCheck&quot;&gt;&lt;/label&gt;
            &lt;/div&gt;
        &lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Id&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Date&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Total&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Status&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Action&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;td&gt;
            &lt;div class=&quot;form-check&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;cardtableCheck01&quot;&gt;
                &lt;label class=&quot;form-check-label&quot; for=&quot;cardtableCheck01&quot;&gt;&lt;/label&gt;
            &lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;&lt;a href=&quot;#&quot; class=&quot;fw-semibold&quot;&gt;#VL2110&lt;/a&gt;&lt;/td&gt;
        &lt;td&gt;William Elmore&lt;/td&gt;
        &lt;td&gt;07 Oct, 2021&lt;/td&gt;
        &lt;td&gt;$24.05&lt;/td&gt;
        &lt;td&gt;&lt;span class=&quot;badge bg-success&quot;&gt;Paid&lt;/span&gt;&lt;/td&gt;
        &lt;td&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light&quot;&gt;Details&lt;/button&gt;
        &lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;
            &lt;div class=&quot;form-check&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;cardtableCheck02&quot;&gt;
                &lt;label class=&quot;form-check-label&quot; for=&quot;cardtableCheck02&quot;&gt;&lt;/label&gt;
            &lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;&lt;a href=&quot;#&quot; class=&quot;fw-semibold&quot;&gt;#VL2109&lt;/a&gt;&lt;/td&gt;
        &lt;td&gt;Georgie Winters&lt;/td&gt;
        &lt;td&gt;07 Oct, 2021&lt;/td&gt;
        &lt;td&gt;$26.15&lt;/td&gt;
        &lt;td&gt;&lt;span class=&quot;badge bg-success&quot;&gt;Paid&lt;/span&gt;&lt;/td&gt;
        &lt;td&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light&quot;&gt;Details&lt;/button&gt;
        &lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;
            &lt;div class=&quot;form-check&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;cardtableCheck03&quot;&gt;
                &lt;label class=&quot;form-check-label&quot; for=&quot;cardtableCheck03&quot;&gt;&lt;/label&gt;
            &lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;&lt;a href=&quot;#&quot; class=&quot;fw-semibold&quot;&gt;#VL2108&lt;/a&gt;&lt;/td&gt;
        &lt;td&gt;Whitney Meier&lt;/td&gt;
        &lt;td&gt;06 Oct, 2021&lt;/td&gt;
        &lt;td&gt;$21.25&lt;/td&gt;
        &lt;td&gt;&lt;span class=&quot;badge bg-danger&quot;&gt;Refund&lt;/span&gt;&lt;/td&gt;
        &lt;td&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light&quot;&gt;Details&lt;/button&gt;
        &lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;
            &lt;div class=&quot;form-check&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;cardtableCheck04&quot;&gt;
                &lt;label class=&quot;form-check-label&quot; for=&quot;cardtableCheck04&quot;&gt;&lt;/label&gt;
            &lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;&lt;a href=&quot;#&quot; class=&quot;fw-semibold&quot;&gt;#VL2107&lt;/a&gt;&lt;/td&gt;
        &lt;td&gt;Justin Maier&lt;/td&gt;
        &lt;td&gt;05 Oct, 2021&lt;/td&gt;
        &lt;td&gt;$25.03&lt;/td&gt;
        &lt;td&gt;&lt;span class=&quot;badge bg-success&quot;&gt;Paid&lt;/span&gt;&lt;/td&gt;
        &lt;td&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light&quot;&gt;Details&lt;/button&gt;
        &lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>
            </div>

        </div>

    </div>
@endsection
