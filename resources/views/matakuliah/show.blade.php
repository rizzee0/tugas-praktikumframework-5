<h1>Detail Mata Kuliah</h1>

<p>
    <strong>ID:</strong>
    {{ $matakuliah->id }}
</p>

<p>
    <strong>Diperbarui:</strong>
    {{ $matakuliah->updated_at?->format('d-m-Y H:i') }}
</p>

<p>
    <strong>Kode Mata Kuliah:</strong>
    {{ $matakuliah->kode_matakuliah }}
</p>

<p>
    <strong>Nama Mata Kuliah:</strong>
    {{ $matakuliah->nama_matakuliah }}
</p>

<p>
    <strong>SKS:</strong>
    {{ $matakuliah->sks }}
</p>

<p>
    <strong>Dibuat:</strong>
    {{ $matakuliah->created_at?->format('d-m-Y H:i') }}
</p>

<a href="{{ route('matakuliah.index') }}">
    Kembali ke daftar
</a>
