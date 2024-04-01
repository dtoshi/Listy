@extends('layouts.index')
@section('styles')

@endsection
@section('header')
    @include('layouts.headers.main')
@endsection

@section('content')
<div>
    <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <div class="card">
              <div class="card-header">
                <h2>Iniciar sesión</h2>
              </div>
              <div class="card-body">
                <form action="" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico">
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña">
                  </div>
                  @error('message')
                    <p>*error</p>
                  @enderror
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
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
<script>
    $(document).ready(function() {
  $("#loginForm").validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 8
      }
    },
    messages: {
      email: {
        required: "Ingresa tu correo electrónico",
        email: "Ingresa un correo electrónico válido"
      },
      password: {
        required: "Ingresa tu contraseña",
        minlength: "La contraseña debe tener al menos 8 caracteres"
      }
    }
  });
});
</script>
@endsection