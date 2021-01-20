@extends('admin.layouts.app')
@section('seo')
    <title>Setting  | Newsportal</title>
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        Setting

                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Subcyegoruy create</li>
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
                            <h3 class="card-title">SubCategory Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.setting.update',$data->id)}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">name</label>
                                    <input type="text" class="form-control" id="exampleInputname" name="name" value="{{$data->name}}" placeholder="Enter name">
                                    @if($errors->has('name'))
                                        <label class="text text-danger">{{$errors->first('name')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Facebook url</label>
                                    <input type="text" class="form-control" id="exampleInputname" name="facebook_url" value="{{$data->facebook_url}}" placeholder="Enter name">
                                    @if($errors->has('name'))
                                        <label class="text text-danger">{{$errors->first('name')}}</label>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputImage">Image</label>
                                    <input type="file" id="photo" name="photo" data-parsley-trigger="change" >
                                    <img src="{{asset($data->image)}}" id="display_photo" style="height:80px;width:100px;">
                                    @if($errors->has('photo'))
                                        <label class="text text-danger">{{$errors->first('photo')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputRank">Message</label>
                                    <textarea name="message" id="description" class="form-control" >{{$data->message}}</textarea>
                                    @if($errors->has('description'))
                                        <label class="text text-danger">{{$errors->first('description')}}</label>
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

@endsection

