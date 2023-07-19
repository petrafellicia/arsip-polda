<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <!-- <title>Checkout example · Bootstrap v5.3</title> -->

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/"> 

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- <style>
       .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>  -->
    
    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
  </head>
  <body>
  <h2 style="margin-top: 5px; margin-left:400px;"><b>Input-Update Data Surat Masuk</b></h2>
  <form method ="post" action="">
    
  <fieldset>
  <legend>| Data Surat Masuk |</legend>
  <table>
    <tr>
         <td>Nomor Agenda </td>
         <td>: <input type="text" name="nomoragenda" size ="40" placeholder=
          "isi nomor agenda" required></td>
    </tr>
    <tr>
         <td>Nomor Surat </td>
         <td>: <input type="text" name="nomorsurat" size ="40" placeholder=
          "isi nomor surat" required></td>
    </tr>
    <tr>
        <td>Jenis Surat </td>
        <td>: <select name="type">
            <option>Surat Biasa</option>
            <option>Nota Dinas</option>
            <option>Telegram</option>
            <option>Sprin</option>
            <option>Surat Izin</option>
            <option>Surat Rahasia</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>Asal Surat</td>
        <td>: <input type="text" name="asalsurat" size ="40"
         placeholder="isi asal surat lengkap" required></td>
    </tr>
    <tr>
        <td>Perihal </td>
        <td>: <input type="radio" name="jk" value="majalah"
         required>Majalah

        <input type="radio" name="jk" value="tribut"
         required>Tribut
        
         <input type="radio" name="jk" value="news"
         required>News</td>
    </tr>
    <tr>
        <td>KKA </td>
        <td>: <select name="kka">
            <option>KEP</option>
            <option>BIN</option>
            <option>OPS</option>
            <option>REN</option>
            <option>LOG</option>
            <option>HUM</option>
            <option>HUK</option>
            <option>TIK</option>
            <option>TUK</option>
            <option>WAS</option>
            <option>KEU</option>
            <option>DIK</option>
            <option>PAM</option>
            <option>YAN</option>
            <option>KES</option>
            <option>RES</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>Tanggal Surat</td>
        <td>: <input type="date" name="tanggalsurat" size ="40"
         placeholder="isi tanggal" required></td>
    </tr>
    <tr>
         <td>Waktu Terima Surat </td>
         <td>: <input type="text" name="waktu" size ="40" placeholder=
          "isi waktu terima surat" required></td>
    </tr>
    <tr>
        <td>Disposisi Kepada </td>
        <td>: <input type="checkbox" name="jk" value="tekkom"
         required>Ksbd. Tekkom

        <input type="checkbox" name="jk" value="tekinfo"
         required>Ksbd. Tekinfo
        
         <input type="checkbox" name="jk" value="renmin"
         required>Ksbg. Renmin

         <input type="checkbox" name="jk" value="other"
         required>Other</td>
    </tr>
    <tr>
        <td>Distribusi </td>
        <td>: <select name="distribusi">
            <option>Mabes POLRI</option>
            <option>Kapolda DIY</option>
            <option>Wakapolda DIY</option>
            <option>Irwasda</option>
            <option>Karo Ops</option>
            <option>Karo Rena</option>
            <option>Karo SDM</option>
            <option>Karo Log</option>
            <option>Dirintelkom</option>
            <option>Dirreskrimum</option>
            <option>Dirreskrimsus</option>
            <option>Dirresnarkoba</option>
            <option>Kabid Propam</option>
            <option>Kabid Humas</option>
            <option>Kabid TIK</option>
            <option>Kabid Dokkes</option>
            <option>Kabid Kum</option>
            <option>Kabid Keu</option>
            <option>Dittahti</option>
            <option>Kayanma</option>
            <option>Koorspripim</option>
            <option>Karumkit Bhayangkara</option>
            <option>KA SPKT Polda DIY</option>
            <option>KA SPN</option>
            <option>Dansat Brimob</option>
            <option>Polrestu YKA</option>
            <option>Polrestu Sleman</option>
            <option>Polres Bantul</option>
            <option>Polres KLP</option>
            <option>Polres ONK</option>
            <option>Instansi Luar Polda DIY</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>Isi Disposisi </td>
        <td>: <input type="checkbox" name="jk" value="tinjau"
         required>Tinjau

        <input type="checkbox" name="jk" value="accept"
         required>Accepted
        
         <input type="checkbox" name="jk" value="koordinasi"
         required>Koordinasi</td>
    </tr>
    <tr>
        <td>Keterangan </td>
        <td>: <input type="text" name="keterangan" size ="40"
         placeholder="isi keterangan"></td>
    </tr>
    <tr>
        <td>Scan Surat </td>
        <td>: <input type="file" name="surat" required> </td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Submit"></td>
    </tr>
   </table>
  </fieldset>
 </form>
    </body>
    </html>