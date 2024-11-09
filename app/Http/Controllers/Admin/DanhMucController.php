<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreDanhMucRequest;
use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listDanhMuc = DanhMuc::query()->paginate(5);

        return view('admins\danhmucs\index', compact('listDanhMuc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins\danhmucs\create',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDanhMucRequest $request)
    {
        if ($request->isMethod('POST')) {

            $params = $request->except('_token');

            if ($request->hasFile('anh_danh_muc')) {

                $params['anh_danh_muc'] = $request->file('anh_danh_muc')->store('danhmuc', 'public');
            } else {
                $params['anh_danh_muc'] = null;
            }
        }

        DanhMuc::create($params);

        return redirect()->route('admin.danhmucs.index')->with('success', 'Thêm danh mục thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $danhMuc = DanhMuc::findOrFail($id);

        return view('admins\danhmucs\show', compact('danhMuc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $danhMuc = DanhMuc::findOrFail($id);

        return view('admins\danhmucs\edit', compact('danhMuc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->isMethod('PUT')) {

            $params = $request->except('_token', '_method');

            $danhMuc = DanhMuc::findOrFail($id);

            if ($request->hasFile('anh_danh_muc')) {

                if ($danhMuc->anh_danh_muc && Storage::disk('public')->exists($danhMuc->anh_danh_muc)) {

                    Storage::disk('public')->delete($danhMuc->anh_danh_muc);
                }

                $params['anh_danh_muc'] = $request->file('anh_danh_muc')->store('danhmuc', 'public');
            } else {
                $params['anh_danh_muc'] = $danhMuc->anh_danh_muc;
            }

            $danhMuc->update($params);
        }

        return redirect()->route('admin.danhmucs.index')->with('success', 'Cập nhật mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $danhMuc = DanhMuc::findOrFail($id);

        $anhDanhMuc = $danhMuc->anh_danh_muc;

        if ($anhDanhMuc) {

            Storage::delete('public/' . $anhDanhMuc);
        }

        $danhMuc->delete();

        return redirect()->route('admin.danhmucs.index')->with('success', 'Xóa danh mục thành công');
    }
}
