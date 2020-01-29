@extends('base.materialize')

@section('title', 'Product | Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/product.css') }}">
  <script type="text/javascript" src="{{ asset('js/product.js') }}"></script>
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
                    <label for="search">Cari sesuatu</label>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li><a href="#" class="iconsearch scroll">Home</a></li>
          <li><a href="#" class="iconsearch scroll">Profil</a></li>
          <li><a href="#" class="iconsearch scroll">Kategori</a></li>
          <li><a href="#" class="iconsearch">Notifikasi</a></li>
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
  <li><a href="#" class="iconsearch scroll">Home</a></li>
  <li><a href="#" class="iconsearch scroll">Profil</a></li>
  <li><a href="#" class="iconsearch scroll">Kategori</a></li>
  <li><a href="#" class="iconsearch">Notifikasi</a></li>
  <li><a href="#" class="iconsearch"><i class="material-icons">shopping_cart</i></a></li>
  <li><a href="#modal1" class="modal-trigger iconsearch"><i class="material-icons">person_pin</i></a></li>
</ul>

<!-- Modal -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>
<!-- End Modal -->
<!-- End Navbar -->

<!-- Deskripsi -->
<div class="deskripsi">
  <div class="container">
    <div class="row">
      <div class="col s5 gambar">
        <img class="responsive-img z-depth-5 hoverable" src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="">
      </div>
      <div class="col s6 offset-s1 caption">
        <p class="caption1">Sukulen Panda<br>Rp. 40.000</p>
        <div class="row caption2">
          <div class="col s3">
            <p>Kategori</p>
            <p>Jenis</p>
            <p>Stok</p>
            <div class="row">
              <div class="col s12">
                <p>Warna</p>
              </div>
            </div>
            <p>Jumlah</p>
          </div>
          <div class="col s6">
            <p>Sales</p>
            <p>Sukulen</p>
            <p>5</p>
            <div class="row">
              <div class="col s4">
                <p class="color">Biru</p>
                <p>Pink</p>
              </div>
              <div class="col s4">
                <p>Merah</p>
                <p>Navy</p>
              </div>
              <div class="col s4">
                <p>Hijau</p>
                <p>Kuning</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Deskripsi -->

@endsection
