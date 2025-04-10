<?= view('Admin/Layout/header') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengajuan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Pengajuan</h1>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif; ?>

        <a href="<?= base_url('admin/tambah'); ?>" class="btn btn-primary mb-3">Tambah Data</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengaju</th>
                    <th>No HP</th>
                    <th>Link Drive</th>
                    <th>File PDF</th>
                    <th>File RAR</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($submissions)): ?>
                    <?php $no = 1; foreach ($submissions as $submission): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= esc($submission['nama_pengaju']); ?></td>
                            <td><?= esc($submission['no_hp']); ?></td>
                            <td><a href="<?= esc($submission['link_drive']); ?>" target="_blank">Lihat</a></td>
                            <td><a href="<?= base_url('uploads/pdf/' . $submission['file_pdf']); ?>" target="_blank">Download</a></td>
                            <td><a href="<?= base_url('uploads/rar/' . $submission['file_rar']); ?>" target="_blank">Download</a></td>
                            <td><?= esc($submission['status']); ?></td>
                            <td>
                                <a href="<?= base_url('admin/edit/' . $submission['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('admin/delete/' . $submission['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada data</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

        
<?= view('Admin/Layout/footer') ?>