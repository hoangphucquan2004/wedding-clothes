<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\StoreSanPhamRequest;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $danhSachSanPham = SanPham::with('danhMuc')->latest('id')->paginate(5);

        return view('admins.sanphams.index', compact('danhSachSanPham'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $danhSachDanhMuc = DanhMuc::all();

        return view('admins.sanphams.create', compact('danhSachDanhMuc'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSanPhamRequest $request)
    {
        if ($request->isMethod('POST')) {

            $params = $request->except('_token');

            $params['is_new'] = $request->has('is_new') ? 1 : 0;
            $params['is_hot'] = $request->has('is_hot') ? 1 : 0;
            $params['is_hot_deal'] = $request->has('trang_thai') ? 1 : 0;

            if ($request->hasFile('image_path')) {

                $params['image_path'] = $request->file('image_path')->store('sanpham', 'public');
            } else {
                $params['image_path'] = null;
            }

            $sanPham = SanPham::query()->create($params);

            return redirect()->route('admin.sanphams.index')->with('succeess', 'Thêm sản phẩm thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sanPham = SanPham::with('danhMuc')->findOrFail($id);

        return view('admins.sanphams.show', compact('sanPham'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $danhSachDanhMuc = DanhMuc::all();

        $sanPham = SanPham::findOrFail($id);

        return view('admins.sanphams.edit', compact('sanPham', 'danhSachDanhMuc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->isMethod('PUT')) {

            $params = $request->except('_token', '_method');

            $params['is_new'] = $request->has('is_new') ? 1 : 0;
            $params['is_hot'] = $request->has('is_hot') ? 1 : 0;
            $params['trang_thai'] = $request->has('trang_thai') ? 1 : 0;


            $sanPham = SanPham::query()->findOrFail($id);

            if ($request->hasFile('image_path')) {

                if ($sanPham->image_path && Storage::disk('public')->exists($sanPham->image_path)) {

                    Storage::disk('public')->delete($sanPham->image_path);
                }

                $params['image_path'] = $request->file('image_path')->store('uploads/sanpham', 'public');
            } else {
                $params['image_path'] = $sanPham->image_path;
            }
        }
        $sanPham->update($params);

        return redirect()->route('admin.sanphams.index')->with('succeess', 'Cập nhật sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sanPham = SanPham::query()->findOrFail($id);

        if ($sanPham->image_path && Storage::disk('public')->exists($sanPham->image_path)) {

            Storage::disk('public')->delete($sanPham->image_path);
        }

        $sanPham->delete();

        return redirect()->route('admin.sanphams.index')->with('success', 'Xóa sản phẩm thành công');
    }
}
