<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBaiVietRequest;
use App\Models\Bai_Viet;
use App\Models\Danh_muc_Bai_viet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BaiVietController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $danhSachBaiViet = Bai_Viet::with('danh_Muc_Bai_viet')->latest('id')->paginate(5);

        return view('admins.baiviets.index', compact('danhSachBaiViet'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $danhSachDanhMuc = Danh_muc_Bai_viet::all();

        return view('admins.baiviets.create', compact('danhSachDanhMuc'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBaiVietRequest $request)
    {
        //
        if ($request->isMethod('POST')) {

            $params = $request->except('_token');

            if ($request->hasFile('thumbnail')) {

                $params['thumbnail'] = $request->file('thumbnail')->store('baiviet', 'public');
            } else {
                $params['thumbnail'] = null;
            }

            $baiViet = Bai_Viet::query()->create($params);

            return redirect()->route('admin.baiviets.index')->with('succeess', 'Thêm bài viết thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $baiViet = Bai_Viet::with('danh_muc_Bai_viet')->findOrFail($id);

        return view('admins.baiviets.show', compact('baiViet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $danhSachBaiViet = Danh_muc_Bai_viet::all();

        $baiViet = Bai_Viet::findOrFail($id);

        return view('admins.baiviets.edit', compact('baiViet', 'danhSachBaiViet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if ($request->isMethod('PUT')) {

            $params = $request->except('_token', '_method');


            $baiViet = Bai_Viet::query()->findOrFail($id);

            if ($request->hasFile('thumbnail')) {

                if ($baiViet->thumbnail && Storage::disk('public')->exists($baiViet->thumbnail)) {

                    Storage::disk('public')->delete($baiViet->thumbnail);
                }

                $params['thumbnail'] = $request->file('thumbnail')->store('uploads/baiviet', 'public');
            } else {
                $params['thumbnail'] = $baiViet->thumbnail;
            }
        }
        $baiViet->update($params);

        return redirect()->route('admin.baiviets.index')->with('succeess', 'Cập nhật bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sanPham = Bai_Viet::query()->findOrFail($id);

        if ($sanPham->thumbnail && Storage::disk('public')->exists($sanPham->thumbnail)) {

            Storage::disk('public')->delete($sanPham->thumbnail);
        }

        $sanPham->delete();

        return redirect()->route('admin.baiviets.index')->with('success', 'Xóa bài viết thành công');
    }
}