<a href="" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i></a>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header  bg bg-primary">
                <h3 class="modal-title"> Delete Conformation</h3>
                <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
            </div>
            <form action="{{route('admin.category.destroy',$category->id)}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}

                <div class="modal-body">
                    <h3>Are You Sure want to delete this record?</h3>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="btnCreate"> <i class="fa fa-trash"></i> Delete ! </button>
            </form>
            <button type="button" class="btn btn-warning" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span> Cancel ! </button>
        </div>
    </div>
</div>


@if($errors->has('title'))
    <label class="text text-danger">{{$errors->first('title')}}</label>
@endif
