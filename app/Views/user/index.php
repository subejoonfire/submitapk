<?= $this->extend('user/Layout/main') ?>

<?= $this->section('content') ?>
<h1>Data Pengajuan</h1>

<?php if (session()->getFlashdata('success')): ?>
<div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
<?php endif; ?>

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
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($submissions)): ?>
        <?php $no = 1;
            foreach ($submissions as $submission): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= esc($submission['nama_pengaju']); ?></td>
            <td><?= esc($submission['no_hp']); ?></td>
            <td><a href="<?= esc($submission['link_drive']); ?>" target="_blank">Lihat</a></td>
            <td><a href="<?= base_url('uploads/pdf/' . $submission['file_pdf']); ?>" target="_blank">Download</a></td>
            <td><a href="<?= base_url('uploads/rar/' . $submission['file_rar']); ?>" target="_blank">Download</a></td>
            <td><?= esc($submission['status']); ?></td>
        </tr>
        <?php endforeach; ?>
        <?php else: ?>
        <tr>
            <td colspan="8" class="text-center">Tidak ada data</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
<?= $this->endSection() ?>