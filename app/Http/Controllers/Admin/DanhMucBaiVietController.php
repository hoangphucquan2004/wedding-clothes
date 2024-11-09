<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDanhMuc_BaiVietRequest;
use App\Models\Danh_muc_Bai_viet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DanhMucBaiVietController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listDanhMuc = Danh_muc_Bai_viet::query()->paginate(5);

        return view('admins\danhmuc_baiviets\index', compact('listDanhMuc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins\danhmuc_baiviets\create',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDanhMuc_BaiVietRequest $request)
    {
        //
        if ($request->isMethod('POST')) {

            $params = $request->except('_token');
            $params['is_hot_deal'] = $request->has('trang_thai') ? 1 : 0;
            $params['thu_tu'] = $request->input('thu_tu') ?? 0;
            if ($request->hasFile('anh_danh_muc')) {

                $params['anh_danh_muc'] = $request->file('anh_danh_muc')->store('danhmuc_baiviet', 'public');
            } else {
                $params['anh_danh_muc'] = null;
            }
        }

        Danh_muc_Bai_viet::create($params);

        return redirect()->route('admin.danhmuc_baiviets.index')->with('success', 'Thêm danh mục bài Viết thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $danhMuc = Danh_muc_Bai_viet::findOrFail($id);

        return view('admins\danhmuc_baiviets\show', compact('danhMuc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $danhMuc = Danh_muc_Bai_viet::findOrFail($id);

        return view('admins\danhmuc_baiviets\edit', compact('danhMuc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if ($request->isMethod('PUT')) {

            $params = $request->except('_token', '_method');
            $params['trang_thai'] = $request->has('trang_thai') ? 1 : 0;
            $danhMuc = Danh_muc_Bai_viet::findOrFail($id);

            if ($request->hasFile('anh_danh_muc')) {

                if ($danhMuc->anh_danh_muc && Storage::disk('public')->exists($danhMuc->anh_danh_muc)) {

                    Storage::disk('public')->delete($danhMuc->anh_danh_muc);
                }

                $params['anh_danh_muc'] = $request->file('anh_danh_muc')->store('danhmuc_baiviet', 'public');
            } else {
                $params['anh_danh_muc'] = $danhMuc->anh_danh_muc;
            }

            $danhMuc->update($params);
        }

        return redirect()->route('admin.danhmuc_baiviets.index')->with('success', 'Cập nhật mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $danhMuc = Danh_muc_Bai_viet::findOrFail($id);

            $anhDanhMuc = $danhMuc->anh_danh_muc;

            if ($anhDanhMuc) {

                Storage::delete('public/' . $anhDanhMuc);
            }

            $danhMuc->delete();

            return redirect()->route('admin.danhmuc_baiviets.index')->with('success', 'Xóa danh mục thành công');
        }
    }
}
