<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $this->renderSection('title') ?> | Bulls Gym</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('stisla/') ?>node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url('stisla/') ?>node_modules/weathericons/css/weather-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('stisla/') ?>node_modules/weathericons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="<?= base_url('stisla/') ?>node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url('stisla/') ?>node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('stisla/') ?>node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('stisla/') ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('stisla/') ?>assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <!-- Main Content -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-primary">Kembali</button>
                        </div>
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col-12 col-lg-8 offset-lg-2">
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
                                                <i class="fas fa-money-bill"></i>
                                            </div>
                                            <div class="wizard-step-label">Pembayaran</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form action="" class="wizard-content mt-2">
                                <!-- Step 1 -->
                                <div class="wizard-pane">
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Name</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="text" name="nama_lengkap" class="form-control" />
                                            <div class="invalid-feedback">
                                                Nama lengkap harus diisi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Jenis Kelamin</label>
                                        <div class="col-lg-4 col-md-6">
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
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Email</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="email" name="email" class="form-control" />
                                            <div class="invalid-feedback">Email harus diisi.</div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Nomor Telepon</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="number" name="no_telp" class="form-control" />
                                            <div class="invalid-feedback">
                                                Nomor telepon harus diisi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 text-md-right text-left mt-2">Alamat</label>
                                        <div class="col-lg-4 col-md-6">
                                            <textarea class="form-control" name="alamat"></textarea>
                                            <div class="invalid-feedback">Alamat harus diisi.</div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Tanggal Lahir</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="date" name="tgl_lahir" class="form-control" />
                                            <div class="invalid-feedback">
                                                Tanggal lahir harus diisi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Nomor KTP</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="number" name="no_ktp" class="form-control" />
                                            <div class="invalid-feedback">
                                                Nomor KTP harus diisi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Foto Diri</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="file" name="foto_diri" class="form-control" />
                                            <div class="invalid-feedback">
                                                Foto diri harus diisi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Foto KTP</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="file" name="foto_ktp" class="form-control" />
                                            <div class="invalid-feedback">
                                                Foto KTP harus diisi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4"></div>
                                        <div class="col-lg-4 col-md-6 text-right">
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
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="pricing">
                                                <div class="pricing-title">Enterprise</div>
                                                <div class="pricing-padding">
                                                    <div class="pricing-price">
                                                        <div>$499</div>
                                                        <div>per month</div>
                                                    </div>
                                                    <div class="pricing-details">
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                Unlimited user agent
                                                            </div>
                                                        </div>
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                Core features
                                                            </div>
                                                        </div>
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                8TB storage
                                                            </div>
                                                        </div>
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                Unlimited custom domain
                                                            </div>
                                                        </div>
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                Lifetime Support
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pricing-cta">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="icon-input" value="1" class="selectgroup-input" checked="" />
                                                        <span class="selectgroup-button selectgroup-button-icon">
                                                            Pilih Paket</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="pricing">
                                                <div class="pricing-title">Enterprise</div>
                                                <div class="pricing-padding">
                                                    <div class="pricing-price">
                                                        <div>$499</div>
                                                        <div>per month</div>
                                                    </div>
                                                    <div class="pricing-details">
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                Unlimited user agent
                                                            </div>
                                                        </div>
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                Core features
                                                            </div>
                                                        </div>
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                8TB storage
                                                            </div>
                                                        </div>
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                Unlimited custom domain
                                                            </div>
                                                        </div>
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                Lifetime Support
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pricing-cta">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="icon-input" value="1" class="selectgroup-input" />
                                                        <span class="selectgroup-button selectgroup-button-icon">
                                                            Pilih Paket</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="pricing">
                                                <div class="pricing-title">Enterprise</div>
                                                <div class="pricing-padding">
                                                    <div class="pricing-price">
                                                        <div>$499</div>
                                                        <div>per month</div>
                                                    </div>
                                                    <div class="pricing-details">
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                Unlimited user agent
                                                            </div>
                                                        </div>
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                Core features
                                                            </div>
                                                        </div>
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                8TB storage
                                                            </div>
                                                        </div>
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                Unlimited custom domain
                                                            </div>
                                                        </div>
                                                        <div class="pricing-item">
                                                            <div class="pricing-item-icon">
                                                                <i class="fas fa-check"></i>
                                                            </div>
                                                            <div class="pricing-item-label">
                                                                Lifetime Support
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pricing-cta">
                                                    <label class="selectgroup-item is-invalid">
                                                        <input type="radio" name="icon-input" value="1" class="selectgroup-input" />
                                                        <span class="selectgroup-button selectgroup-button-icon">
                                                            Pilih Paket</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4"></div>
                                        <div class="col-lg-4 col-md-6 text-right">
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
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Name 3</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="text" name="name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Email</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="email" name="email" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 text-md-right text-left mt-2">Address</label>
                                        <div class="col-lg-4 col-md-6">
                                            <textarea class="form-control" name="address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 text-md-right text-left mt-2">Role</label>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="selectgroup w-100">
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="value" value="developer" class="selectgroup-input" />
                                                    <span class="selectgroup-button">Developer</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="value" value="ceo" class="selectgroup-input" />
                                                    <span class="selectgroup-button">CEO</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4"></div>
                                        <div class="col-lg-4 col-md-6 text-right">
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
                </div>
            </div>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url('stisla/') ?>assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url('stisla/') ?>node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
    <script src="<?= base_url('stisla/') ?>node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url('stisla/') ?>node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?= base_url('stisla/') ?>node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url('stisla/') ?>node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="<?= base_url('stisla/') ?>node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?= base_url('stisla/') ?>node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('stisla/') ?>node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('stisla/') ?>node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url('stisla/') ?>assets/js/scripts.js"></script>
    <script src="<?= base_url('stisla/') ?>assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url('stisla/') ?>assets/js/page/index-0.js"></script>
    <script src="<?= base_url('stisla/') ?>assets/js/page/modules-datatables.js"></script>
    <script src="<?= base_url('assets/') ?>js/wizard.js"></script>
</body>

</html>