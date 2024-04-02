@extends('layouts.index')
@section('styles')

@endsection
@section('header')
@include('layouts.headers.main')
@endsection

@section('content')
<div class="bg">
  <div class="d-flex form-content">
    <div class="img-login">
      <img src="/media/Listy-light.png" class="logo-light" alt="">
    </div>
    <div class="form-items">
      <div class="card-body">
        <h2 class="text-center mb-3">Registro</h2>
        <form action="" method="post">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
              value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
              value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
              name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror"
              id="password_confirmation" name="password_confirmation" value="{{ old('password') }}" required
              autocomplete="password_confirmation" autofocus>
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group" style="margin-top: 10%">
            <button type="submit" class="btn-style w-100">Registrarse</button>
          </div>
        </form>
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