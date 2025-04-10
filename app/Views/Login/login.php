<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Aplikasi</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
    .login-bg {
        background-image: url('Assets/dist/images/login-new.jpeg');
        background-size: cover;
        background-position: center;
    }
    </style>
</head>

<body class="min-h-screen login-bg flex items-center justify-center">
    <div class="bg-white rounded-3 shadow-lg p-5 w-full max-w-md">
        <h2 class="text-center text-2xl font-bold text-gray-800 mb-4">Masuk</h2>

        <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
        <form action="<?= base_url('loginAction') ?>" method="POST" novalidate>
            <div class="mb-3">
                <label for="username" class="form-label text-sm text-gray-700">Nama Pengguna</label>
                <input type="text" class="form-control" id="username" name="username"
                    placeholder="Masukkan nama pengguna" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-sm text-gray-700">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Masukkan kata sandi" required>
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-dark">Masuk</button>
            </div>
            <div class="text-center text-sm">
                <a href="#" class="text-decoration-none text-blue-600 hover:underline">Lupa kata sandi?</a>
            </div>
            <div class="text-center mt-2 text-sm">
                <span>Belum punya akun?</span>
                <a href="<?= base_url('register') ?>" class="text-blue-600 hover:underline">Daftar sekarang</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>