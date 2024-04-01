@extends('layouts.index')
@section('styles')

@endsection
@section('header')
    @include('layouts.headers.main')
@endsection

@section('content')
<div>
    register

    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <div class="card">
            <div class="card-header">
              <h2>Registro</h2>
            </div>
            <div class="card-body">
              <form action="" method="post">
                @csrf
                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre">
                </div>
                <div class="form-group">
                  <label for="email">Correo electrónico</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico">
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña">
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirma tu contraseña">
                </div>
                <p>*error</p>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('footer')
@include('layouts.footers.main')
@endsection

@section('scripts')

@endsection