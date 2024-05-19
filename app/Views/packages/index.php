<?= $this->extend('layouts/appLayout'); ?>

<?= $this->section('title'); ?>
Paket
<?= $this->endSection(); ?>

<?= $this->section('header'); ?>
Paket
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="d-flex card-header">
                    <div class="mr-auto">
                        <button class="btn btn-icon icon-left btn-danger mr-2"><i class="far fa-file"></i> Pdf</btn>
                            <button class="btn btn-icon icon-left btn-success"><i class="far fa-file"></i> Excel</btn>
                    </div>
                    <button class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah Data Paket</btn>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th>Nama Paket</th>
                                    <th>Deskripsi</th>
                                    <th>Durasi</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($packages as $package) :
                                ?>
                                    <tr>
                                        <td>
                                            <?= $no ?>
                                        </td>
                                        <td><?= $package['nama_paket'] ?></td>
                                        <td>
                                            <?= $package['deskripsi'] ?>
                                        </td>
                                        <td>
                                            <?= $package['durasi'] ?> Bulan
                                        </td>
                                        <td>Rp. <?= $package['harga'] ?></td>
                                        <td>
                                            <a href="#" class="btn btn-success">Ubah</a>
                                            <a href="#" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>