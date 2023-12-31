<form action="{{ route('pegawai.store') }}" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>

    <label for="posisi">Posisi:</label>
    <input type="text" name="posisi" required>

    <label for="gaji">Gaji:</label>
    <input type="text" name="gaji" required>

    <label for="tanggal_masuk">Tanggal Masuk:</label>
    <input type="date" name="tanggal_masuk" required>

    <label for="alamat">Alamat:</label>
    <textarea name="alamat" required></textarea>

    <button type="submit">Simpan</button>
</form>