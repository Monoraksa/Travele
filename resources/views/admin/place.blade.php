@extends('admin.layout')
@section('admin_content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Place</h1>
    <a href="/addPlace" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Add place</a>
  </div>

  <!-- Content Row -->
  <div class="row">

   
  

  </div>

  <!-- Content Row -->

<div class="row">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Place</th>
      <th scope="col">Duration</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($places as $key => $place)
      <tr>
        <th scope="row">{{ $key+1 }}</th>
        <td>{{ $place->place_name }}</td>
        <td>{{ $place->duration }}</td>
        <td>{{ $place->price }}</td>
        <td><img src="{{ asset('images/'. $place->image) }}" alt="img" width="40px" height="40px"></td>
        <td>
          <form action="{{ route('place.edit', $place->id) }}" method="get" class="d-inline">
            <button type="submit" class="btn btn-warning"><i class="fa fa-edit"></i></button>
          </form>
          <form action="{{ route('place.destroy', $place->id) }}" method="post" class="d-inline">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>

   
@endsection