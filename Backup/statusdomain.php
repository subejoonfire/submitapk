<?= view('Frontend/layout/header') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Status Domain</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Status Pengajuan Domain</h2>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Domain</th>
                    <th>Status</th>
                    <th>Tanggal Pengajuan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($domains as $domain): ?>
                <tr>
                    <td><?= $domain['nama_domain'] ?></td>
                    <td>
                        <span class="badge 
                            <?php 
                            switch($domain['status']) {
                                case 'diajukan': echo 'badge-warning'; break;
                                case 'diproses': echo 'badge-info'; break;
                                case 'selesai': echo 'badge-success'; break;
                            }
                            ?>">
                            <?= $domain['status'] ?>
                        </span>
                    </td>
                    <td><?= $domain['created_at'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?= view('Frontend/layout/footer') ?>