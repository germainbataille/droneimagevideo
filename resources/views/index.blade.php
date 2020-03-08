@extends('layouts.app')

@section('content')
<div class="section">
  <table class="centre" >
    <tr>
      <td>
          <img class="centre"src="storage/images/drone.png" >
      </td>
    </tr>
    <tr>
      <td>
        <h1 class="centre" style="color:white;text-align:center;font-weight:bold;">Drône Image Vidéo</h1>
      </td>
    </tr>
  </table>
  <div class="video-container">
    <!-- <div class="color-overlay"></div> -->
    <video autoplay loop muted style="width:100%;margin-top:-200px;">
      <source src="storage/videos/OttoBistro.mp4" type="video/mp4">
    </video>
  </div>
</div>

@endsection
