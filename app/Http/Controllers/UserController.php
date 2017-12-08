<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function getList()
    {
    	$listuser=User::select('name','email','password','quyen')->get()->toArray();
    	return view('user.list',compact('listuser'));
    }

    public function getAdd()
    {
        return view('user.add');
    }

    public function postAdd(UserRequest $request)
    {
    	$user= new User;
        $user->name = $request->txtUser;
        $user->email = $request->txtEmail;
        $user->quyen = $request->rdoLevel;
        $user->password = bcrypt($request->txtPass);
        $user->save();
    	return redirect()->route('dsuser')->with(['thongbao'=>'Them thanh cong','canhbao'=>'success']);
    }
}
