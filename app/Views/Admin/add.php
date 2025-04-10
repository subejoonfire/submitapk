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
</head>

<body>

    <div class="container mt-5">
        <h2>Tambah Pengajuan Baru</h2>

        <?php if (session()->has('errors')): ?>
    <div class="alert alert-danger">
        <?php dd(session('errors')); ?>
        <?php foreach (session('errors') as $error): ?>
            <?= $error ?><br>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


        <form action="<?= base_url('admin-create') ?>" method="post" enctype="multipart/form-data">
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

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= base_url('/') ?>" class="btn btn-secondary ml-2">Kembali</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>