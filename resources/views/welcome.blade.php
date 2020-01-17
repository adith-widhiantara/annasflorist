@extends('base.materialize')
@section('title', 'Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ url('css/master.css') }}">
</head>

<!-- Kotak 1 -->
<div class="kotak1"></div>
<!-- End Kotak 1 -->

<!-- Navbar -->
<nav class="navnav">
  <div class="container">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right hide-on-med-and-down fontrighteous">
        <li><a href="#">LOGIN</a></li>
        <li><a href="#">HOME</a></li>
        <li><a href="#">KATEGORI</a></li>
        <li><a href="#">PROFIL</a></li>
        <li><a href="#">KONTAK</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Cactus -->
<div class="container">
  <div class="row">
    <div class="col s6">
      <img src="{{ asset('img/cactus.png') }}" alt="cactus">
    </div>
    <div class="col s6">
      <h1 class="fontsaira annas">ANNAS FLORIST</h1>
    </div>
  </div>
</div>
<!-- End Cactus -->
@endsection
