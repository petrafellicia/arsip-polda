<!DOCTYPE html>
<html>
<head>
    <title>Pilih Bulan Rekap Surat</title>
</head>
<body>
    <h1>Pilih Bulan untuk Rekap Surat</h1>
    <form action="{{ route('exportpdfkeluar') }}" method="post">
        @csrf
        <label for="bulan">Pilih Bulan:</label>
        <select name="bulan" id="bulan">
            <option value="1">Januari</option>
            <option value="02">Februari</option>
        <option value="03">Maret</option>
        <option value="04">April</option>
        <option value="05">Mei</option>
        <option value="06">Juni</option>
        <option value="07">Juli</option>
        <option value="08">Agustus</option>
        <option value="09">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
            <option value="12">Desember</option>
        </select>
        <button type="submit">Generate PDF</button>
    </form>
</body>
</html>
