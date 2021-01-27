@extends('admin.layouts.app')
@section('seo')
    <title>Category Edit | Newsportal</title>
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        Category Edit
                        <a href="{{route('admin.category.index')}}" class="btn btn-primary">View All</a>

                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
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
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Category Edit</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="form-group">
                            <label for="exampleInputTitle"> Role Name</label>
                            <input type="text" class="form-control" id="exampleInputTitle" value="{{$data['role']->name}}" readonly="readonly">
                        </div>
                        <form action="{{route('admin.role.assign',$data['role']->id)}}" method="post">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputRank">Check the permission you want to allow for this role</label>
                                    <br/>
                                    @foreach($data['permission'] as $id=>$permission)
                                        @if(in_array($id,$data['perm']) > 0)
                                        <input type="checkbox" name="permission_id[]" value="{{$id}}" checked>
                                        @else
                                        <input type="checkbox" name="permission_id[]" value="{{$id}}">
                                        @endif
                                        <label>{{$permission}}</label>
                                        <br/>
                                    @endforeach
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->



                </div>
                <!--/.col (left) -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

