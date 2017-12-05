@extends('master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List Cate</h1>
                        @include('sessison')
                    </div>
                </div> 
                <!-- /.col-lg-12 -->
<button><a href="themcate">Them Cate</a></button>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category Parent</th>
                                <th>Delete</th>
                                <th>Edit</th>


                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $Stt=1; ?>
                         @foreach($kq as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{!! $item['id']!!}</td>
                                <td>{!! $item['Ten']!!}</td>
                                <td>
                                <?php
                                if($item['parent_id'] == 0)
                                {
                                    echo 'Root catalogue';
                                }
                                else
                                {
                                    $data1 = App\theloai::where('id',$item['parent_id']) -> first();
                                    echo $data1['Ten'];
                                }
                                ?>

                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Ban co muon xoa');" href="{!! URL::route('catedelete',$item['id'] )!!}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('cateedit',$item['id'] )!!}">Edit</a></td>
                        
                        @endforeach    
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

@stop
