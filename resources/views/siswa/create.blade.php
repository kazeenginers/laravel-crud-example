<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>

<h2>Tambah Siswa</h2>

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf

    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Kelas:</label><br>
    <input type="text" name="kelas" required><br><br>

    <label>Jurusan:</label><br>
    <input type="text" name="jurusan" required><br><br>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="{{ route('siswa.index') }}">Kembali</a>

</body>
</html>
