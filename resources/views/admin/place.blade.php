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
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($places as $place)
      <tr>
        <th scope="row">1</th>
        <td>{{ $place->place_name }}</td>
        <td>{{ $place->duration }}</td>
        <td>{{ $place->price }}</td>
        <td><img src="{{ asset('img/'. $place->image) }}" alt="img" width="60px" height="60px"></td>
        <td>action</td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>

   
@endsection