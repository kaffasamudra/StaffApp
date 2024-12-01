<!DOCTYPE html>
<html>

<h1>Edit Tiket</h1>
<form action="<?= site_url('tiket/update/'.$ticket->id) ?>" method="post">
    <label>Username:</label>
    <input type="text" name="username" value="<?= $ticket->username ?>"><br>

    <label>Bagian:</label>
    <input type="text" name="bagian" value="<?= $ticket->bagian ?>"><br>

    <label>Tipe Request:</label>
    <input type="text" name="tipe_request" value="<?= $ticket->tipe_request ?>"><br>

    <label>Detail:</label>
    <textarea name="detail"><?= $ticket->detail ?></textarea><br>

    <label>Prioritas:</label>
    <select name="prioritas">
        <option value="low" <?= ($ticket->prioritas == 'low') ? 'selected' : '' ?>>Low</option>
        <option value="medium" <?= ($ticket->prioritas == 'medium') ? 'selected' : '' ?>>Medium</option>
        <option value="high" <?= ($ticket->prioritas == 'high') ? 'selected' : '' ?>>High</option>
    </select><br>

    <label>Status:</label>
    <select name="status">
        <option value="open" <?= ($ticket->status == 'open') ? 'selected' : '' ?>>Open</option>
        <option value="in progress" <?= ($ticket->status == 'in progress') ? 'selected' : '' ?>>In Progress</option>
        <option value="complete" <?= ($ticket->status == 'complete') ? 'selected' : '' ?>>Complete</option>
    </select><br>

    <button type="submit">Update</button>
</form>
</html>