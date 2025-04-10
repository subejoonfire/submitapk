

<div class="container mt-5">
    <h2>Edit Pengajuan</h2>
    
    <form action="<?= base_url('admin/edit/'.$submission['id']) ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama_pengaju" class="form-label">Nama Pengaju</label>
            <input type="text" class="form-control" id="nama_pengaju" name="nama_pengaju" value="<?= $submission['nama_pengaju'] ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $submission['no_hp'] ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="file_pdf" class="form-label">File PDF (Biarkan kosong jika tidak ingin mengubah)</label>
            <input type="file" class="form-control" id="file_pdf" name="file_pdf" accept=".pdf">
            <small>File saat ini: <?= $submission['file_pdf'] ?></small>
        </div>
        
        <div class="mb-3">
            <label for="file_rar" class="form-label">File RAR (Biarkan kosong jika tidak ingin mengubah)</label>
            <input type="file" class="form-control" id="file_rar" name="file_rar" accept=".rar,.zip">
            <small>File saat ini: <?= $submission['file_rar'] ?></small>
        </div>
        
        <div class="mb-3">
            <label for="link_drive" class="form-label">Link Drive</label>
            <input type="url" class="form-control" id="link_drive" name="link_drive" value="<?= $submission['link_drive'] ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="diajukan" <?= $submission['status'] == 'diajukan' ? 'selected' : '' ?>>Diajukan</option>
                <option value="diproses" <?= $submission['status'] == 'diproses' ? 'selected' : '' ?>>Diproses</option>
                <option value="selesai" <?= $submission['status'] == 'selesai' ? 'selected' : '' ?>>Selesai</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('admin') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>