<h1>Detail Jurusan</h1>

<p><strong>ID:</strong> {{ $jurusan->id }}</p>

<p><strong>Kode:</strong> {{ $jurusan->kode }}</p>

<p><strong>Nama:</strong> {{ $jurusan->nama }}</p>

<p><strong>Dibuat:</strong> {{ $jurusan->created_at?->format('d-m-Y H:i') }}</p>

<p>
    <a href="{{ url('/jurusan') }}">Kembali ke daftar</a>
</p>
