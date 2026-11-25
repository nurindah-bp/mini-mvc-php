<!DOCTYPE html>
<html>
<body>
    <h3>Daftar Pengguna</h3>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= $user ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>