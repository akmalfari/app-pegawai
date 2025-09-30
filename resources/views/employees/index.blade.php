<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
</head>
<body>
    @extends('employees.master')
    @section('title','Daftar Pegawai')
    @section('content')
    <h1>Daftar Karyawan</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        @foreach ($employees as $emp)
        <tr>
            <td>{{ $emp->id }}</td>
            <td>{{ $emp->nama_lengkap }}</td>
            <td>{{ $emp->email }}</td>
            <td>{{ $emp->nomor_telepon }}</td>
            <td>{{ $emp->tanggal_lahir }}</td>
            <td>{{ $emp->alamat }}</td>
            <td>{{ $emp->status }}</td>
            <td>
                <a href="{{ route('employees.show', $emp->id) }}">Detail</a>
                <a href="{{ route('employees.edit', $emp->id) }}">Edit</a>
                <form action="{{ route('employees.destroy', $emp->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endsection
</body>
</html>
