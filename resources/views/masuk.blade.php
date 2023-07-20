<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center">Input-Update Data Surat Masuk</h2>
    <div class="container">
      <div class="row justify-content-center">
       <div class="col-8">
        <div class="card">
         <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nomor Agenda</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nomor Surat</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Jenis Surat</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Surat Biasa</option>
                <option value="2">Nota Dinas</option>
                <option value="3">Telegram</option>
                <option value="4">Sprin</option>
                <option value="5">Surat Izin</option>
                <option value="6">Surat Rahasia</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Asal Surat</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Perihal</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Majalah
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                 News
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                 Tribut
                </label>
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">KKA</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">KEP</option>
                <option value="2">BIN</option>
                <option value="3">OPS</option>
                <option value="4">REN</option>
                <option value="5">LOG</option>
                <option value="6">HUM</option>
                <option value="7">HUK</option>
                <option value="8">TIK</option>
                <option value="9">TUK</option>
                <option value="10">WAS</option>
                <option value="11">KEU</option>
                <option value="12">DIK</option>
                <option value="13">PAM</option>
                <option value="14">YAN</option>
                <option value="15">KES</option>
                <option value="16">RES</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal Surat</label>
              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Jam Terima</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Disposisi Kepada</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Ksbd. Tekkom
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Ksbd. Tekinfo
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Ksbg. Renmin
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Other
                </label>
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Distribusi</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Mabes POLRI</option>
                <option value="2">Kapolda DIY</option>
                <option value="3">Wakapolda DIY</option>
                <option value="4">Irwasda</option>
                <option value="5">Karo Ops</option>
                <option value="6">Karo Rena</option>
                <option value="7">Karo SDM</option>
                <option value="8">Karo Log</option>
                <option value="9">Dirintelkom</option>
                <option value="10">Dirreskrimum</option>
                <option value="11">Dirreskrimsus</option>
                <option value="12">Dirresnarkoba</option>
                <option value="13">Kabid Propam</option>
                <option value="14">Kabid Humas</option>
                <option value="15">Kabid TIK</option>
                <option value="16">Kabid Dokkes</option>
                <option value="17">Kabid Kum</option>
                <option value="18">Kabid Keu</option>
                <option value="19">Dittahti</option>
                <option value="20">Kayanma</option>
                <option value="21">Koorspripim</option>
                <option value="22">Karumkit Bhayangkara</option>
                <option value="23">KA SPKT POLDA DIY</option>
                <option value="24">KA SPN</option>
                <option value="25">Dansat Brimob</option>
                <option value="26">Polrestu YKA</option>
                <option value="27">Polrestu Sleman</option>
                <option value="28">Polres Bantul</option>
                <option value="29">Polres KLP</option>
                <option value="30">Polres ONK/option>
                <option value="31">Instansi Luar POLDA</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Isi Disposisi</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Tinjau
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Accepted
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Koordinasi
                </label>
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Keterangan</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Upload File</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
         </div>
        </div>
       </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>