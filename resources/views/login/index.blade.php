<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/login.css">
  <title>Arsip-Polda | {{ $title }}</title>
</head>
<body>
  <div class="container">
    <div class="login">
      <form action="">
        <h1>Login</h1>
        <hr>
        <p>Arsip Surat</p>
        <label for="">Username</label>
        <input type="text" placeholder="username">
        <label for="">Password</label>
        <input type="password" placeholder="password">
        <button>Login</button>
      </form>
    </div>
    <div class="right">
      <img src="image/polri.png" alt="polri">
    </div>
  </div>
</body>
</html>
{{-- @extends('layouts.main')

@section('container') --}}
{{-- <div class="row justify-content-center">
  <div class="col-md-4">
  <main class="form-signin w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
    <form>
    <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
    <!-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> -->
  </form>
  </main>
  </div>
</div> --}}

{{-- @endsection --}}