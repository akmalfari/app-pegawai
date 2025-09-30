<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
</head>
<body>
    <h1>Daftar Karyawan</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>Tanggal Lahir</th>
            <th>Status</th>
        </tr>
        @foreach ($employees as $emp)
        <tr>
            <td>{{ $emp->id }}</td>
            <td>{{ $emp->nama_lengkap }}</td>
            <td>{{ $emp->email }}</td>
            <td>{{ $emp->nomor_telepon }}</td>
            <td>{{ $emp->tanggal_lahir }}</td>
            <td>{{ $emp->status }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
