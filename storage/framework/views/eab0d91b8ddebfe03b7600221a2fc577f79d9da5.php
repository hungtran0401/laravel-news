<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add News</h1>
                        
                    </div>
                </div> 
                <!-- /.col-lg-12 -->

                    
                    <div class="col-lg-12" style="padding-bottom:120px">
                        <!-- <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo $err; ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?> -->
                        <form action="" method="POST" >
                            <input type="hidden" name="_token" value="<?php echo Csrf_Token(); ?>">
                            <div class="form-group">
                                <label>The Loai </label>
                                <select class="form-control" name="theloai" id ="theloai">
                                    
                                    <?php  cate_parent($theloai);  ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Loai Tin</label>
                                <select class="form-control" name="loaitin" id ="loaitin">
                                    
                                    
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tieu De</label>
                                <input class="form-control" name="tieude"  />
                            </div>

                            <div class="form-group">
                                <label>Tom Tat</label>
                                <textarea class="form-control ckeditor" rows="2" name="tomtat"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Noi Dung</label>
                                <textarea class="form-control ckeditor" rows="3" name="noidung"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Hinh</label>
                                <input type="file" name="hinh">
                            </div>

                            <div class="form-group">
                                <label>Noi Bat</label>
                                <label class="radio-inline">
                                    <input name="noibat" value="1" checked="" type="radio">Co
                                </label>
                                <label class="radio-inline">
                                    <input name="noibat" value="2" type="radio">Khong
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default"> Add News</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
        </div>
                <!-- /.row -->
    </div>
             <!-- /.container-fluid -->
</div>

    <?php $__env->startSection('scriptadd'); ?>
        <script>
            $(document).ready(function() {
                $("#theloai").change(function(){
                    var idtheloai = $(this).val();
                    $.get("http://localhost/Pen/ajax/"+idtheloai,function(data){
                        $("#loaitin").html(data); 
                    });
                });
            });



        </script>
    <?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>               

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>