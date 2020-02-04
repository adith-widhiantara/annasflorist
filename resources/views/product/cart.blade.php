@extends('base.materialize')
@section('title', 'Keranjang | Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
  <script type="text/javascript" src="{{ asset('js/cart.js') }}"></script>
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

<!-- Cart -->
<div class="container cart">
  <div class="row">
    <div class="col s1 cart2 height valign-wrapper hapusitem">
      <button class="btnn">
        <i class="material-icons">close</i>
      </button>
    </div>
    <div class="col s2 cart2">
      <img class="responsive-img hoverable" src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="">
    </div>
    <div class="col s2 valign-wrapper cart2 judul">
      <p>Sukulen Panda</p>
    </div>
    <div class="col s2 cart3 harga">
      <p>Harga</p>
      <div class="hargaproduk">
        40.000
      </div>
    </div>
    <div class="col s2 cart3 harga">
      <p>Jumlah Satuan</p>
      <div class="inputnumber">
        <form>
          <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
          <input type="number" id="number" value="1" min="1">
          <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
        </form>
      </div>
    </div>
    <div class="col s3 cart3 harga">
      <p>Subharga Produk</p>
      <div class="hargatotaljs">
        80.000
      </div>
    </div>
  </div>
</div>
<!-- End Cart -->

<!-- Total -->
<section class="container total">
  <div class="row">
    <div class="col s3 offset-s5">
      <p>Total Subharga Produk</p>
    </div>
    <div class="col s2 hargatotal2js" id="akhir">
      80.000
    </div>
    <div class="col s2 belisekarang">
      <a href="#" role="button" type="submit">Beli Sekarang</a>
    </div>
  </div>
</section>
<!-- End Total -->

<!-- Catalog -->
<div class="container sales">
  <div class="row">
    <div class="col s6 offset-s6">
      <a href="#"><h1 class="lihatsemua">Lihat Semua <i class="material-icons">arrow_forward</i></h1></a>
    </div>
  </div>
  <div class="row">
    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('img/sales/sukulen panda.jpg') }}">
        </div>
        <div class="card-content">
          <h5>Sukulen Panda</h5>
          <div class="row">
            <div class="col s6">
              <p>Rp. 40.000</p>
            </div>
            <div class="col s6">
              <p class="right-align">Jember</p>
            </div>
          </div>
          <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
        </div>
      </div>
    </div>
    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('img/sales/sukulen roseum.jpg') }}">
        </div>
        <div class="card-content">
          <h5>Sukulen Roseum</h5>
          <div class="row">
            <div class="col s6">
              <p>Rp. 35.000</p>
            </div>
            <div class="col s6">
              <p class="right-align">Jember</p>
            </div>
          </div>
          <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
        </div>
      </div>
    </div>
    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('img/sales/terarium.jpg') }}">
        </div>
        <div class="card-content">
          <h5>Terarium</h5>
          <div class="row">
            <div class="col s6">
              <p>Rp. 80.000</p>
            </div>
            <div class="col s6">
              <p class="right-align">Jember</p>
            </div>
          </div>
          <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
        </div>
      </div>
    </div>
    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('img/sales/terarium3.jpg') }}">
        </div>
        <div class="card-content">
          <h5>Terarium Hiasan</h5>
          <div class="row">
            <div class="col s6">
              <p>Rp. 70.000</p>
            </div>
            <div class="col s6">
              <p class="right-align">Jember</p>
            </div>
          </div>
          <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Catalog -->

<!-- About -->
<div class="container about">
  <div class="row">
    <div class="col s4 about1">
      <h5>Bantuan</h5>
      <a href="#"><p>Lupa Password</p></a>
      <a href="#"><p>Lupa Username</p></a>
      <a href="#"><p>Cara menjadi member</p></a>
      <a href="#"><p>Cara memesan kaktus</p></a>
      <a href="#"><p>Cara mengikuti Workshop</p></a>
    </div>

    <div class="col s4 about2">
      <h5>Ikuti Kami</h5>
      <a href="https://www.instagram.com/annas_florist/" target="_blank"><p><img align="middle" src="{{ asset('img/footer/1.png') }}" alt="instagram">Annas_Florist</p></a>
      <a href="https://api.whatsapp.com/send?phone=6289683792377&text=Halo%20Admin%20Bagaimana%20Cara%20Order%20Kaktusnya" target="_blank"><p><img align="middle" src="{{ asset('img/footer/2.png') }}" alt="whatsapp">089683792377</p></a>
      <a href="https://shopee.co.id/annaramadhaniati" target="_blank"><p><img align="middle" src="{{ asset('img/footer/3.png') }}" alt="shopee">annaramadhaniati</p></a>
      <a href="https://www.tokopedia.com/annasflorist?source=universe&st=product" target="_blank"><p><img align="middle" src="{{ asset('img/footer/4.png') }}" alt="annasflorist">annasflorist</p></a>
    </div>

    <div class="col s4 about3">
      <img src="{{ asset('img/logo3.png') }}" alt="Logo FLORIST transparent">
      <p>Jangan khawatir melihat kamar kos, kantor, cafe atau rumah anda kurang menarik. di Annas Florist kalian bisa memesan Kaktus sebagai pengisi ruangan kalian yang kosong agar tampak lebih indah dan sejuk.</p>
    </div>
  </div>

  <div class="row">
    <div class="col s12">
      <p class="footer">© CV. ANNAS FLORIST  - SPESIALIS KAKTUS JEMBER</p>
    </div>
  </div>
</div>
<!-- End About -->
@endsection
