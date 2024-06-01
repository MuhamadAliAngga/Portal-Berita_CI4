<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>
<!-- isi konten -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data User</h4>
                <button type="button" class="pull-right btn mb-2 btn-info" data-toggle="modal"
                    data-target="#tambah">Tambah <span class="btn-icon-right"><i class="fa fa-plus"></i></span></button>
                <?php if (session()->getFlashdata('berhasil')): ?>
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <strong><?= session()->getFlashdata('berhasil') ?></strong>
                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Akses</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Akses</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data as $user): ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td><?= $user['username'] ?></td>
                                    <td><?= $user['password'] ?></td>
                                    <td class="text-center">
                                        <?= $user['akses'] == 1 ? '<span class="badge badge-pill badge-primary">Admin</span>' : '<span class="badge badge-pill badge-warning">Penulis</span>' ?>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" data-toggle="modal"
                                            data-target="#detail<?= $user['id_user'] ?>" class="btn mb-1 btn-info btn-sm"><i
                                                class="fa fa-eye"></i></button>
                                        <button type="button" data-toggle="modal"
                                            data-target="#update<?= $user['id_user'] ?>"
                                            class="btn mb-1 btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                                        <button type="button" data-toggle="modal"
                                            data-target="#delete<?= $user['id_user'] ?>"
                                            class="btn mb-1 btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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

<form action="/user/insert" method="post" enctype="multipart/form-data">
    <!-- Modal Tambah User -->
    <div class="modal fade" id="tambah">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah User</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control input-rounded" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="text" name="password" class="form-control input-rounded" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <select name="akses" id="akses" class="form-control input-rounded">
                            <option>Pilih</option>
                            <option value="1">Admin</option>
                            <option value="2">Penulis</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" data-toggle="modal" data-target="#awaaw"
                        class="btn btn-primary">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tambah User -->
    <div class="modal fade bd-example-modal-lg" id="awaaw">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah User</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="nama_lengkap" class="form-control input-rounded"
                            placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label>Biografi</label>
                        <textarea class="form-control h-150px" rows="6" name="biografi" id="comment"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" name="foto_profil" class="form-control input-rounded"
                            placeholder="Foto Profil">
                    </div>
                    <div class="form-group">
                        <input type="text" name="link_portofolio" class="form-control input-rounded"
                            placeholder="Link Portofolio">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</form>


<!-- Modal Detail User -->
<?php foreach ($data as $row): ?>
    <div class="modal fade" id="detail<?= $row['id_user'] ?>" tabindex="-1" role="dialog"
        aria-labelledby="detailTitle<?= $row['id_user'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailTitle<?= $row['id_user'] ?>">Detail Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="detailUsername<?= $row['id_user'] ?>">Username:</label>
                        <input type="text" class="form-control" id="detailUsername<?= $row['id_user'] ?>"
                            value="<?= $row['username'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="detailAkses<?= $row['id_user'] ?>">Akses:</label>
                        <input type="text" class="form-control" id="detailAkses<?= $row['id_user'] ?>"
                            value="<?= $row['akses'] == 1 ? 'Admin' : 'Penulis' ?>" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Edit User -->
<?php foreach ($data as $row): ?>
    <div class="modal fade" id="update<?= $row['id_user'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah User</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form action="/user/update/<?= $row['id_user'] ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control input-rounded"
                                value="<?= $row['username'] ?>" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="text" name="password" class="form-control input-rounded"
                                value="<?= $row['password'] ?>" placeholder="Password" readonly>
                        </div>
                        <div class="form-group">
                            <select name="akses" id="akses" class="form-control input-rounded">
                                <option value="">Pilih</option>
                                <option value="1" <?= $row['akses'] == 1 ? 'selected' : '' ?>>Admin</option>
                                <option value="2" <?= $row['akses'] == 2 ? 'selected' : '' ?>>Penulis</option>
                            </select>
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

<!-- Modal Hapus User -->
<?php foreach ($data as $row): ?>
    <div class="modal fade" id="delete<?= $row['id_user'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus User</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus user <strong><?= $row['username'] ?></strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="/user/delete/<?= $row['id_user'] ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection() ?>