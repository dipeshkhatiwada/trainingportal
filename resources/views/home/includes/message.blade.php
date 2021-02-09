@if(session('error_message'))
    <div class="alert alert-warning ">
        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
        {{session('error_message')}}.
    </div>
@endif
@if(session('success_message'))
    <div class="alert alert-success ">
        <h5><i class="icon fas fa-check"></i> Alert!</h5>
        {{session('success_message')}}.
    </div>
@endif
