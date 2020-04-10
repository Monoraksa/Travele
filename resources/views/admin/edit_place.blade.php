@extends('admin.layout')
@section('admin_content')
<div class="container-fluid">
    <form action="" method="PUT" enctype="multipart/form-data">
        @csrf
        <label>Place Name</label>
        <input type="text" class="form-control mb-3" placeholder="Place name" name="name" value="{{$place->name}}">
        <label>Duration</label>
        <input type="text" class="form-control mb-3" placeholder="Duration" name="duration" value="{{$place->duration}}">
        <label>Price</label>
        <input type="text" class="form-control mb-3" placeholder="Price" name="price" value="{{$place->price}}">
        <label>Image</label>
        <div class="mb-3"><input type="file" placeholder="Place name" name="image" value="{{$place->image}}"></div>
        <button type="Post" class="btn btn-primary">Submit</button>
        
    </form>
</div> 
@endsection