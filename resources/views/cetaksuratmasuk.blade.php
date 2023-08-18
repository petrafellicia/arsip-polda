<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        @page {
            size: landscape;
        }
    </style>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Surat Masuk</b></p>
        <table id="customers">
            <tr>
                <th>No</th>
                <th>Nomor Agenda</th>
                <th>Nomor Surat</th>
                <th>Jenis Surat</th>
                <th>Surat Dari</th>
                <th>Perihal</th>
                <th>KKA</th>
                <th>Tanggal Surat</th>
                <th>Jam Diterima</th>
                <th>Disposisi</th>
                <th>Distribusi</th>
                <th>Isi Disposisi</th>
                <th>Keterangan</th>
            </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td scope="row">{{ $row->nomor_agenda }}</td>
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
                </tr>
            @endforeach

        </table>
    </div>
</body>

</html>
