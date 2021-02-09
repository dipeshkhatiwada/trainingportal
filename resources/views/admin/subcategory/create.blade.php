@extends('admin.layouts.app')
@section('seo')
    <title>SubCategory Create | Newsportal</title>
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        SubCategory Create
                        <a href="{{route('admin.subcategory.index')}}" class="btn btn-primary">View All</a>

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
                        <form action="{{route('admin.subcategory.store')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Category</label>
                                    <select name="category_id" class="form-control"  id="category">
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
                                    <label for="exampleInputImage">Image</label>
                                    <input type="file" class="form-control" id="exampleInputImage" name="photo">
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

