<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Penulis</h4>
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
                                <th>Nama Penulis</th>
                                <th>Biografi</th>
                                <th>Foto</th>
                                <th>Link Portofolio</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Penulis</th>
                                <th>Biografi</th>
                                <th>Foto</th>
                                <th>Link Portofolio</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data as $penulis) : ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td><?= $penulis['nama_penulis'] ?></td>
                                    <td><?= $penulis['biografi'] ?></td>
                                    <td><img src="<?= base_url('public/image/' . $penulis['foto']) ?>" alt="<?= $penulis['foto'] ?>" style="max-width: 100px;"></td>
                                    <td><?= $penulis['link_portofolio'] ?></td>
                                    <td class="text-center">
                                        <button type="button" data-toggle="modal" data-target="#detail<?= $penulis['id_penulis'] ?>" class="btn mb-1 btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                        <button type="button" data-toggle="modal" data-target="#update<?= $penulis['id_penulis'] ?>" class="btn mb-1 btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                                        <button type="button" data-toggle="modal" data-target="#delete<?= $penulis['id_penulis'] ?>" class="btn mb-1 btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Penulis -->
    <div class="modal fade" id="tambah">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Penulis</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form action="/penulis/insert" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="nama_penulis" class="form-control input-rounded" placeholder="Nama Penulis">
                        </div>
                        <div class="form-group">
                            <textarea name="biografi" class="form-control input-rounded" placeholder="Biografi"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" name="foto" class="form-control-file" id="fotoInput">
                        </div>

                        <div class="form-group">
                            <input type="text" name="link_portofolio" class="form-control input-rounded" placeholder="Link Portofolio">
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

    <!-- Modal Detail Penulis -->
    <?php foreach ($data as $penulis) : ?>
        <div class="modal fade" id="detail<?= $penulis['id_penulis'] ?>" tabindex="-1" role="dialog" aria-labelledby="detailTitle<?= $penulis['id_penulis'] ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailTitle<?= $penulis['id_penulis'] ?>">Detail Penulis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="detailNamaPenulis<?= $penulis['id_penulis'] ?>">Nama Penulis:</label>
                            <input type="text" class="form-control" id="detailNamaPenulis<?= $penulis['id_penulis'] ?>" value="<?= $penulis['nama_penulis'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="detailBiografi<?= $penulis['id_penulis'] ?>">Biografi:</label>
                            <textarea class="form-control" id="detailBiografi<?= $penulis['id_penulis'] ?>" readonly><?= $penulis['biografi'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="detailFoto<?= $penulis['id_penulis'] ?>">Foto:</label><br>
                            <?php
                            $imagePath = 'public/image/' . $penulis['foto'];
                            if (file_exists($imagePath)) {
                                echo '<img src="' . base_url($imagePath) . '" alt="Foto Penulis" style="max-width: 100px;">';
                            } else {
                                echo 'Gambar tidak ditemukan';
                            }
                            ?>
                        </div>

                        <div class="form-group">
                            <label for="detailLinkPortofolio<?= $penulis['id_penulis'] ?>">Link Portofolio:</label>
                            <input type="text" class="form-control" id="detailLinkPortofolio<?= $penulis['id_penulis'] ?>" value="<?= $penulis['link_portofolio'] ?>" readonly>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Modal Edit Penulis -->
    <?php foreach ($data as $penulis) : ?>
        <div class="modal fade" id="update<?= $penulis['id_penulis'] ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah Penulis</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <form action="/penulis/update/<?= $penulis['id_penulis'] ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="nama_penulis" class="form-control input-rounded" value="<?= $penulis['nama_penulis'] ?>" placeholder="Nama Penulis">
                            </div>
                            <div class="form-group">
                                <textarea name="biografi" class="form-control input-rounded" placeholder="Biografi"><?= $penulis['biografi'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" name="foto" class="form-control-file" id="fotoInput">
                            </div>
                            <div class="form-group">
                                <input type="text" name="link_portofolio" class="form-control input-rounded" value="<?= $penulis['link_portofolio'] ?>" placeholder="Link Portofolio">
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

    <!-- Modal Hapus Penulis -->
    <?php foreach ($data as $penulis) : ?>
        <div class="modal fade" id="delete<?= $penulis['id_penulis'] ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Penulis</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin menghapus penulis <strong><?= $penulis['nama_penulis'] ?></strong>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="/penulis/delete/<?= $penulis['id_penulis'] ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?= $this->endSection() ?>