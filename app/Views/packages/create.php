<?= $this->extend('layouts/appLayout'); ?>

<?= $this->section('title'); ?>
Tambah Paket
<?= $this->endSection(); ?>

<?= $this->section('header'); ?>
Tambah Data Paket
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="d-flex justify-content-end card-header">
                    <a href="<?= base_url('admin/packages') ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <?php if (isset($validation)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $validation->listErrors() ?>
                                </div>
                            <?php } ?>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <div class="mb-2">Info Message</div>
                                                    <button class="btn btn-primary" id="toastr-1">Launch</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <div class="mb-2">Success Message</div>
                                                    <button class="btn btn-primary" id="toastr-2">Launch</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <div class="mb-2">Warning Message</div>
                                                    <button class="btn btn-primary" id="toastr-3">Launch</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <div class="mb-2">Error Message</div>
                                                    <button class="btn btn-primary" id="toastr-4">Launch</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="<?= base_url('admin/packages/create') ?>" method="post">
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Paket</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" name="nama_paket" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Durasi</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="number" name="durasi" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="number" name="harga" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                            <div class="col-sm-12 col-md-7">
                                                <textarea name="deskripsi" class="summernote"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                            <div class="col-sm-12 col-md-7">
                                                <button class="btn btn-primary">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>