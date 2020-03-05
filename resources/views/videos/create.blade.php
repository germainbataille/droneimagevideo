@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Ajouter un vidéo</h2>
  <form method="POST" action="{{ route('video-store') }}" >
    @csrf
    <input type-"hidden" name="album-id" id="album-id" value="{{ $albumId }}">
    <div class="form-group">
      <label for="title">Titre</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="Enter description">
    </div>
    <div class="form-group">
      <label for="video">Lien du vidéo sur Youtube</label>
      <input type="text" class="form-control" name="video" id="video" placeholder="Entrez le lien du vidéo sur Youtube">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
