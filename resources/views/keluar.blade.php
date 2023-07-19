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

<!-- Custom styles for this template -->
 <link href="checkout.css" rel="stylesheet">
  </head>
  <body>
  <h2 style="margin-top: 5px; margin-left:400px;"><b>Input-Update Data Surat Keluar</b></h2>
<form method ="post" action="">
 <fieldset>
 <legend>| Data Surat Keluar |</legend>
 <table>
    <!-- <tr>
         <td>Nomor Agenda </td>
         <td>: <input type="text" name="noagenda" size ="40" placeholder=
          "isi nomor agenda" required></td>
    </tr> -->
    <tr>
         <td>Nomor Surat </td>
         <td>: <input type="text" name="nosurat" size ="40" placeholder=
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
        <td>: <input type="text" name="asal" size ="40"
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
        <td>: <input type="date" name="tglsurat" size ="40"
         placeholder="isi tanggal" required></td>
    </tr>
    <tr>
         <td>Waktu Surat dikirim </td>
         <td>: <input type="text" name="waktu" size ="40" placeholder=
          "isi waktu surat dikirim" required></td>
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
        <td>: <input type="checkbox" name="jk" value="terlaksana"
         required>Sudah Terlaksana

        <input type="checkbox" name="jk" value="proses"
         required>Dalam Proses
        
         <input type="checkbox" name="jk" value="menunggu"
         required>Menunggu Disposisi Pimpinan</td>
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