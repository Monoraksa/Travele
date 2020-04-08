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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

   
@endsection