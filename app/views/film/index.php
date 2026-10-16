<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Film</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Daftar Film</h2>

    <?php if (isset($_GET['success'])): ?>
        <p style="color: green;">
            <?php
            if ($_GET['success'] === 'created') echo 'Film berhasil ditambahkan.';
            elseif ($_GET['success'] === 'updated') echo 'Film berhasil diperbarui.';
            elseif ($_GET['success'] === 'deleted') echo 'Film berhasil dihapus.';
            ?>
        </p>
    <?php endif; ?>

    <?php if (isset($_GET['error'])): ?>
        <p style="color: red;">Operasi gagal. Silakan coba lagi.</p>
    <?php endif; ?>

    <a href="index.php?page=film&action=create">Tambah Data</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Judul</th>
            <th>Genre</th>
            <th>Tahun Rilis</th>
            <th>Sutradara</th>
            <th>Durasi (menit)</th>
            <th>Rating</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($film as $f): ?>
        <tr>
            <td><?= htmlspecialchars($f['judul']) ?></td>
            <td><?= htmlspecialchars($f['genre']) ?></td>
            <td><?= htmlspecialchars($f['tahun_rilis']) ?></td>
            <td><?= htmlspecialchars($f['sutradara']) ?></td>
            <td><?= htmlspecialchars($f['durasi']) ?></td>
            <td><?= htmlspecialchars($f['rating']) ?></td>
            <td>
                <a href="index.php?page=film&action=edit&id=<?= $f['id'] ?>">Edit</a>

                <form method="post"
                      action="index.php?page=film&action=delete"
                      style="display:inline"
                      onsubmit="return confirm('Hapus data ini?')">
                    <input type="hidden" name="id" value="<?= $f['id'] ?>">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>