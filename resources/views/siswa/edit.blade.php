<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>

<h2>Edit Data Siswa</h2>

<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama:</label><br>
    <input type="text" name="nama" value="{{ $siswa->nama }}" required><br><br>

    <label>Kelas:</label><br>
    <input type="text" name="kelas" value="{{ $siswa->kelas }}" required><br><br>

    <label>Jurusan:</label><br>
    <input type="text" name="jurusan" value="{{ $siswa->jurusan }}" required><br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="{{ route('siswa.index') }}">Kembali</a>

</body>
</html>
