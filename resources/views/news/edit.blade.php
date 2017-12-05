@extends('master')
@section('content')

<form action="" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{!! Csrf_Token() !!}" />
	<div class="form-group">
		<?php
		$idloaitin=$tintuc['idLoaiTin'];
		$kq=App\loaitin::where('id',$idloaitin)->first();
		$idtheloai=$kq->idTheLoai;
		?>
		<label>Chon The Loai</label>
		<select class="form-control" name="theloai" id="theloai">
			@foreach($theloai as $tl)
				<option
				@if($tl['id']==$idtheloai)
				{!!"selected"!!}
				@endif
				>
				{!!$tl['Ten']!!}
				</option>
			@endforeach

		</select>
	</div>

	<div class="form-group">
		<label>Chon Loai Tin</label>
		<select class="form-control" name="loaitin" id="loaitin">
			@foreach($loaitin as $lt)
				<option value="{{$lt['id']}}"
				@if($lt['id']==$idloaitin)
				{!!"selected"!!}
				@endif
				>
				{!!$lt['Ten']!!}
				</option>
			@endforeach
		</select>
</div>
	<div class="form-group">
		<label>Tieu De</label>
		<input value="{!!$tintuc['TieuDe']!!}" class="form-control" name="txtTieuDe" placeholder="Please Enter Title" />
	</div>

	<div class="form-group">
		<label>Noi dung Tom Tat</label>
		<textarea id="tomtat" class="form-control ckeditor" name="txtTomTat" rows="2">{!!$tintuc['TomTat']!!}</textarea>
	</div>

	<div class="form-group">
		<label>Noi dung </label>
		<textarea id="noidung" class="form-control ckeditor" name="txtNoiDung" rows="3">{!!$tintuc['NoiDung']!!}</textarea>
	</div>

	<div class="form-group">
		<label>Hinh anh </label>
		<p>
			<img src="{{url("public/admin/upload/images/tin-tuc")}}/{!!$tintuc['Hinh']!!}" width="200px" height="200px" />
		</p>
		<input type="file" name="Hinh" id="Hinh" />
	</div>

	<div class="form-group">
		<label>Noi bat</label>
		<label class="radio-inline">
			<input name="rdoStatus" value="1" @if($tintuc['NoiBat']==1) {!!"checked"!!} @endif type="radio">Co
		</label>
		<label class="radio-inline">
			<input name="rdoStatus" value="0" @if($tintuc['NoiBat']==0) {!!"checked"!!} @endif type="radio">Khong
		</label>
	</div>

	<button type="submit" class="btn btn-default">Category Add</button>
	<button type="reset" class="btn btn-default">Reset</button>
<form>

	@stop