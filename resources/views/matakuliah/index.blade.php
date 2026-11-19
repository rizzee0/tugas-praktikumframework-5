<h1>Daftar Mata Kuliah</h1>

@if (session('success'))
    <p style="color:green">
        {{ session('success') }}
    </p>
@endif

<a href="{{ route('matakuliah.create') }}">
    Tambah Mata Kuliah
</a>

<br><br>

<table border="1" cellpadding="6">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Detail</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($matakuliahs as $m)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $m->kode_matakuliah }}</td>
                <td>{{ $m->nama_matakuliah }}</td>
                <td>{{ $m->sks }}</td>
                <td>
                    <a href="{{ route('matakuliah.show', $m->id) }}">
                        Lihat Detail
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data mata kuliah.</td>
            </tr>
        @endforelse
    </tbody>
</table>
