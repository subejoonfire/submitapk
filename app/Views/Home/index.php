<?= view('Home/LayoutH/header') ?>


<!-- About Start -->
<div class="container-fluid overflow-hidden py-5" style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="RotateMoveLeft">
                    <img src="Assets_home/img/about-1.png" class="img-fluid w-100" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h4 class="mb-1 text-primary">About Us</h4>
                <h1 class="display-5 mb-4">Get Started Easily With a Personalized Product Tour</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, suscipit itaque quaerat dicta porro illum, autem, molestias ut animi ab aspernatur dolorum officia nam dolore. Voluptatibus aliquam earum labore atque.
                </p>
                <a href="#" class="btn btn-primary rounded-pill py-3 px-5">About More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
            <h4 class="mb-1 text-primary">SUBMIT</h4>
            <h1 class="display-5 mb-4">What We Can Do For You</h1>
            <p class="mb-0">Masukan data sesuai dengan kolom
            </p>
        </div>

        <div class="container mt-5">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Form Pengajuan</h4>
                </div>
                <div class="card-body">
                    <?php if (session()->has('errors')): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php foreach (session()->get('errors') as $error): ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->has('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->get('success') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('submit-pengajuan') ?>" method="post" enctype="multipart/form-data">
                        <!-- Nama -->
                        <div class="mb-3">
                            <label for="nama_pengaju" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_pengaju" name="nama_pengaju"
                                value="<?= old('nama_pengaju') ?>" placeholder="Masukkan nama lengkap Anda" required>
                        </div>

                        <!-- No HP -->
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">Nomor Handphone</label>
                            <div class="input-group">
                                <span class="input-group-text">+62</span>
                                <input type="tel" class="form-control" id="no_hp" name="no_hp"
                                    value="<?= old('no_hp') ?>" placeholder="8xxxxxxxxxx" required
                                    pattern="[0-9]{10,}" title="Masukkan nomor HP yang valid">
                            </div>
                            <small class="text-muted">Contoh: 81234567890</small>
                        </div>

                        <!-- Link Drive -->
                        <div class="mb-3">
                            <label for="link_drive" class="form-label">Link Google Drive</label>
                            <input type="url" class="form-control" id="link_drive" name="link_drive"
                                value="<?= old('link_drive') ?>" placeholder="https://drive.google.com/..." required>
                            <small class="text-muted">Pastikan link dapat diakses secara publik</small>
                        </div>

                        <!-- File PDF -->
                        <div class="mb-3">
                            <label for="file_pdf" class="form-label">Upload File PDF</label>
                            <input type="file" class="form-control" id="file_pdf" name="file_pdf"
                                accept=".pdf" required>
                            <small class="text-muted">Maksimal ukuran file: 2MB</small>
                        </div>

                        <!-- File RAR -->
                        <div class="mb-3">
                            <label for="file_rar" class="form-label">Upload File RAR/ZIP</label>
                            <input type="file" class="form-control" id="file_rar" name="file_rar"
                                accept=".rar,.zip" required>
                            <small class="text-muted">Maksimal ukuran file: 5MB</small>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-send-fill me-2"></i>Kirim Pengajuan
                            </button>
                            <button type="reset" class="btn btn-outline-secondary">
                                Reset Form
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Service End -->


        <!-- Feature Start -->
        <div class="container-fluid feature overflow-hidden py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="text-primary">Our Feature</h4>
                    <h1 class="display-5 mb-4">Important Features For Email Marketing</h1>
                    <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
                    </p>
                </div>
                <div class="row g-4 justify-content-center text-center mb-5">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="text-center p-4">
                            <div class="d-inline-block rounded bg-light p-4 mb-4"><i class="fas fa-envelope fa-5x text-secondary"></i></div>
                            <div class="feature-content">
                                <a href="#" class="h4">Email Marketing <i class="fa fa-long-arrow-alt-right"></i></a>
                                <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="text-center p-4">
                            <div class="d-inline-block rounded bg-light p-4 mb-4"><i class="fas fa-mail-bulk fa-5x text-secondary"></i></div>
                            <div class="feature-content">
                                <a href="#" class="h4">Email Builder <i class="fa fa-long-arrow-alt-right"></i></a>
                                <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center rounded p-4">
                            <div class="d-inline-block rounded bg-light p-4 mb-4"><i class="fas fa-sitemap fa-5x text-secondary"></i></div>
                            <div class="feature-content">
                                <a href="#" class="h4">Customer Builder <i class="fa fa-long-arrow-alt-right"></i></a>
                                <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="text-center rounded p-4">
                            <div class="d-inline-block rounded bg-light p-4 mb-4"><i class="fas fa-tasks fa-5x text-secondary"></i></div>
                            <div class="feature-content">
                                <a href="#" class="h4">Campaign Manager <i class="fa fa-long-arrow-alt-right"></i></a>
                                <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="my-3">
                            <a href="#" class="btn btn-primary d-inline rounded-pill px-5 py-3">More Features</a>
                        </div>
                    </div>
                </div>

                <!-- Feature End -->

                <?= view('Home/LayoutH/footer') ?>