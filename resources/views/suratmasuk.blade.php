@extends('layouts.main')

@section('container')
    <h1>Daftar Surat Masuk</h1>
    <hr>
    </hr>
    <div class="container-fluid">
        <a href="/mails">Back to Mails</a>
        <button type="button"
            style=" float:right; width:150px; height:40px; border-radius:26.5px; --bs-btn-padding-y: .50rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; border:none; outline:none; padding:8px; cursor:pointer; background:#216588;">
            <a style="color:white; justify-content:center; text-decoration:none;" href="/masuk">Tambah Surat</a></button>
        <form action="/daftar-surat-masuk/search" method="GET" class="d-flex justify-content-end"
            style="margin-top:30px; margin-bottom:10px;" role="search">

            <input class="form-control w-25 me-2" name="search" type="search" value="{{ request('search') }}"
                placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>

        </form>
    </div>
    @if (!empty($pesan))
        <p>{{ $pesan }}</p>
    @elseif (!empty($data))
        <table class="table" style="text-align:center; font-size:14px; ">
            <thead>
                <tr>
                    <th scope="col">Nomor Agenda</th>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col">Jenis Surat</th>
                    <th scope="col">Surat dari</th>
                    <th scope="col">Perihal</th>
                    <th scope="col">KKA</th>
                    <th scope="col">Tanggal Surat</th>
                    <th scope="col">Jam Diterima </th>
                    <th scope="col">Disposisi</th>
                    <th scope="col">Distribusi</th>
                    <th scope="col">Isi Disposisi</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Dokumen</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">


                @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $row->nomor_agenda }}</th>
                        <td scope="row">{{ $row->nomor_surat }}</td>
                        <td scope="row">{{ $row->jenis_surat }}</td>
                        <td scope="row">{{ $row->asal_surat }}</td>
                        <td scope="row">{{ $row->perihal }}</td>
                        <td scope="row">{{ $row->kka }}</td>
                        <td scope="row">{{ date('d-m-Y', strtotime($row->tanggal_surat)) }}</td>
                        <td scope="row">{{ $row->jam_terima }}</td>
                        <td scope="row">{{ $row->disposisi_kepada }}</td>
                        <td scope="row">{{ $row->distribusi }}</td>
                        <td scope="row">{{ $row->isi_disposisi }}</td>
                        <td scope="row">{{ $row->keterangan }}</td>
                        <td scope="row">
                            <a href="dokumensuratmasuk/{{ $row->file }}" class="btn btn-success"
                                style="font-size: 13px">Download</a>
                        </td>
                        <td scope="row"><a href="/tampilkandatamasuk/{{ $row->id }}" class="btn btn-primary"
                                style="font-size: 13px">Edit</td>
                        <td scope="row"><a href="/deletemasuk/{{ $row->id }}" class="btn btn-danger"
                                style="font-size: 13px">Delete
                        </td>
                    </tr>
                @endforeach
    @endif

    </tbody>
    </table>
    @include('sweetalert::alert')
    {{ $data->links() }}
@endsection
