<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD FILM</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">\
</head>
<body>
    <h1>CRUD FILM</h1>

    <h3>{{ isset($edit_data) ? 'Edit Data' : 'Tambah Data' }}</h3>
    <form action="{{ isset($edit_data) ? route('penerbangan.update', $edit_data->id) : route('penerbangan.store') }}" method="POST">
        @csrf
        <label>Nama Penonton:</label>
        <input type="text" name="nama_pemesanan" value="{{ $edit_data->nama_pemesanan ?? '' }}" required>
        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="{{ $edit_data->tanggal ?? '' }}" required>
        <label>Film:</label>
        <input type="text" name="jenis_pesawat" value="{{ $edit_data->jenis_pesawat ?? '' }}" required>
        <button type="submit">{{ isset($edit_data) ? 'Update' : 'Simpan' }}</button>
    </form>

    <a href="{{ route('penerbangan.cetakPdf') }}" target="_blank">Cetak PDF</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Penonton</th>
                <th>Tanggal</th>
                <th>Film</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->nama_pemesanan }}</td>
                    <td>{{ $row->tanggal }}</td>
                    <td>{{ $row->jenis_pesawat }}</td>
                    <td>
                        <a href="{{ route('penerbangan.edit', $row->id) }}">Edit</a>
                        <a href="{{ route('penerbangan.destroy', $row->id) }}" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
