@extends('admin.layouts.app')
@section('seo')
    <title>Post SHow | Newsportal</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        COnatct show
                        <a href="{{route('admin.contact.index')}}" class="btn btn-primary">View All</a>

                    </h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Subcategory</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
   @include('admin.layouts.message')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Post List</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Title</th>
                                    <th>value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>3.</td>
                                    <td>Email</td>
                                    <td>{{$data['contact']->email}}</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>MEssage</td>
                                    <td>{{$data['contact']->message}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        10.
                                    </td>
                                    <td>
                                    </td>
                                    <td>

                                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i></a>

                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header  bg bg-primary">
                                                        <h3 class="modal-title"> Delete Conformation</h3>
                                                        <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
                                                    </div>
                                                        <div class="modal-body">
                                                            <h3>Are You Sure want to delete this record?</h3>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="{{route('admin.contact.delete',$data['contact']->id)}}" method="contact">
                                                                @csrf
                                                                {{method_field('DELETE')}}
                                                                <button type="submit" class="btn btn-danger" name="btnCreate"> <i class="fa fa-trash"></i> Delete ! </button>

                                                            </form>


                                                    <button type="button" class="btn btn-warning" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span> Cancel ! </button>
                                                </div>
                                            </div>
                                        </div>

                                    </td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!--/.col (left) -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
@section('js')
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@endsection
