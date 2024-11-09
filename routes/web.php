<?php

use App\Http\Controllers\Admin\BaiVietController;
use App\Http\Controllers\Admin\DanhMucBaiVietController;
use App\Http\Controllers\Admin\DanhMucController;
use App\Http\Controllers\Admin\LienHeController;
use App\Http\Controllers\Admin\SanPhamController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckRoleAdminMiddleware;
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
Route::get('login', [AuthController::class, 'showFormLogin']);
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('register', [AuthController::class, 'showFormRegister']);
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('layouts.client');
})->middleware('auth');



Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('/', function () {

        return view('admins.dashboard.index');
    })->middleware(['auth', 'auth.admin']);
    Route::resource('danhmucs', DanhMucController::class);
    Route::resource('sanphams', SanPhamController::class);
    Route::resource('danhmuc_baiviets', DanhMucBaiVietController::class);
    Route::resource('baiviets', BaiVietController::class);
    Route::resource('lienhes', LienHeController::class);
});
