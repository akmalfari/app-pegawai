<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>
    
</head>
<body>
    <div class="container">
        <h1>Edit Data Pegawai</h1>
        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <table>
                <tr>
                    <td><label for="nama_lengkap">Nama Lengkap:</label></td>
                    <td><input type="text" name="nama_lengkap" value="{{ $employee->nama_lengkap }}" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="email" value="{{ $employee->email }}" required></td>
                </tr>
                <tr>
                    <td><label for="nomor_telepon">Nomor Telepon:</label></td>
                    <td><input type="text" name="nomor_telepon" value="{{ $employee->nomor_telepon }}" required></td>
                </tr>
                <tr>
                    <td><label for="tanggal_lahir">Tanggal Lahir:</label></td>
                    <td><input type="date" name="tanggal_lahir" value="{{ $employee->tanggal_lahir }}" required></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat:</label></td>
                    <td><input type="text" name="alamat" value="{{ $employee->alamat }}" required></td>
                </tr>
                <tr>
                    <td><label for="status">Status:</label></td>
                    <td>
                        <select name="status" required>
                            <option value="Aktif" {{ $employee->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Tidak Aktif" {{ $employee->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button type="submit">Update</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
