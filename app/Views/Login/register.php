<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register | Aplikasi</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
    .register-bg {
        background-image: url('Assets/dist/images/login-new.jpeg');
        background-size: cover;
        background-position: center;
    }
    </style>
</head>

<body class="min-vh-100 register-bg d-flex align-items-center justify-content-center px-4">
    <div class="bg-white rounded-4 shadow-lg p-5 w-100" style="max-width: 500px;">
        <div class="text-center mb-4">
            <i class="fas fa-user-plus fa-3x text-dark mb-2"></i>
            <h2 class="text-2xl fw-bold text-dark">Daftar Akun</h2>
        </div>

        <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <form action="<?= base_url('registerAction') ?>" method="POST" novalidate>
            <div class="mb-3">
                <label for="username" class="form-label text-sm text-muted">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username"
                    required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-sm text-muted">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Masukkan kata sandi" required>
            </div>

            <div class="mb-3">
                <label for="confirm_password" class="form-label text-sm text-muted">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                    placeholder="Ulangi kata sandi" required>
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-dark w-100">Daftar</button>
            </div>

            <div class="text-center text-sm">
                <span>Sudah punya akun?</span>
                <a href="<?= base_url('/') ?>" class="text-blue-600 hover:underline">Masuk sekarang</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>