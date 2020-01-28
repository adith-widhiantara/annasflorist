@extends('base.bootstrap')
@section('title', 'Daftar | Annas Florist')

<head>
  <link rel="stylesheet" href="{{ url('css/login.css') }}">
</head>

@section('bootstrap')

<!-- Pendaftaran -->
<div class="container pendaftaran">
  <div class="row">
    <div class="row-12 mx-auto word">
      <div class="shadow-sm">
        <p>PENDAFTARAN</p>
      </div>
    </div>
  </div>
</div>
<!-- End Pendaftaran -->

<!-- Form -->
<div class="container formdata">
  <form>
    <div class="form-group row">
      <label for="Nama" class="col-2 offset-2 col-form-label">Nama</label>
      <div class="col-6">
        <input type="text" class="form-control" id="Nama">
      </div>
    </div>

    <div class="form-group row">
      <label for="Alamat" class="col-2 offset-2 col-form-label">Alamat</label>
      <div class="col-6">
        <div class="row">
          <div class="form-group col-4">
            <select id="inputState" class="form-control">
              <option selected>Provinsi</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-4">
            <select id="inputState" class="form-control">
              <option selected>Kabupaten</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-4">
            <select id="inputState" class="form-control">
              <option selected>Kecamatan</option>
              <option>...</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <textarea type="text" class="form-control" id="Alamat"></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="JenisKelamin" class="col-2 offset-2 col-form-label">Jenis Kelamin</label>
      <div class="col-2">
        <select id="inputState" class="form-control">
          <option selected>...</option>
          <option>Pria</option>
          <option>Wanita</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="NomorTelepon" class="col-2 offset-2 col-form-label">Nomor Telepon</label>
      <div class="col-6">
        <input type="number" class="form-control" id="NomorTelepon">
      </div>
    </div>

    <div class="form-group row">
      <label for="Email" class="col-2 offset-2 col-form-label">E-mail</label>
      <div class="col-6">
        <input type="email" class="form-control" id="Email">
      </div>
    </div>

    <div class="form-group row">
      <label for="Password" class="col-2 offset-2 col-form-label">Password</label>
      <div class="col-6">
        <input type="password" class="form-control" id="Password">
      </div>
    </div>

    <div class="row">
      <div class="div-2 offset-9">
        <button type="submit" class="btn btnn">Daftar</button>
      </div>
    </div>
  </form>
</div>
<!-- End Form -->
@endsection
