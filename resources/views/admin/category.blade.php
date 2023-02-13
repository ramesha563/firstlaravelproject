@extends("admin.layout") 


@section("main")


@if(session("message"))
<div class="alert alert-info"  class="form-control">
    {{session("message")}}
</div>
@endif

<div class="container-fluid">
    <div class="col-md-6">
<form action="/category_post" method="POST">
    @csrf
<label>Add Category</label>
 <input name="categoryi" class="au-input au-input--full" placeholder="Enter Category">

 <button class="form-control my-2" class="btn btn-info" type="submit" >Add Category</button>

</form>
</div>
</div>
@endsection