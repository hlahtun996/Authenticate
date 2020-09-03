@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{route('items.edit','$itemcate->id)}}" method="POST">
@csrf
<div class="form-group">
<input name="_method" type="hidden" value="PATCH">
<input type="hidden" name="id" class="form-control" value="{{$items->id}}">
</div>
<div class="form-group">
<label>Item Name</label>
<input name="_method" type="hidden" value="PATCH">
<input type="hidden" name="name" class="form-control" value="{{$items->name}}">
</div>
<div class="form-group">
<label>Item Code</label>
<input name="_method" type="hidden" value="PATCH">
<input type="hidden" name="code" class="form-control" value="{{$items->code}}">
</div>
<div class="form-group">
<label>Item Price</label>
<input name="_method" type="hidden" value="PATCH">
<input type="hidden" name="price" class="form-control" value="{{$items->price}}">
</div>
<div class="form-group">
<input type="Submit" value="Update Info" class="btn btn-primary">
</div>
</form>
</div>

@endsection