@extends('base.materialize')
@section('title', 'Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ url('css/master.css') }}">
</head>

<!-- Kotak 1 -->
<div class="kotak1">

<!-- Navbar -->
<nav class="navnav">
  <div class="container">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img src="img/logo.png" alt="logo" width="156" height="auto"></a>
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
        <li><a href="#" class="iconsearch">Home</a></li>
        <li><a href="#" class="iconsearch">Profil</a></li>
        <li><a href="#" class="iconsearch">Kategori</a></li>
        <li><a href="#modal1" class="modal-trigger iconsearch">Member</a></li>
      </ul>
    </div>
  </div>
</nav>

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

<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>
<!-- End Navbar -->

<!-- Cactus -->
<div class="cactus">
  <div class="row">
    <div class="col xl6 m12 s12 center-align">
      <div class="kotakdalamkaktus">
        <img src="{{ asset('img/cactus.png') }}" alt="cactus">
      </div>
    </div>
    <div class="col xl6 m12 s12 center-align">
      <h1 class="fontsaira annas">ANNAS FLORIST</h1>
      <h5 class="fontsaira spesialis">Spesialis Kaktus</h5>
      <div class="shopnow">
        <a href="#" class="fontmali">SHOP NOW
          <i class="fa fa-arrow-down lingkaranshopnow" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- End Cactus -->

<!-- Sosial Media -->
<div class="sosmed">
  <div class="row">

    <div class="col s4 sosmed1">
      <div class="sosmedicon row">
        <div class="col s4"></div>
        <div class="col s2">
          <a class="btnn" href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </div>
        <div class="col s2">
          <a class="btnn" href="#">
            <i class="fa fa-whatsapp"></i>
          </a>
        </div>
        <div class="col s2">
          <a class="btnn" href="#">
            <img src="{{ asset('img/tokopedia.png') }}" alt="tokopedia">
          </a>
        </div>
        <div class="col s2">
          <a class="btnn" href="#">
            <img src="{{ asset('img/shopee.png') }}" alt="shopee">
          </a>
        </div>
      </div>
    </div>

    <div class="col s4 sosmed2">
      <h5>b</h5>
    </div>

    <div class="col s4 sosmed3">
      <h5>c</h5>
    </div>

  </div>
</div>
<!-- End Sosial Media -->

</div>
<!-- End Kotak 1 -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });
</script>
@endsection
