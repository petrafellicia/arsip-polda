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
      <form action="{{ route('postlogin') }}" method="post">
       @csrf
        <h1>Login</h1>
        <hr>
        <p>Arsip Surat</p>
        <label for="username">Username</label>
        <input type="text"  value="{{ Session::get('username') }}" name="username" placeholder="Username">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        <button name="submit" type="submit">Login now!</button>
      </form>
    </div>
    <div class="right">
      <img src="image/polri.png" alt="polri">
    </div>
  </div>
</body>
</html>