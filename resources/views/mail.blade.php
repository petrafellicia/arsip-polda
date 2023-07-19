@extends('layouts.main')

@section('container')
<h1>{{ $mail["title"] }}</h1>
{{-- <h5>{{ $mail["author"] }}"</h5>
<p>{{ $mail["body"] }}"</p> --}}
<hr></hr>
<div class="container-fluid">
<a href="/mails">Back to Mails</a>
<button type="button"
style=" width:150px; height:40px; border-radius:26.5px; --bs-btn-padding-y: .50rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; border:none; outline:none; padding:8px; cursor:pointer; background:#216588;">
<a style="color:white; justify-content:center; text-decoration:none;" href="/masuk">Tambah Surat</a></button>
<form class="d-flex" style="margin-top:20px" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor Agenda</th>
      <th scope="col">Nomor Surat</th>
      <th scope="col">Jenis Surat</th>
      <th scope="col">Surat dari</th>
      <th scope="col">Perihal</th>
      <th scope="col">KKA</th>
      <th scope="col">Tanggal Surat</th>
      <th scope="col">Jam Diterima Surat</th>
      <th scope="col">Disposisi kepada</th>
      <th scope="col">Distribusi</th>
      <th scope="col">Isi Disposisi</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>B/22/VI/AUM</td>
      <td>Surat Biasa</td>
      <td>Kabid Humas</td>
      <td>News</td>
      <td>Operasional</td>
      <td>9 Juni 2023</td>
      <td>10.00 WIB</td>
      <td>Ksbd Tekkom</td>
      <td>Kapolda DIY</td>
      <td>Accepted</td>
      <td>Sudah terlaksana</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>B/23/V/HUM</td>
      <td>Surat Biasa</td>
      <td>Kabid Humas</td>
      <td>News</td>
      <td>Hukum</td>
      <td>10 Juni 2023</td>
      <td>12.00 WIB</td>
      <td>Ksbd Tekkom</td>
      <td>Kabid Kum</td>
      <td>Koordinasi</td>
      <td>Dalam Proses</td>
    </tr>
    <tr>
      <th scope="row">3</th>
    </tr>
  </tbody>
</table>

@endsection