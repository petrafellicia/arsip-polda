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
  
    <h1>Hello, world!</h1>
    
  <title>Arsip-Polda | {{$title}}</title>
</head>
<body>
    @include('partials.navbar');

<div class="container mt-4">
  @yield('container')
</div>

  <!-- Option 1 : Bootstrap Bundle with Paper -->
  <!-- <script src="js/script.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
  crossorigin="anonymous"></script>

</body>
</html>

<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDiYZCxYbOOl7+AMvyTG2X"
crossorigin="anonymous"> -->

<!-- My Style -->
<!-- <link rel="stylesheet" href="/css/style.css">

<title>Arsip-Polda Blog | {{$title}}</title> -->

  