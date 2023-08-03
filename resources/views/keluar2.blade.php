<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center">Input-Update Data Surat Keluar</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertsuratkeluar" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nomor Agenda</label>
                                <input type="text" name="no_agenda" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nomor Surat</label>
                                <input type="text" name="no_surat" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis Surat</label>
                                <select class="form-select" name="jenis_surat" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option>Surat Biasa</option>
                                    <option>Nota Dinas</option>
                                    <option>Telegram</option>
                                    <option>Sprin</option>
                                    <option>Surat Izin</option>
                                    <option>Surat Rahasia</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Asal Surat</label>
                                <input type="text" name="asal_surat" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Perihal</label>
                                <input type="text" name="perihal" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">KKA</label>
                                <select class="form-select" name="kka" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
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
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Dasar Pembuatan Surat</label>
                                <input type="text" name="dasar_surat" class="form-control"
                                    id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Surat</label>
                                <input type="date" name="tgl_surat" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jam Terima</label>
                                <input type="text" name="jam_surat" class="form-control"
                                    id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="disposisi_kepada" class="form-label">Disposisi Kepada</label>
                                <label>
                                    <input type="checkbox" name="options[]" value="option_1">
                                    Yth. Ksbd. Tekkom
                                </label>

                                <br>

                                <label>
                                    <input type="checkbox" name="options[]" value="option_2">
                                    Yth. Ksbd. Tekinfo
                                </label>

                                <br>

                                <label>
                                    <input type="checkbox" name="options[]" value="option_3">
                                    Yth. Ksbg. Renmin
                                </label>

                                <br>

                                <label>
                                    <input type="checkbox" name="options[]" value="other" id="other_checkbox">
                                    Yth. ...
                                </label>

                                <input type="text" name="other_text" id="other_text_input"
                                    style="display: none;">

                                <br>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Distribusi</label>
                                <select class="form-select" name="distribusi" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
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
                                    <option>KA SPKT POLDA DIY</option>
                                    <option>KA SPN</option>
                                    <option>Dansat Brimob</option>
                                    <option>Polrestu YKA</option>
                                    <option>Polrestu Sleman</option>
                                    <option>Polres Bantul</option>
                                    <option>Polres KLP</option>
                                    <option>Polres ONK/option>
                                    <option>Instansi Luar POLDA</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Isi Disposisi</label>
                                <input type="text" name="isi_disposisi" class="form-control"
                                    id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Feedback</label>
                                <input type="text" name="feedback" class="form-control"
                                    id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload Dokumen</label>
                                <input class="form-control 
              @error('file') is-ivalid @enderror" value="{{ old('file') }}" name="file" type="file" id="formFile">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>