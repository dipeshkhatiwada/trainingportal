@extends('admin.layouts.app')
@section('seo')
    <title>Category Create | Newsportal</title>
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">
                Category Create
                <a href="{{route('admin.category.index')}}" class="btn btn-primary">View All</a>

            </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active"> Create Category</li>
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
                            <h3 class="card-title">Category Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.category.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                    @if($errors->has('title'))
                                        <label class="text text-danger">{{$errors->first('title')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug">
                                    @if($errors->has('slug'))
                                        <label class="text text-danger">{{$errors->first('slug')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputRank">Rank</label>
                                    <input type="number" class="form-control" id="exampleInputRank" name="rank" placeholder="Enter rank">
                                    @if($errors->has('rank'))
                                        <label class="text text-danger">{{$errors->first('rank')}}</label>
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
