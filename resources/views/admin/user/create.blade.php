@extends('admin.layouts.app')
@section('seo')
    <title>User Create | Newsportal</title>
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">
                User Create
                <a href="{{route('admin.user.index')}}" class="btn btn-primary">View All</a>

            </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active"> Create User</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->

@endsection()
@section('content')
    @include('admin.layouts.message')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">User Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.user.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                    @if($errors->has('email'))
                                        <label class="text text-danger">{{$errors->first('email')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="title">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                    @if($errors->has('password'))
                                        <label class="text text-danger">{{$errors->first('password')}}</label>
                                    @endif
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
@section('js')
    <script>
        $("#title").keyup(function(){
            var text = $(this).val();
            // This is test
            //this-is-test
            text = text.toLowerCase();
            var regExp = /\s+/g;
            text = text.replace(regExp,'-');
            $("#slug").val(text);
        });
    </script>
@endsection
