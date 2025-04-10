

<div class="container mt-5">
    <h2>Tambah Pengajuan Baru</h2>
    
    <?php if(session()->has('errors')): ?>
        <div class="alert alert-danger">
            <?php foreach(session('errors') as $error): ?>
                <?= $error ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/add') ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama_pengaju" class="form-label">Nama Pengaju</label>
            <input type="text" class="form-control" id="nama_pengaju" name="nama_pengaju" required>
        </div>
        
        <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>
        
        <div class="mb-3">
            <label for="file_pdf" class="form-label">File PDF</label>
            <input type="file" class="form-control" id="file_pdf" name="file_pdf" accept=".pdf" required>
        </div>
        
        <div class="mb-3">
            <label for="file_rar" class="form-label">File RAR</label>
            <input type="file" class="form-control" id="file_rar" name="file_rar" accept=".rar,.zip" required>
        </div>
        
        <div class="mb-3">
            <label for="link_drive" class="form-label">Link Drive</label>
            <input type="url" class="form-control" id="link_drive" name="link_drive" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?= base_url('admin') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
