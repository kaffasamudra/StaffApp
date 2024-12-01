<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
</head>
<body>
    <h1>Users</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Avatar</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user->id; ?></td>
            <td><?= $user->nama; ?></td>
            <td>
                <?php if($user->avatar): ?>
                    <img src="<?= base_url('uploads/' . $user->avatar); ?>" width="50" height="50">
                <?php else: ?>
                    <p>No Avatar</p>
                <?php endif; ?>
            </td>
            <td><?= $user->alamat; ?></td>
            <td>
                <!-- Form Edit Avatar -->
                <form action="<?= site_url('user/editAvatar/' . $user->id); ?>" method="post" enctype="multipart/form-data">
                    <input type="file" name="avatar" required>
                    <button type="submit">Edit Avatar</button>
                </form>
                <!-- Form Delete Avatar -->
                <form action="<?= site_url('user/deleteAvatar/' . $user->id); ?>" method="post">
                    <button type="submit">Delete Avatar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add Avatar</h2>
    <!-- Form Tambah Avatar -->
    <form action="<?= site_url('user/addAvatar'); ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="avatar" required>
        <button type="submit">Add Avatar</button>
    </form>
</body>
</html>
