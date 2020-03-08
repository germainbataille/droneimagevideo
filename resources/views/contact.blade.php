@extends('layouts.app')
@section('content')
<div class="fond">
  <br><br><br>
  <div class="layer">
    <div class="texte">
      <h1>Contact</h1>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <form method="POST" action="{{ route('contact-form-submit') }}">
        @csrf
        <div class="form-group">
          <label for="nom">Nom:</label>
          <input required type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Courriel:</label>
          <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Entrez le courriel">
        </div>
        <div class="form-group">
          <label for="sujet">Sujet:</label>
          <input required type="text" class="form-control" id="sujet" name="sujet" placeholder="Entrez le sujet">
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea required class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
      </form>
      <br><br><br><br><br><br><br><br>
    </div>
  </div>
</div>
@endsection
