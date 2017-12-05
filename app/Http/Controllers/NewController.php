<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TinTuc;

use App\theloai;

use App\loaitin;

use App\Http\Requests\cateRequest;



class NewController extends Controller
{
    public function getList(){
    	$kq = tintuc::all()->toArray();
    	return view('news.list',compact('kq'));
    }

    public function delete($id){
        $tintuc= tintuc::find($id);
        $tintuc->delete($id);

        return redirect()->route('dsnew');



    }

    public function getAdd(){
        $theloai = theloai::select('id','Ten','parent_id')->get()->toArray();
    	return view('news.add',compact('theloai'));
    }

    

    public function postAdd(Request $request){
    	$tl= new TinTuc;
    	$tl->TieuDe = $request->tieude;
    	$tl->TieuDeKhongDau = changeTitle($request->tieude);
    	$tl->TomTat = $request->tomtat;
    	$tl->NoiDung = $request->noidung;
    	$tl->idLoaiTin = $request->loaitin;
        $tl->Hinh = $request->hinh;
    	$tl->save();
    	return redirect()->route('dsnew')->with(['thongbao'=>'Them tin tuc thanh cong','canhbao'=>'success']);
    }

    public function getEdit($id){
        // $tintuc = tintuc::findOrFail($id)->toArray();
        $tintuc = TinTuc::findOrFail($id)->toArray();
        $loaitin=loaitin::all()->toArray();
        $theloai=theloai::all()->toArray();
        return view('news.edit',compact('tintuc','loaitin','theloai'));
    }

    public function update(Request $request,$id){
        $tintuc = TinTuc::find($id);
        $tintuc->TieuDe = $request->txtTieuDe;
        $tintuc->TieuDeKhongDau = changeTitle($request->txtTieuDe);
        $tintuc->TomTat = $request->txtTomTat;
        $tintuc->NoiDung = $request->txtNoiDung;
        $tintuc->NoiBat = $request->rdoStatus;
        $tintuc->idLoaiTin = $request->loaitin;
        if($request->hasfile('Hinh')){
            $file = $request -> file('Hinh');
            $name= $file->getClientOriginalName();
            $file->move("public/images",$name);
            //unlink("public/admin/upload/images/tin-tuc/".$tintuc->Hinh);
            $tintuc->hinh =$name;
        }
        $tintuc ->save();
        return redirect()->route('dsnew')->with(['canhbao'=>'success','thongbao'=>'Update news thanh cong']);
    }

    public function ajax($idtheloai){
        $kq= loaitin::where('idTheLoai',$idtheloai)->get()->toArray();

        foreach($kq as $tl){
            $idloaitin=$tl['id'];
            $ten=$tl['Ten'];

            echo "<option  value='$idloaitin'>$ten</option>";
        }
            
    }
    
}
