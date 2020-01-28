@extends('base.materialize')

@section('title', 'Product | Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ url('css/master.css') }}">
</head>

<!-- Navbar -->
<div class="navbar-fixed">
  <nav class="navnav">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#top" class="brand-logo scroll"><img src="img/logo.png" alt="logo" width="156" height="auto"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa fa-align-justify" aria-hidden="true"></i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down fontrighteous">
          <li>
            <div class="center row">
              <div class="col s12" >
                <div class="row" id="topbarsearch">
                  <div class="col s2 iconsearch">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </div>
                  <div class="input-field col s10">
                    <input id="search" type="text" class="validate">
                    <label for="search">Search</label>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li><a href="#top" class="iconsearch scroll">Home</a></li>
          <li><a href="#profil" class="iconsearch scroll">Profil</a></li>
          <li><a href="#kategori" class="iconsearch scroll">Kategori</a></li>
          @if (Auth::check()) {
            <li><a href="#" class="iconsearch">Notifikasi</a></li>
          }
          @endif
          <li><a href="#" class="iconsearch"><i class="material-icons">shopping_cart</i></a></li>
          <li><a href="#modal1" class="modal-trigger iconsearch"><i class="material-icons">person_pin</i></a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<ul class="sidenav" id="mobile-demo">
  <li>
   <div class="center row">
      <div class="col s12" >
        <div class="row" id="topbarsearch">
          <div class="col s2">
            <i class="fa fa-search" aria-hidden="true"></i>
          </div>
          <div class="input-field col s10">
            <input id="search" type="text" class="validate">
            <label for="search">Search</label>
          </div>
        </div>
      </div>
    </div>
  </li>
  <li><a href="#">Home</a></li>
  <li><a href="#">Profil</a></li>
  <li><a href="#">Kategori</a></li>
  <li><a href="#modal1" class="modal-trigger">Member</a></li>
</ul>
<!-- End Navbar -->

@endsection
