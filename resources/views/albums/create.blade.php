@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Create new album</h2>
  <form method="POST" action="{{ route('album-store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Email address</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="cover-image">Cover image</label>
      <input type="file" class="form-control" name="cover-image" id="cover-image" placeholder="Enter name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
