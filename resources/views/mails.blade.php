@extends('layouts.main')

@section('container')
<div class="daftar" style="width:style; display:flex;">
    <div class="daftar" style="margin:auto;">
        <h1 style="font-size:35px;">Silakan pilih keperluan Anda</h1>

<button type="button" class="btn btn-primary"
        style=" width:181px; height:50px; border-radius:20px; --bs-btn-padding-y: .50rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; border:none; outline:none; padding:8px; cursor:pointer; background:#216588;">
        <a style="color:white; justify-content:center; text-decoration:none;" href="/daftar-surat-masuk">Daftar Surat Masuk</a>
</button>

<button type="button" class="btn btn-primary"
        style=" width:181px; height:50px; border-radius:20px; --bs-btn-padding-y: .50rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; border:none; outline:none; padding:8px; cursor:pointer; background:#216588;">
        <a style="color:white; justify-content:center; text-decoration:none;" href="/daftar-surat-keluar        ">Daftar Surat Keluar</a>
</button> 
    </div>
    <div class="right">
      <img src="image/polri.png" alt="polri" style="width:500px; height:400px; margin-right:80px">
    </div>
  </div>

  @endsection