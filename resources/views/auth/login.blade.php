@extends('layouts.index')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH6xACSyJDffiVVvTasyz62QvZ" crossorigin="anonymous">
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
        <h2 class="text-center mb-5">Iniciar Sesión</h2>
        <form method="POST" action="">
          @csrf
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
            <div class="input-group">
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                name="password" required autocomplete="current-password">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="togglePassword"><i
                    class="fas fa-eye"></i></button>
              </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="d-flex justify-content-between mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">
                Recordarme
              </label>
            </div>
            <a href="" class="text-primary">¿Olvidaste tu contraseña?</a>
          </div>
          <button type="submit" class="btn-style w-100">Iniciar Sesión</button>
          <div style="margin-top: 5%">
            ¿Aún no tienes una cuenta?<a href="{{ route('register.index')}}" class="text-primary" style="margin-left: 2%">Registrate</a>
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
<script src="https://kit.fontawesome.com/your-fontawesome-kit-code.js" crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {
      $('#togglePassword').click(function () {
        $(this).toggleClass('fa-eye fa-eye-slash');
        $('#password').attr('type', $(this).hasClass('fa-eye') ? 'text' : 'password');
      });
    });
</script>
@endsection