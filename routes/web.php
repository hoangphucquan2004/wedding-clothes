<?php

use App\Http\Controllers\Admin\BaiVietController;
use App\Http\Controllers\Admin\DanhMucBaiVietController;
use App\Http\Controllers\Admin\DanhMucController;
use App\Http\Controllers\Admin\SanPhamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.client');
});



Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('/', function () {

        return view('admins.dashboard.index');
    });
    Route::resource('danhmucs', DanhMucController::class);
    Route::resource('sanphams', SanPhamController::class);
    Route::resource('danhmuc_baiviets', DanhMucBaiVietController::class);
    Route::resource('baiviets', BaiVietController::class);
});
