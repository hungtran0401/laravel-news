@extends('master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Cate</h1>
                        
                    </div>
                </div> 
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $err)
                                        <li>{!! $err !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="{!! Csrf_Token() !!}">
                            <div class="form-group">
                                <label>Category Parent</label>
                                
                                <select class="form-control" name="cate">
                                    
                                    <?php 
                                        if($data['parent_id'] == 0)
                                        {
                                            echo "<option value='0'>Cate Root</option>";
                                        }else{
                                            cate_parent($parents,0,"--",$data['parent_id'] );
                                        }
                                    ?>
                                    
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="txtCateName" value="{!!$data['Ten']!!}" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Category Order</label>
                                <input class="form-control" name="txtOrder" value="{!!$data['cate_order']!!}" placeholder="Please Enter Category Order" />
                            </div>
                            <div class="form-group">
                                <label>Category Keywords</label>
                                <input class="form-control"  name="txtKey" value="{!!$data['cate_keywords']!!}" placeholder="Please Enter Category Keywords" />
                            </div>
                            <div class="form-group">
                                <label>Category Description</label>
                                <textarea class="form-control" name="txtDes"  rows="3">{!!$data['cate_des']!!}</textarea>
                            </div>
                            <!-- <div class="form-group">
                                <label>Category Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Invisible
                                </label>
                            </div> -->
                            <button type="submit" class="btn btn-default">Category Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
        </div>
                <!-- /.row -->
    </div>
             <!-- /.container-fluid -->
</div>
@stop
