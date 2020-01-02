<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function index()
    {
        $users = User::join('levels', 'users.level_id', '=', 'levels.level_id')
                    ->where('levels.level_id', 3)
                    ->get();
        return view('admin/tb_user', compact('users'));
    }
    public function hapus($id)
    {
        User::where('user_id',$id)->delete();
        return back();
    }
}
