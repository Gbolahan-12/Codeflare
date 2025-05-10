<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    // public function show()
    // {
    //     return view('admin.show');
    // }

    // public function edit()
    // {
    //     return view('admin.edit');
    // }

    // public function update()
    // {
    //     return view('admin.update');
    // }
}
