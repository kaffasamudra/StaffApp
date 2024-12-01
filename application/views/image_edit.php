<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gambar</title>
</head>
<body>
    <h1>Edit Gambar</h1>
    <?php if ($this->session->flashdata('error')): ?>
        <p style="color:red;"><?= $this->session->flashdata('error') ?></p>
    <?php endif; ?>

    <form action="<?= base_url('image/update/' . $avatar->id) ?>" method="post" enctype="multipart/form-data">
        <p>Gambar Sekarang:</p>
        <img src="<?= base_url('uploads/' . $avatar->avatar) ?>" width="200">
        <br><br>
        <label for="avatar">Ganti Gambar:</label>
        <input type="file" name="avatar" id="avatar">
        <br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
