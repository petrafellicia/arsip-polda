<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
  
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
  crossorigin="anonymous">
  
  <title>Arsip-Polda | {{ $title }}</title>
</head>
<body>

<div class="row justify-content-center">
  <div class="col-md-4">
  <main class="form-signin w-100 m-auto mx-auto p-5">
    <h1 class="h3 mb-3 fw-normal text-center">Silakan Login!</h1>
    <form>
    <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Login now!</button>
    <!-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> -->
  </form>
  </main>
  </div>
</div>
</body>
</html>