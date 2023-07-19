@extends('layouts.main')

@section('container')
<div class="daftar" style="width:style; display:flex;">
    <div class="daftar" style="margin:auto;">
        <h1 style="font-size:35px;">Silakan pilih keperluan Anda</h1>
@foreach ($mails as $mail)
<button type="button" class="btn btn-primary"
        style=" width:181px; height:50px; border-radius:20px; --bs-btn-padding-y: .50rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; border:none; outline:none; padding:8px; cursor:pointer; background:#216588;">
        <a style="color:white; justify-content:center; text-decoration:none;" href="/mails/{{ $mail["slug"] }}" > {{ $mail["title"] }}</a>
</button>
<!-- <button type="button" class="btn btn-primary btn-lg"></button> -->
  <!-- <h5>by : {{  $mail["author"] }}</h5> -->
  <h5>{{ $mail["body"] }}</h5> 
@endforeach
    </div>
    <div class="right">
      <img src="image/polri.png" alt="polri" style="width:500px; height:400px; margin-right:50px">
    </div>
  </div>

  @endsection