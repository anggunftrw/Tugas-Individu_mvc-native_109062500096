<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Film</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Edit Film</h2>

    <form method="post" action="index.php?page=film&action=update">
        <input type="hidden" name="id" value="<?= $film['id'] ?>">

        <label>Judul</label><br>
        <input type="text" name="judul"
               value="<?= htmlspecialchars($film['judul']) ?>" required><br><br>

        <label>Genre</label><br>
        <input type="text" name="genre"
               value="<?= htmlspecialchars($film['genre']) ?>" required><br><br>

        <label>Tahun Rilis</label><br>
        <input type="number" name="tahun_rilis"
               value="<?= htmlspecialchars($film['tahun_rilis']) ?>" required min="1900" max="2030"><br><br>

        <label>Sutradara</label><br>
        <input type="text" name="sutradara"
               value="<?= htmlspecialchars($film['sutradara']) ?>" required><br><br>

        <label>Durasi (menit)</label><br>
        <input type="number" name="durasi"
               value="<?= htmlspecialchars($film['durasi']) ?>" required min="1"><br><br>

        <label>Rating</label><br>
        <input type="number" name="rating"
               value="<?= htmlspecialchars($film['rating']) ?>" required step="0.1" min="0" max="10"><br><br>

        <button type="submit">Update</button>
        <a href="index.php?page=film">Kembali</a>
    </form>
</body>
</html>