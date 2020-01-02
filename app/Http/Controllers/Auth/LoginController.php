<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Session;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('Auth/login');
    }

    public function proses_login()
    {
        if (Session::get('logged')==false) 
        {
            $ses = User::where('username', request('username'))->where('password', request('password'))->first();
            if ($ses) 
            {
                Session::put([
                    'user_id' => $ses->user_id,
                    'full_name' => $ses->full_name,
                    'username' => $ses->username,
                    'home_id' => $ses->home_id,
                    'level_id' => $ses->level_id,
                    'logged' => true
                ]);
                $dt['status']=1;
                if (Session::get('level_id')==1) 
                {
                    $dt['level_id']=1;
                } 
                else if(Session::get('level_id')==2)
                {
                    $dt['level_id']=2;
                }
                else 
                {
                    $dt['level_id']=3;
                }
                echo json_encode($dt);
            } 
            else 
            {
                $dt['status'] = 0;
                echo json_encode($dt);
            }
        } 
        else 
        {
            $dt['status'] = 2;
            echo json_encode($dt);
        }
        
        
    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect('login');
    }
}
