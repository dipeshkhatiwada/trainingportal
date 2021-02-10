@extends('admin.layouts.app')
@section('seo')
    <title>POst Edit | Newsportal</title>
@endsection
@section('css')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        POst Edit
                        <a href="{{route('admin.post.index')}}" class="btn btn-primary">View All</a>

                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Catgeoy</a></li>
                        <li class="breadcrumb-item active">Edit </li>
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
                            <h3 class="card-title">POst Edit</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.post.update',$data['post']->id)}}" enctype="multipart/form-data" method="post">
                            {{method_field('PUT')}}
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Category</label>
                                    <select name="category_id" class="form-control"  id="category">
                                        @foreach($data['category'] as $id=>$title)
                                            @if($id == $data['post']->category_id)
                                                <option value="{{$id}}" selected>{{$title}}</option>
                                            @else
                                                <option value="{{$id}}">{{$title}}</option>
                                            @endif

                                        @endforeach
                                    </select>

                                    @if($errors->has('category_id'))
                                        <label class="text text-danger">{{$errors->first('category_id')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">SubCategory</label>
                                    <select name="subcategory_id" class="form-control"  id="subcategory">
                                        @foreach($data['subcategory'] as $id=>$title)
                                            @if($id == $data['post']->subcategory_id)
                                                <option value="{{$id}}" selected>{{$title}}</option>
                                            @else
                                                <option value="{{$id}}">{{$title}}</option>
                                            @endif

                                        @endforeach
                                    </select>
                                    @if($errors->has('title'))
                                        <label class="text text-danger">{{$errors->first('title')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="tag">Tags</label><br/>
                                    @foreach($data['tag'] as $id=>$title)
                                        @if(in_array($id,$data['checked_tag']))
                                            <input type="checkbox" name="tag_id[]" value="{{$id}}" checked> {{$title}}
                                        @else
                                            <input type="checkbox" name="tag_id[]" value="{{$id}}"> {{$title}}
                                        @endif
                                    @endforeach
                                    @if($errors->has('tag'))
                                        <label class="text text-danger">{{$errors->first('tag')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="title" value="{{$data['post']->title}}" placeholder="Enter title">
                                    @if($errors->has('title'))
                                        <label class="text text-danger">{{$errors->first('title')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputRank">Rank</label>
                                    <input type="number" class="form-control" id="exampleInputRank" name="rank" value="{{$data['post']->rank}}" placeholder="Enter rank">
                                    @if($errors->has('rank'))
                                        <label class="text text-danger">{{$errors->first('rank')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="photo">Image </label><br/>
                                    <input type="file" id="photo" name="photo" data-parsley-trigger="change" >
                                    <img src="{{asset($data['post']->image)}}" id="display_photo" style="height:80px;width:100px;">
                                    @if($errors->has('photo'))
                                        <label class="text text-danger">{{$errors->first('photo')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputRank">Description</label>
                                    <textarea name="description" id="description" class="form-control" >{{$data['post']->description}}</textarea>
                                    @if($errors->has('description'))
                                        <label class="text text-danger">{{$errors->first('description')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputRank">status</label>
                                    @if($data['post']->status == 1)
                                        <input type="radio" name="status" value="1" checked> Active
                                        <input type="radio" name="status" value="0"> Deactive
                                    @else
                                        <input type="radio" name="status" value="1"> Active
                                        <input type="radio" name="status" value="0" checked> Deactive
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
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#display_photo').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#photo").change(function () {
            readURL(this);
        });
    </script>
    <script>
        CKEDITOR.replace( 'description' ,{
            allowedContent:true,
            filebrowserUploadUrl: "{{route('admin.ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
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
    </script>
@endsection

