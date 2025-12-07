<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h2>Data Siswa</h2>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('siswa.create') }}">Tambah Siswa</a>

<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>

    @forelse($siswas as $siswa)
    <tr>
        <td>{{ $siswa->id }}</td>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->kelas }}</td>
        <td>{{ $siswa->jurusan }}</td>
        <td>
            <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>

            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5">Belum ada data siswa.</td>
    </tr>
    @endforelse
</table>

</body>
</html>
