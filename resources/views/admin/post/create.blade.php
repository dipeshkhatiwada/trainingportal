@extends('admin.layouts.app')
@section('seo')
    <title>POst Create | Newsportal</title>
@endsection
@section('css')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        POst Create
                        <a href="{{route('admin.post.index')}}" class="btn btn-primary">View All</a>

                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Post create</li>
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
                            <h3 class="card-title">POst Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.post.store')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Category</label>
                                    <select name="category_id" class="form-control select2"  id="category">
                                        <option> Select Category</option>
                                        @foreach($data['category'] as $id=>$title)
                                        <option value="{{$id}}">{{$title}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('category_id'))
                                        <label class="text text-danger">{{$errors->first('category_id')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="subcategory">Sub Category</label>
                                    <select name="subcategory_id" class="form-control"  id="subcategory">
                                        <option> Select SUbCategory</option>
                                    </select>
                                    @if($errors->has('category_id'))
                                        <label class="text text-danger">{{$errors->first('category_id')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="tag">Tags</label><br/>
                                        @foreach($data['tag'] as $id=>$title)
                                            <input type="checkbox" name="tag_id[]" value="{{$id}}"> {{$title}}
                                        @endforeach
                                    @if($errors->has('tag'))
                                        <label class="text text-danger">{{$errors->first('tag')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="title" placeholder="Enter title">
                                    @if($errors->has('title'))
                                        <label class="text text-danger">{{$errors->first('title')}}</label>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputRank">Rank</label>
                                    <input type="number" class="form-control" id="exampleInputRank" name="rank" placeholder="Enter rank">
                                    @if($errors->has('rank'))
                                        <label class="text text-danger">{{$errors->first('rank')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="photo">Image</label>
                                    <input type="file" class="form-control" id="photo" name="photo">
                                    @if($errors->has('photo'))
                                        <label class="text text-danger">{{$errors->first('photo')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputRank">Description</label>
                                    <textarea name="description" id="description" class="form-control" ></textarea>
                                    @if($errors->has('description'))
                                        <label class="text text-danger">{{$errors->first('description')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputRank">status</label>
                                    <input type="radio" name="status" value="1"> Active
                                    <input type="radio" name="status" value="0" checked> Deactive

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
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <!-- Select2 -->
    <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        CKEDITOR.replace( 'description',{
            allowedContent,
            filebrowserUploadUrl: "{{route('admin.ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        } );
    </script>
    <script>
        $(document).ready(function () {
            $('#category').change(function () {
                var cat_id = $(this).val();
                var url = "{{route('admin.subcategory.get_by_category_id')}}";
                var csrf_token = "{{ csrf_token() }}"

                $.ajax({
                    url:url,
                    data:{category_id:cat_id,_token:csrf_token},
                    method:'post',
                    success:function (response){
                        $('#subcategory').empty();
                        $('#subcategory').append(response);
                        // console.log(response);

                    }

                });

            });

        });
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2();
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
        });
    </script>
@endsection

