@extends('layouts.main')

@section('container')
    <h1>Daftar Surat Keluar</h1>
    <hr>
    </hr>
    <div class="container-fluid">
        <a href="/mails">Back to Mails</a>
        <button type="button"
            style=" float:right; width:150px; height:40px; border-radius:26.5px; --bs-btn-padding-y: .50rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; border:none; outline:none; padding:8px; cursor:pointer; background:#216588;">
            <a style="color:white; justify-content:center; text-decoration:none;" href="/keluar">Tambah Surat</a></button>
        <form action="/daftar-surat-masuk/search" method="GET" class="d-flex justify-content-end"
            style="margin-top:30px; margin-bottom:10px;" role="search">

            <input class="form-control w-25 me-2" name="search" type="search" value="{{ request('search') }}"
                placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>

        </form>

        <div class="col-auto">
            <a href="/exportpdfkeluar" class="btn btn-info" style="margin-bottom:1rem;">Rekap Surat</a>
        </div>
    </div>
    @if (!empty($message))
        <p>{{ $message }}</p>
    @elseif (!empty($data))
    <div class="table-responsive">
    <table class="table-responsive" style="text-align:center; font-size:14px;">
        <thead>
            <tr>
                <th scope="col">Nomor Agenda</th>
                <th scope="col">Nomor Surat</th>
                <th scope="col">Jenis Surat</th>
                <th scope="col">Surat dari</th>
                <th scope="col">Perihal</th>
                <th scope="col">KKA</th>
                <th scope="col">Dasar Pembuatan Surat</th>
                <th scope="col">Tanggal Surat</th>
                <th scope="col">Jam Diterima Surat</th>
                <th scope="col">Disposisi kepada</th>
                <th scope="col">Distribusi</th>
                <th scope="col">Isi Disposisi</th>
                <th scope="col">Feedback</th>
                <th scope="col">File</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $row->no_agenda }}</th>
                        <td>{{ $row->no_surat }}</td>
                        <td>{{ $row->jenis_surat }}</td>
                        <td>{{ $row->asal_surat }}</td>
                        <td>{{ $row->perihal }}</td>
                        <td>{{ $row->kka }}</td>
                        <td>{{ $row->dasar_surat }}</td>
                        <td>{{ date('d-m-Y', strtotime($row->tgl_surat)) }}</td>
                        <td>{{ $row->jam_surat }}</td>
                        <td>{{ $row->disposisi }}</td>
                        <td>{{ $row->distribusi }}</td>
                        <td>{{ $row->isi_disposisi }}</td>
                        <td>{{ $row->feedback }}</td>
                        <td>
                            <a href="dokumensuratkeluar/{{ $row->file }}" class="btn btn-success"
                                style="font-size: 13px;">Download</a>
                        </td>
                        <td><a href="/tampilkandatakeluar/{{ $row->id }}" class="btn btn-primary"
                                style="font-size: 13px;">Edit</button></td>
                        <!-- <td><a href="/deletekeluar/{{ $row->id }}" class="btn btn-danger"
                                style="font-size: 13px;">Delete</button></td> -->
                                <td scope="row">
    <a href="#" class="btn btn-danger delete-button"
       data-id="{{ $row->id }}" style="font-size: 13px">Delete</a>
</td>
                    </tr>
                @endforeach
    @endif
    </tbody>
    </table>
</div>
    @include('sweetalert::alert')
    <!-- Masukkan ini di dalam bagian <head> atau sebelum penutup </body> -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var deleteButtons = document.querySelectorAll(".delete-button");

        deleteButtons.forEach(function(button) {
            button.addEventListener("click", function(event) {
                event.preventDefault();

                var confirmDelete = confirm("Apakah Anda yakin ingin menghapus data ini?");
                if (confirmDelete) {
                    var dataId = this.getAttribute("data-id");
                    window.location.href = '/deletekeluar/' + dataId; // Ganti dengan URL delete yang sesuai
                }
            });
        });
    });
</script>

    {{ $data->links() }}
@endsection
