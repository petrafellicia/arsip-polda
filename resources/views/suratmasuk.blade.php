@extends('layouts.main')

@section('container')
<h1>Daftar Surat Masuk</h1>
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
      <th scope="col">File</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $row-> id }}</th>
      <td>{{ $row-> nomor_agenda }}</td>
      <td>{{ $row-> nomor_surat }}</td>
      <td>{{ $row-> jenis_surat}}</td>
      <td>{{ $row-> asal_surat}}</td>
      <td>{{ $row-> perihal}}l</td>
      <td>{{ $row-> kka}}</td>
      <td>{{ $row-> tanggal_surat}}</td>
      <td>{{ $row-> jam_terima}}</td>
      <td>{{ $row-> disposisi_kepada}}</td>
      <td>{{ $row-> distribusi}}</td>
      <td>{{ $row-> keterangan }}</td>
      <td>
        <button type="button" class="btn btn-success">Download</button>
      </td>
      <td>
        <button type="button" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection