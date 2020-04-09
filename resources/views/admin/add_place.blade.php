@extends('admin.layout')
@section('admin_content')
<div class="container-fluid">
    <form action="{{ route('place.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Place Name</label>
        <input type="text" class="form-control mb-3" placeholder="Place name" name="name">
        <label>Duration</label>
        <input type="text" class="form-control mb-3" placeholder="Duration" name="duration">
        <label>Price</label>
        <input type="text" class="form-control mb-3" placeholder="Price" name="price">
        <label>Image</label>
        <div class="mb-3"><input type="file" placeholder="Place name" name="image"></div>
        <button type="Post" class="btn btn-primary">Submit</button>
        
    </form>
</div> 
@endsection