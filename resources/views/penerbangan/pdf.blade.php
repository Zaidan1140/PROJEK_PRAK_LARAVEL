<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Pemesanan</title>
</head>
<body>
    <h3>Data Pemesanan</h3>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Penonton</th>
                <th>Tanggal</th>
                <th>FILM</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->nama_pemesanan }}</td>
                    <td>{{ $row->tanggal }}</td>
                    <td>{{ $row->jenis_pesawat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html><!DOCTYPE html>
