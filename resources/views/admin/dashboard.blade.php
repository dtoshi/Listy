@extends('layouts.index')
@section('styles')

@endsection
@section('header')
header admin
@endsection

@section('content')
@if (auth()->check())
    <!-- Contenido de la página para usuarios autenticados -->
    <h1>Bienvenido al dashboard, {{ auth()->user()->name }}!</h1>
@else
    <!-- Redirigir al usuario a la página de inicio de sesión si no está autenticado -->
    <script>window.location = "{{ route('login.index') }}";</script>
@endif

@endsection

@section('footer')
footer admin
@endsection

@section('scripts')

@endsection