<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>
<!-- isi konten -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Artikel</h4>
                <button type="button" class="pull-right btn mb-2 btn-info" data-toggle="modal" data-target="#tambah">Tambah <span class="btn-icon-right"><i class="fa fa-plus"></i></span></button>
                <?php if (session()->getFlashdata('berhasil')) : ?>
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong><?= session()->getFlashdata('berhasil') ?></strong>
                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Penulis</th>
                                <th>Tanggal Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Penulis</th>
                                <th>Tanggal Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data as $artikel) : ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td><?= $artikel['judul'] ?></td>
                                    <td><?= $artikel['isi'] ?></td>
                                    <td class="text-center"><?= $artikel['id_penulis'] ?></td>
                                    <td class="text-center"><?= $artikel['tanggal_dibuat'] ?></td>
                                    <td class="text-center">
                                        <button type="button" data-toggle="modal" data-target="#detail<?= $artikel['id_artikel'] ?>" class="btn mb-1 btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                        <button type="button" data-toggle="modal" data-target="#update<?= $artikel['id_artikel'] ?>" class="btn mb-1 btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                                        <button type="button" data-toggle="modal" data-target="#delete<?= $artikel['id_artikel'] ?>" class="btn mb-1 btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Artikel -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Artikel</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form action="/artikel/insert" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="judul" class="form-control input-rounded" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <textarea name="isi" class="form-control input-rounded" placeholder="Isi"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="number" name="id_penulis" class="form-control input-rounded" placeholder="ID Penulis">
                    </div>
                    <div class="form-group">
                        <input type="date" name="tanggal_dibuat" class="form-control input-rounded">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Detail Artikel -->
<?php foreach ($data as $artikel) : ?>
    <div class="modal fade" id="detail<?= $artikel['id_artikel'] ?>" tabindex="-1" role="dialog" aria-labelledby="detailTitle<?= $artikel['id_artikel'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailTitle<?= $artikel['id_artikel'] ?>">Detail Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p><strong>Judul:<?= $artikel['judul'] ?></strong></p>
                    <p><strong>Isi: </strong><?= $artikel['isi'] ?></p>
                    <p><strong>Penulis: </strong><?= $artikel['id_penulis'] ?></p>
                    <p><strong>Tanggal Dibuat: </strong><?= $artikel['tanggal_dibuat'] ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Edit Artikel -->
<?php foreach ($data as $artikel) : ?>
    <div class="modal fade" id="update<?= $artikel['id_artikel'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form action="/artikel/update/<?= $artikel['id_artikel'] ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="judul" class="form-control input-rounded" value="<?= $artikel['judul'] ?>" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <textarea name="isi" class="form-control input-rounded" placeholder="Isi"><?= $artikel['isi'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <input type="number" name="id_penulis" class="form-control input-rounded" value="<?= $artikel['id_penulis'] ?>" placeholder="ID Penulis">
                        </div>
                        <div class="form-group">
                            <input type="date" name="tanggal_dibuat" class="form-control input-rounded" value="<?= $artikel['tanggal_dibuat'] ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Hapus Artikel -->
<?php foreach ($data as $artikel) : ?>
    <div class="modal fade" id="delete<?= $artikel['id_artikel'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus artikel <strong><?= $artikel['judul'] ?></strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="/artikel/delete/<?= $artikel['id_artikel'] ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection() ?>