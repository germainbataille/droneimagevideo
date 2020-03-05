@extends('layouts.app')

@section('content')
<div class="container">
    <br><br>
    @if (count($albums) > 0)
     <div class="row">
       @foreach ($albums as $album)
       <div class="col-md-4">
         <div class="card mb-4 shadow-sm">
          <img src="/storage/albumvideo_covers/{{ $album->cover_image }}" alt="{{ $album->cover_image }}" height="200px">
           <div class="card-body">
             <p class="card-text">{{ $album->description }}</p>
             <div class="d-flex justify-content-between align-items-center">
               <div class="btn-group">
                 <a href="{{ route('albumvideo-show',$album->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
               </div>
               <small class="text-muted">{{ $album->name }}</small>
             </div>
           </div>
         </div>
       </div>
       @endforeach
     </div>
  @else
    <h3>No albums yet.</h3>
  @endif
</div>
@endsection
