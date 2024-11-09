<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function showFormLogin()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $user = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'mat_khau' => ['required', 'integer']
        ]);
        $user = $request->only('name', 'mat_khau');
        // dd($user);
        // Đổi tên 'mat_khau' thành 'password' tạm thời cho Auth::attempt()
        $user['password'] = $user['mat_khau'];
        unset($user['mat_khau']); // Xóa 'mat_khau' vì Auth::attempt() không nhận diện được

        if (Auth::attempt($user)) {
            return redirect()->intended('/');
        }
        return redirect()->back()->withErrors([
            'name' => 'Thông tin người dùng không đúng'
        ]);
    }
    public function showFormRegister()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'string', 'email', 'max:100'],
            'name' => ['required', 'string', 'max:100'],
            'mat_khau' => ['required', 'string', 'min:5']
        ]);
        $data['mat_khau'] = Hash::make($data['mat_khau']);
        $user = User::query()->create($data);
        Auth::login($user);
        return redirect()->intended('/');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
