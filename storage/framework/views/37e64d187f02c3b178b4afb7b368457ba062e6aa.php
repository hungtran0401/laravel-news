<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Bach Khoa">
    <meta name="author" content="">
    <title>Admin - Bach Khoa</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(url('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo e(url('public/admin/bower_components/metisMenu/dist/metisMenu.min.css')); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo e(url('public/admin/dist/css/sb-admin-2.css')); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo e(url('public/admin/bower_components/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="<?php echo e(url('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')); ?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo e(url('public/admin/bower_components/datatables-responsive/css/dataTables.responsive.css')); ?>" rel="stylesheet">


</head>


<body>



    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php echo $__env->make('cate.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
            <?php echo $__env->make('cate.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category</h1>
                    </div>
                </div>    <!-- /.col-lg-12 -->
                    <?php if(Session::has('thongbao')): ?>
                        <div class="alert alert-<?php echo session::get('canhbao'); ?>">
                            <?php echo session::get('thongbao'); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo e(url('public/admin/bower_components/jquery/dist/jquery.min.js')); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo e(url('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo e(url('public/admin/bower_components/metisMenu/dist/metisMenu.min.js')); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo e(url('public/admin/dist/js/sb-admin-2.js')); ?>"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo e(url('public/admin/bower_components/DataTables/media/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(url('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')); ?>"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

    <script src="<?php echo e(url('public/admin/js/ssss.js')); ?>"></script>

    <script src="<?php echo e(url('public/admin/ckeditor/ckeditor.js')); ?>"></script>

    <?php echo $__env->yieldContent('scriptadd'); ?>



    

</body>

</html>
