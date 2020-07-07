@extends('layout.master')
@section('content')
<div class="container">
  <h2>Acceder</h2>
  <style>
    body {
      background-color: aquamarine;
    }

    h4,
    form {
      text-align: center;
    }
  </style>
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="mail" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre</label>
      <input type="text" class="form-control" name="nom" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="pass">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <input type="submit" class="btn btn-primary" name="boton" value="Entrar" />
  </form>
</div>

@stop