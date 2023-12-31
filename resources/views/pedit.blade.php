<form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="{{ $pegawai->nama }}" required>

    <label for="posisi">Posisi:</label>
    <input type="text" name="posisi" value="{{ $pegawai->posisi }}" required>

    <label for="gaji">Gaji:</label>
    <input type="text" name="gaji" value="{{ $pegawai->gaji }}" required>

    <label for="tanggal_masuk">Tanggal Masuk:</label>
    <input type="date" name="tanggal_masuk" value="{{ $pegawai->tanggal_masuk }}" required>

    <label for="alamat">Alamat:</label>
    <textarea name="alamat" required>{{ $pegawai->alamat }}</textarea>

    <button type="submit">Simpan Perubahan</button>
</form>