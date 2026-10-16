<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Film</title>
</head>
<body>
    <h2>Tambah Film</h2>

    <form method="post" action="index.php?page=film&action=store">
        <label>Judul</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Genre</label><br>
        <input type="text" name="genre" required><br><br>

        <label>Tahun Rilis</label><br>
        <input type="number" name="tahun_rilis" required min="1900" max="2030"><br><br>

        <label>Sutradara</label><br>
        <input type="text" name="sutradara" required><br><br>

        <label>Durasi (menit)</label><br>
        <input type="number" name="durasi" required min="1"><br><br>

        <label>Rating</label><br>
        <input type="number" name="rating" required step="0.1" min="0" max="10"><br><br>

        <button type="submit">Simpan</button>
        <a href="index.php?page=film">Kembali</a>
    </form>
</body>
</html>