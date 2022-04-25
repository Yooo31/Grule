@extends('layouts.master')

@section('title')
  Bienvenue !
@endsection

@section('content')
  <div class="row">
    <div class="col-md-6">
      <h3>Inscription</h3>
      <form action="#" method="post">
        <div class="form-group">
          <label for="email">Ton mail</label>
          <input class="form-control" type="text" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="first_name">Ton prénom</label>
          <input class="form-control" type="text" name="first_name" id="first_name">
        </div>
        <div class="form-group">
          <label for="password">Ton mot de passe</label>
          <input class="form-control" type="password" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>
    <div class="col-md-6">
      <h3>Connexion</h3>
      <form action="#" method="post">
        <div class="form-group">
          <label for="email">Ton mail</label>
          <input class="form-control" type="text" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="password">Ton mot de passe</label>
          <input class="form-control" type="password" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>
  </div>
@endsection