@extends('layouts.index')
@section('styles')

@endsection
@section('header')
<div class="header">
    @include('layouts.headers.main')
</div>
@endsection

<div class="img-banner-home">
    <img class="banner" src="/media/banner-index.png" alt="">
    <div class="btn-start"><a href="{{ route('register.index') }}" class="link">Empezar</a></div>
</div>

@section('content')
<div>
</div>
@endsection

@section('footer')
@include('layouts.footers.main')
@endsection

@section('scripts')

@endsection