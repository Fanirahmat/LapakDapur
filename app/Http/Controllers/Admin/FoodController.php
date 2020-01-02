<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::join('homes','foods.home_id','=','homes.home_id')->get();
        return view('admin/tb_food', compact('foods'));
    }
    public function hapus($id)
    {
        Food::where('food_id',$id)->delete();
        return back();
    }
}
