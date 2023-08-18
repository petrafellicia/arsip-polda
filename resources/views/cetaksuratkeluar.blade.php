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
        <p align="center"><b>Laporan Surat Keluar</b></p>
        <table id="customers">
            <tr>
                <th>No</th>
                <th>Nomor Agenda</th>
                <th>Nomor Surat</th>
                <th>Jenis Surat</th>
                <th>Surat dari</th>
                <th>Perihal</th>
                <th>KKA</th>
                <th>Dasar Pembuatan Surat</th>
                <th>Tanggal Surat</th>
                <th>Jam Diterima Surat</th>
                <th>Disposisi kepada</th>
                <th>Distribusi</th>
                <th>Isi Disposisi</th>
                <th>Feedback</th>
            </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->no_agenda }}</td>
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
                </tr>
            @endforeach

        </table>
    </div>
</body>

</html>
