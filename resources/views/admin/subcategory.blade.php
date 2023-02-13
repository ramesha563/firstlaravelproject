@extends("admin.layout") 


@section("main")


@if(session("message"))
<div class="alert alert-info"  class="form-control">
    {{session("message")}}
</div>
@endif

<div class="container-fluid">
    <div class="col-md-6">
<form action="/subcategory_post" method="POST">
    @csrf
<label>Add SubCategory</label>
 <input name="subcategoryi" class="au-input au-input--full" placeholder="Enter SubCategory">

 <select class="form-control my-2" name="categoryID" id="">
    <option value="">select category</option>
    @foreach($category as $c)
<option value="{{$c->id }}">{{ $c->category_name }}</option>
  @endforeach
 </select>

 <button class="form-control" class="btn btn-info" type="submit" >Add SubCategory</button>

</form>
</div>
</div>
@endsection