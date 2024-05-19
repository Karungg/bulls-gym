<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Register | Bulls Gym
    </title>

    <!-- CSS Files -->
    <link href="<?= base_url('') ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('') ?>assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

    <!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('') ?>assets/css/themify-icons.css" rel="stylesheet" />
</head>

<body>
    <div class="image-container set-full-height" style="background: radial-gradient(#111, #071a1a)">
        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="green" id="wizardProfile">
                            <a href="<?= base_url() ?>" class="btn btn-primary" style="margin: 10px;">Kembali</a>
                            <form action="" method="">
                                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

                                <div class="wizard-header text-center">
                                    <h3 class="wizard-title">Form Registrasi</h3>
                                    <p class="category">
                                        Informasi ini akan memberi tahu kami lebih banyak tentang Anda.
                                    </p>
                                </div>

                                <div class="wizard-navigation">
                                    <div class="progress-with-circle">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%"></div>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#about" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-user"></i>
                                                </div>
                                                Registrasi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#account" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-settings"></i>
                                                </div>
                                                Paket
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#address" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-map"></i>
                                                </div>
                                                Pembayaran
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                        <div class="row">
                                            <h5 class="info-text">
                                                Data Diri.
                                            </h5>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Nama Lengkap <small>(required)</small></label>
                                                    <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Kelamin <small>(required)</small></label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="pria">
                                                        <label class="form-check-label" for="jenis_kelamin">
                                                            Pria
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="wanita">
                                                        <label class="form-check-label" for="jenis_kelamin">
                                                            Wanita
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img class="picture-src" id="wizardPicturePreview" title="" />
                                                        <input type="file" name="foto" id="wizard-picture" />
                                                    </div>
                                                    <h3>Upload foto</h3>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Tanggal Lahir <small>(required)</small></label>
                                                    <input name="tgl_lahir" type="date" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Email <small>(required)</small></label>
                                                    <input name="email" type="email" class="form-control" placeholder="Email" />
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>No. KTP <small>(required)</small></label>
                                                    <input name="no_ktp" type="number" class="form-control" placeholder="Contoh : 3201..." />
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>No. Handphone <small>(required)</small></label>
                                                    <input name="telp" type="number" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Alamat <small>(required)</small></label>
                                                    <div class="form-floating">
                                                        <textarea class="form-control" id="alamat" style="height: 100px" name="alamat"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Upload KTP <small>(required)</small></label>
                                                    <input name="foto_ktp" type="file" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <h5 class="info-text">
                                                    Login Info.
                                                </h5>
                                                <div class="form-group">
                                                    <label>Username <small>(required)</small></label>
                                                    <input name="username" type="text" class="form-control" placeholder="Username" />
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Password <small>(required)</small></label>
                                                    <input name="password" type="password" class="form-control" placeholder="Password" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <h5 class="info-text">
                                            Paket
                                        </h5>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-6">
                                                    <div class="choice" data-toggle="wizard-radio">
                                                        <input type="radio" name="paket" value="Design" />
                                                        <div class="card card-checkboxes card-hover-effect">
                                                            <h3>Paket 1</h3>
                                                            <p>12 Bulan</p>
                                                            <ul>
                                                                <li>Gratis Akses Ke Semua Club</li>
                                                                <li>Gratis Pemakaian Handuk</li>
                                                                <li>Gratis Regular Class</li>
                                                                <li>Gratis Penggunaan Loker</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="choice" data-toggle="wizard-radio">
                                                        <input type="radio" name="paket" value="Design" />
                                                        <div class="card card-checkboxes card-hover-effect">
                                                            <h3>Paket 2</h3>
                                                            <p>12 Bulan</p>
                                                            <ul>
                                                                <li>Gratis Akses Ke Semua Club</li>
                                                                <li>Gratis Pemakaian Handuk</li>
                                                                <li>Gratis Regular Class</li>
                                                                <li>Gratis Penggunaan Loker</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="choice" data-toggle="wizard-radio">
                                                        <input type="radio" name="paket" value="Design" />
                                                        <div class="card card-checkboxes card-hover-effect">
                                                            <h3>Paket 3</h3>
                                                            <p>12 Bulan</p>
                                                            <ul>
                                                                <li>Gratis Akses Ke Semua Club</li>
                                                                <li>Gratis Pemakaian Handuk</li>
                                                                <li>Gratis Regular Class</li>
                                                                <li>Gratis Penggunaan Loker</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="choice" data-toggle="wizard-radio">
                                                        <input type="radio" name="paket" value="Design" />
                                                        <div class="card card-checkboxes card-hover-effect">
                                                            <h3>Paket 4</h3>
                                                            <p>12 Bulan</p>
                                                            <ul>
                                                                <li>Gratis Akses Ke Semua Club</li>
                                                                <li>Gratis Pemakaian Handuk</li>
                                                                <li>Gratis Regular Class</li>
                                                                <li>Gratis Penggunaan Loker</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5 class="info-text">
                                                    Are you living in a nice area?
                                                </h5>
                                            </div>
                                            <div class="col-sm-7 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Street Name</label>
                                                    <input type="text" class="form-control" placeholder="5h Avenue" />
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Street Number</label>
                                                    <input type="text" class="form-control" placeholder="242" />
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="New York..." />
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>Country</label><br />
                                                    <select name="country" class="form-control">
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">
                                                            American Samoa
                                                        </option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type="button" class="btn btn-next btn-fill btn-warning btn-wd" name="next" value="Next" />
                                        <input type="button" class="btn btn-finish btn-fill btn-warning btn-wd" name="finish" value="Finish" />
                                    </div>

                                    <div class="pull-left">
                                        <input type="button" class="btn btn-previous btn-default btn-wd" name="previous" value="Previous" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- wizard container -->
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="<?= base_url('') ?>assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="<?= base_url('') ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url('') ?>assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="<?= base_url('') ?>assets/js/demo.js" type="text/javascript"></script>
<script src="<?= base_url('') ?>assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

<script src="<?= base_url('') ?>assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>