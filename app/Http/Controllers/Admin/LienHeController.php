<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LienHe;
use Illuminate\Http\Request;

class LienHeController extends Controller
{
    //
    public function index()
    {
        $listLienHe = LienHe::query()->paginate(5);

        return view('admins\lienhes\index', compact('listLienHe'));
    }
}
