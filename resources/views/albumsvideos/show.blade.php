@extends('layouts.app')

@section('content')
<section class="jumbotron text-center" style="padding:0px;">
    <div class="container">
      <h1>{{ $album->name }}</h1>
      <p class="lead text-muted">{{ $album->description}}</p>
       @if (Route::has('login'))
        @auth
        <p>
          <a href="{{ route('video-create', $album->id) }}" class="btn btn-primary my-2">Ajouter Vidéo</a>
          <a href="/albumsvideos" class="btn btn-secondary my-2">Retour</a>
        </p>
        @endauth
      @endif
    </div>
  </section>
  @if (count($album->videos) > 0)
     <div class="row">
       @foreach ($album->videos as $video)
       <div class="col-md-4">
         <div class="card mb-4 shadow-sm" style="width:560px;height:315px">
           <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <p class="card-text" >{{ $video->description }}</p>
         </div>
       </div>
       @endforeach
     </div>
  @else
    <h3>Pas encore de vidéo.</h3>
  @endif
  <div style="height:200px;">
  </div>
  @endsection
