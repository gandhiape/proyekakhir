<a href="{{ route('pegawai.create') }}">Tambah Pegawai</a>

@foreach($pegawai as $p)
    <p>{{ $p->nama }} - {{ $p->posisi }} - {{ $p->gaji }} - {{ $p->tanggal_masuk }} - {{ $p->alamat }}
        <a href="{{ route('pegawai.pedit', $p->id) }}">Edit</a>
        <a href="{{ route('pegawai.pshow', $p->id) }}">Detail</a>
        <form action="{{ route('pegawai.destroy', $p->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </p>
@endforeach