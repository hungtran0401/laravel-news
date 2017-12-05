<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function getList()
    {
    	$listuser=User::select('name','email','password','quyen')->get()->toArray();
    	return view('user.user_list',compact('listuser'));
    }

    public function themUser()
    {
    	
    	return view('user.user_add');
    }
}
