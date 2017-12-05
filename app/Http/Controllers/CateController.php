<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\theloai;

use App\Http\Requests\cateRequest;

class CateController extends Controller
{
    public function getList(){
    	$kq = theloai::select('id','Ten','parent_id')->orderby('id','desc')->get()->toArray();
    	return view('cate.list',compact('kq'));
    }

    public function getAdd(){
        $parents = theloai::select('id','Ten','parent_id')->get()->toArray();
    	return view('cate.add',compact('parents'));
    }

    public function postAdd(cateRequest $request){
    	$tl= new theloai;
    	$tl->Ten = $request->txtCateName;
    	$tl->TenKhongDau = changeTitle($request->txtCateName);
    	$tl->parent_id = $request->cate;
    	$tl->cate_order = $request->txtOrder;
    	$tl->cate_keywords = $request->txtKey;
    	$tl->cate_des = $request->txtDes;
    	$tl->save();
    	return redirect()->route('dscate')->with(['thongbao'=>'Them the loai thanh cong','canhbao'=>'success']);
    }

    public function delete($id){
        $theloai= theloai::find($id);
        $theloai->delete($id);
        return redirect()->route('dscate')->with(['thongbao'=>'Delete the loai thanh cong','canhbao'=>'success']);

    }

    public function getEdit($id){
        $parents = theloai::select('id','Ten','parent_id')->get()->toArray();
        $data = theloai::findOrFail($id)->toArray();
        return view('cate.edit',compact('data','parents'));
    }

    public function update(cateRequest $request,$id){
        $tl= theloai::find($id);
        $tl->Ten = $request->txtCateName;
        $tl->TenKhongDau = changeTitle($request->txtCateName);
        $tl->parent_id = $request->cate;
        $tl->cate_order = $request->txtOrder;
        $tl->cate_keywords = $request->txtKey;
        $tl->cate_des = $request->txtDes;
        $tl->save();
        return redirect()->route('dscate')->with(['thongbao'=>'Update the loai thanh cong','canhbao'=>'success']);
    }
}
