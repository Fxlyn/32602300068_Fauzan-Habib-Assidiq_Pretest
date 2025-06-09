<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $m): ?>
            <li><?= $m->nim ?> - <?= $m->nama ?> - <?= $m->prodi ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
