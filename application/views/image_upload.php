<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah Gambar</title>
</head>
<body>
    <h1>Unggah Gambar</h1>
    <?php if ($this->session->flashdata('error')): ?>
        <p style="color:red;"><?= $this->session->flashdata('error') ?></p>
    <?php endif; ?>
    
    <form action="<?= base_url('image/save') ?>" method="post" enctype="multipart/form-data">
        <label for="image">Pilih Gambar:</label>
        <input type="file" name="image" id="image">
        <br><br>
        <button type="submit">Unggah</button>
    </form>
</body>
</html>
