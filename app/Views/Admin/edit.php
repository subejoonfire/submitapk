<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengajuan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        max-width: 600px;
        margin-top: 50px;
        padding: 30px;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 30px;
    }

    .alert {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }
    </style>

    <div class="container mt-5">
        <h2>Edit Pengajuan</h2>

        <form action="<?= base_url('admin/edit/' . $data_pengajuan['id']) ?>" method="post"
            enctype="multipart/form-data">
            <?= csrf_field() ?>

            <input type="hidden" name="_method" value="PUT">
            <div class="mb-3">
                <label for="nama_pengaju" class="form-label">Nama Pengaju</label>
                <input type="text" class="form-control" id="nama_pengaju" name="nama_pengaju"
                    value="<?= $data_pengajuan['nama_pengaju'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="no_hp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $data_pengajuan['no_hp'] ?>"
                    required>
            </div>

            <div class="mb-3">
                <label for="file_pdf" class="form-label">File PDF (Biarkan kosong jika tidak ingin mengubah)</label>
                <input type="file" class="form-control" id="file_pdf" name="file_pdf" accept=".pdf">
                <small>File saat ini: <?= $data_pengajuan['file_pdf'] ?></small>
            </div>

            <div class="mb-3">
                <label for="file_rar" class="form-label">File RAR (Biarkan kosong jika tidak ingin mengubah)</label>
                <input type="file" class="form-control" id="file_rar" name="file_rar" accept=".rar,.zip">
                <small>File saat ini: <?= $data_pengajuan['file_rar'] ?></small>
            </div>

            <div class="mb-3">
                <label for="link_drive" class="form-label">Link Drive</label>
                <input type="url" class="form-control" id="link_drive" name="link_drive"
                    value="<?= $data_pengajuan['link_drive'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="diajukan" <?= $data_pengajuan['status'] == 'diajukan' ? 'selected' : '' ?>>Diajukan
                    </option>
                    <option value="diproses" <?= $data_pengajuan['status'] == 'diproses' ? 'selected' : '' ?>>Diproses
                    </option>
                    <option value="selesai" <?= $data_pengajuan['status'] == 'selesai' ? 'selected' : '' ?>>Selesai
                    </option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('admin') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>