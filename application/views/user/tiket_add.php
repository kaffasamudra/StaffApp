<!DOCTYPE html>
<html>
<h1>Tambah Tiket</h1>
<form action="<?= site_url('tiketing/save') ?>" method="post">
    <label>Username:</label>
    <input type="text" name="username" required><br>

    <label>Bagian:</label>
    <select name="bagian" required>
        <option value="">Pilih Bagian</option>
        <option value="Administrasi">Administrasi</option>
        <option value="Keuangan">Keuangan</option>
        <option value="Produksi">Produksi</option>
        <option value="Pemasaran">Pemasaran</option>
    </select><br>


    <label>Tipe Request:</label>
    <input type="text" name="tipe_request" required><br>

    <label>Detail:</label>
    <textarea name="detail" required></textarea><br>

    <label>Prioritas:</label>
    <select name="prioritas">
        <option value="low">Low</option>
        <option value="medium">Medium</option>
        <option value="high">High</option>
    </select><br>

    <button type="submit">Simpan</button>
</form>
</html>