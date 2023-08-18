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
           

            <div class="col-auto">
                <a href="/exportpdfmasuk" class="btn btn-info">Rekap Surat</a>
            </div>
       
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
                        <td>{{ $row->nomor_surat }}</td>
                        <td>{{ $row->jenis_surat }}</td>
                        <td>{{ $row->asal_surat }}</td>
                        <td>{{ $row->perihal }}</td>
                        <td>{{ $row->kka }}</td>
                        <td>{{ date('d-m-Y', strtotime($row->tanggal_surat)) }}</td>
                        <td>{{ $row->jam_terima }}</td>
                        <td>{{ $row->disposisi_kepada }}</td>
                        <td>{{ $row->distribusi }}</td>
                        <td>{{ $row->isi_disposisi }}</td>
                        <td>{{ $row->keterangan }}</td>
                        <td>
                            <a href="dokumensuratmasuk/{{ $row->file }}" class="btn btn-success"
                                style="font-size: 13px">Download</a>
                        </td>
                        <td scope="row"><a href="/tampilkandatamasuk/{{ $row->id }}" class="btn btn-primary"
                                style="font-size: 13px">Edit</td>
                        <!-- <td scope="row"><a href="/deletemasuk/{{ $row->id }}" class="btn btn-danger"
                                style="font-size: 13px">Delete -->
                                <td scope="row">
    <a href="#" class="btn btn-danger delete-button"
       data-id="{{ $row->id }}" style="font-size: 13px">Delete</a>
</td>

                        </td>
                    </tr>
                @endforeach
    @endif

    </tbody>
    </table>
</div>
    @include('sweetalert::alert')
    {{ $data->links() }}
@endsection
