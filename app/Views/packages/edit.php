<?= $this->extend('layouts/appLayout'); ?>

<?= $this->section('title'); ?>
Edit Paket
<?= $this->endSection(); ?>

<?= $this->section('header'); ?>
Edit Data Paket
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
                                    <form action="<?= base_url('admin/packages/' . $package['id_paket'] . '/edit') ?>" method="post">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="id_paket" value="<?= $package['id_paket'] ?>">
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Paket</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" name="nama_paket" class="form-control" value="<?= $package['nama_paket'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Durasi</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="number" name="durasi" class="form-control" value="<?= $package['durasi'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="number" name="harga" class="form-control" value="<?= $package['harga'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                            <div class="col-sm-12 col-md-7">
                                                <textarea name="deskripsi" class="summernote"><?= $package['deskripsi'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                            <div class="col-sm-12 col-md-7">
                                                <button class="btn btn-primary">Ubah</button>
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