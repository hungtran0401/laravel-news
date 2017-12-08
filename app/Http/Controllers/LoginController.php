<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
    	return view('dangnhap');
    }

    public function postLogin(Request $request)
    {
    	if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    	{
    		return redirect('admin/userlist');
    	}
    	else
    	{
    		return redirect('login');
    	}
    }
}
