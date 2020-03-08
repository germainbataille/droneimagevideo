@extends('layouts.app')

@section('content')
<section class="jumbotron text-center" style="padding:0px;">
    <div class="container">
      <h1>{{ $album->name }}</h1>
      <p class="lead text-muted">{{ $album->description}}</p>
       @if (Route::has('login'))
        @auth
        <p>
          <a href="{{ route('photo-create', $album->id) }}" class="btn btn-primary my-2">Upload Photo</a>
          <a href="/albums" class="btn btn-secondary my-2">Retour</a>
        </p>
        @endauth
      @endif
    </div>
  </section>
  @if (count($album->photos) > 0)
     <div class="row">
       @foreach ($album->photos as $photo)
       <div class="col-md-4">
         <div class="card mb-4 shadow-sm">
          <img src="/storage/albums/{{ $album->id }}/{{ $photo->photo}}" alt="{{ $photo->photo }}" height="200px">
           <div class="card-body">
             <p class="card-text">{{ $photo->description }}</p>
             <div class="d-flex justify-content-between align-items-center">
               <div class="btn-group">
                 <a href="{{ route('photo-show',$photo->id) }}" class="btn btn-sm btn-outline-secondary">Voir</a>
               </div>
               <small class="text-muted">Taille: {{ $photo->size }}</small>
             </div>
           </div>
         </div>
       </div>
       @endforeach
     </div>
  @else
    <h3>No albums yet.</h3>
  @endif
@endsection
