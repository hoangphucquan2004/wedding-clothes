<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AccoutController extends Controller
{
    //
    public function index()
    {
        $listAcc = User::query()->paginate(5);

        return view('admins\accouts\index', compact('listAcc'));
    }
}
