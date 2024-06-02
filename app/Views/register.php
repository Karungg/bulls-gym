<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('stisla/') ?>node_modules/selectric/public/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('stisla/') ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('stisla/') ?>assets/css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <div class="login-brand">
                            <img src="<?= base_url() ?>/assets/img/logo.png" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <div class="wizard-steps">
                                            <div class="wizard-step wizard-step-active">
                                                <div class="wizard-step-icon">
                                                    <i class="far fa-user"></i>
                                                </div>
                                                <div class="wizard-step-label">Data Diri</div>
                                            </div>
                                            <div class="wizard-step">
                                                <div class="wizard-step-icon">
                                                    <i class="fas fa-box-open"></i>
                                                </div>
                                                <div class="wizard-step-label">Pilih Paket</div>
                                            </div>
                                            <div class="wizard-step">
                                                <div class="wizard-step-icon">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <div class="wizard-step-label">Buat Akun Baru</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="<?= base_url('register') ?>" method="post" class="wizard-content mt-2">
                                    <!-- Step 1 -->
                                    <div class="wizard-pane">

                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap">
                                            <div class="invalid-feedback">
                                                Nama lengkap harus diisi.
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="tgl_lahir">Tanggal Lahir</label>
                                                <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir">
                                                <div class="invalid-feedback">
                                                    Tanggal lahir harus diisi.
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="pria" checked />
                                                    <label class="form-check-label" for="pria">
                                                        Pria
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita" checked />
                                                    <label class="form-check-label" for="wanita">
                                                        Wanita
                                                    </label>
                                                </div>
                                                <div class="invalid-feedback">
                                                    Jenis kelamin harus diisi.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="email" class="d-block">Email</label>
                                                <input id="email" type="email" class="form-control" name="email">
                                                <div class="invalid-feedback">
                                                    Email harus diisi.
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="no_telp" class="d-block">Nomor Telepon</label>
                                                <input id="no_telp" type="number" class="form-control" name="no_telp">
                                                <div class="invalid-feedback">
                                                    Nomor telepon harus diisi.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="no_ktp">Nomor KTP</label>
                                                <input id="no_ktp" type="number" class="form-control" name="no_ktp">
                                                <div class="invalid-feedback">
                                                    Nomor KTP harus diisi.
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="alamat">Alamat</label>
                                                <textarea id="alamat" class="form-control" name="alamat"></textarea>
                                                <div class="invalid-feedback">Alamat harus diisi.</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="foto_ktp">Foto KTP</label>
                                                <input id="foto_ktp" type="file" class="form-control" name="foto_ktp">
                                                <div class="invalid-feedback">
                                                    Foto KTP harus diisi.
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Foto Diri</label>
                                                <input id="foto_diri" type="file" class="form-control" name="foto_diri">
                                                <div class="invalid-feedback">
                                                    Foto diri harus diisi.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 text-right">
                                                <button type="button" onclick="validate(this)" class="btn btn-icon icon-right btn-primary btn-next">
                                                    Selanjutnya <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Step 1 -->

                                    <!-- Step 2 -->
                                    <div class="wizard-pane d-none">
                                        <div class="row justify-content-center">
                                            <?php foreach ($packages as $package) : ?>
                                                <div class="col-12 col-md-4 col-lg-4">
                                                    <div class="pricing">
                                                        <div class="pricing-title"><?= $package['nama_paket'] ?></div>
                                                        <div class="pricing-padding">
                                                            <div class="pricing-price">
                                                                <h4>Rp. <?= number_format($package['harga']) ?></h4>
                                                                <div><?= $package['durasi'] ?> Bulan</div>
                                                            </div>
                                                            <div class="pricing-details">
                                                                <div class="pricing-item">
                                                                    <div class="pricing-item-label">
                                                                        <?= $package['deskripsi'] ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pricing-cta">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="icon-input" value="<?= $package['id_paket'] ?>" class="selectgroup-input" checked="" />
                                                                <span class="selectgroup-button selectgroup-button-icon">
                                                                    Pilih Paket</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 text-right">
                                                <button type="button" onclick="showPrevious(this)" class="btn btn-icon icon-right btn-primary btn-previous">
                                                    <i class="fas fa-arrow-left"></i> Sebelumnya
                                                </button>
                                                <button type="button" onclick="validate(this)" class="btn btn-icon icon-right btn-primary btn-next">
                                                    Selanjutnya <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Step 2 -->

                                    <!-- Step 3 -->
                                    <div class="wizard-pane d-none">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input id="username" type="text" class="form-control" name="username">
                                            <div class="invalid-feedback">
                                                Username harus diisi.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input id="password" type="password" class="form-control" name="password">
                                            <div class="invalid-feedback">
                                                Username harus diisi.
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 text-right">
                                                <button type="button" onclick="showPrevious(this)" class="btn btn-icon icon-right btn-primary btn-previous">
                                                    <i class="fas fa-arrow-left"></i> Sebelumnya
                                                </button>
                                                <button type="submit" class="btn btn-icon icon-right btn-primary btn-next">
                                                    Kirim
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Step 3 -->
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Stisla 2018
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url('stisla/') ?>assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url('stisla/') ?>node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="<?= base_url('stisla/') ?>node_modules/selectric/public/jquery.selectric.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url('stisla/') ?>assets/js/scripts.js"></script>
    <script src="<?= base_url('stisla/') ?>assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url('stisla/') ?>assets/js/page/auth-register.js"></script>
    <script src="<?= base_url('assets/') ?>js/wizard.js"></script>
</body>

</html>