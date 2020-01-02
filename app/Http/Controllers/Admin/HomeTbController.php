<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\home;

class HomeTbController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function index()
    {
        $homes = Home::get();
        return view('admin/tb_home', compact('homes'));
    }
    public function hapus($id)
    {
        Home::where('home_id',$id)->delete();
        return back();
    }
}
