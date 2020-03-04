@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Upload new photo</h2>
  <form method="POST" action="{{ route('photo-store') }}" enctype="multipart/form-data">
    @csrf
    <input type-"hidden" name="album-id" id="album-id" value="{{ $albumId }}">
    <div class="form-group">
      <label for="name">Title</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="photos">Photo</label>
      <input type="file" class="form-control" name="photo" id="photo" placeholder="Enter name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
