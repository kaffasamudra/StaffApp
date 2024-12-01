<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Gambar</title>
</head>
<body>
    <h1>Daftar Gambar</h1>
    <a href="<?= base_url('image/upload') ?>">Unggah Gambar</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $image): ?>
            <tr>
                <td><?= $image->id ?></td>
                <td>
                    <img src="<?= base_url('uploads/'.$image->avatar) ?>" width="100">
                    <a href="<?= base_url('image/edit/' . $image->id) ?>">Edit</a> 
                    <a href="<?= base_url('image/delete/'.$image->id) ?>" onclick="return confirm('Yakin ingin menghapus gambar ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
