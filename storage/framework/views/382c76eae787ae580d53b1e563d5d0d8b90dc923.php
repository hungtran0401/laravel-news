<?php $__env->startSection('content'); ?>
<button><a href="themcate">Them Cate</a></button>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Stt</th>
                                <th>TieuDe</th>
                                <th> TomTat</th>
                                <th> NoiBat</th>
                                <th>Delete</th>
                                <th>Edit</th>


                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $Stt=1; ?>
                        <?php $__currentLoopData = $kq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $Stt++; ?></td>
                                <td><?php echo $item['TieuDe']; ?>

                                </br>
                                    <img src="<?php echo e(url('public/images/s.jpg')); ?>" height="100px">
                                </td>
                                <td><?php echo $item['TomTat']; ?></td>
                                <td><?php if($item['NoiBat'] == 0){
                                    echo "khong";
                                }else{
                                    echo "co";
                                }
                                ?>
                                      
                                    
                                    
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Ban co muon xoa');" href="<?php echo URL::route('newdelete',$item['id'] ); ?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo URL::route('cateedit',$item['id'] ); ?>">Edit</a></td>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>

</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('cate.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>