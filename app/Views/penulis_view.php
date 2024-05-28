<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>

<!-- Isi Konten -->
<h1 class="my-4">Tambahkan Penulis</h1>
<?php if (session()->has('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session('success') ?>
    </div>
<?php endif; ?>
<form action="/penulis" method="post" enctype="multipart/form-data" class="mb-5 p-4 border rounded">
    <div class="form-group">
        <label for="nama_penulis">Nama Penulis:</label>
        <input type="text" id="nama_penulis" name="nama_penulis" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="biografi">Biografi:</label>
        <textarea id="biografi" name="biografi" class="form-control" rows="4" required></textarea>
    </div>
    <div class="form-group">
        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" class="form-control-file" required>
    </div>
    <div class="form-group">
        <label for="link_portofolio">Link Portofolio:</label>
        <input type="url" id="link_portofolio" name="link_portofolio" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

<!-- Daftar Penulis -->
<h2>Daftar Penulis</h2>
<?php if (!empty($writers) && is_array($writers)) : ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Penulis</th>
                <th>Biografi</th>
                <th>Foto</th>
                <th>Link Portofolio</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($writers as $writer) : ?>
                <tr>
                    <td><?= esc($writer['id_penulis']) ?></td>
                    <td><?= esc($writer['nama_penulis']) ?></td>
                    <td><?= esc($writer['biografi']) ?></td>
                    <td><img src="<?= base_url('app/libraries/poto/' . $writer['foto']) ?>" alt="Foto Penulis" width="100"></td>
                    <td><a href="<?= esc($writer['link_portofolio']) ?>" target="_blank"><?= esc($writer['link_portofolio']) ?></a></td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal<?= $writer['id_penulis'] ?>">Edit</button>
                        <form action="/penulis/<?= $writer['id_penulis'] ?>" method="post" style="display:inline;">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                <!-- Modal untuk mengedit penulis -->
                <div class="modal fade" id="editModal<?= $writer['id_penulis'] ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $writer['id_penulis'] ?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel<?= $writer['id_penulis'] ?>">Edit Penulis</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/penulis/<?= $writer['id_penulis'] ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label for="nama_penulis">Nama Penulis:</label>
                                        <input type="text" id="nama_penulis" name="nama_penulis" class="form-control" value="<?= esc($writer['nama_penulis']) ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="biografi">Biografi:</label>
                                        <textarea id="biografi" name="biografi" class="form-control" rows="4" required><?= esc($writer['biografi']) ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">Foto:</label>
                                        <input type="file" id="foto" name="foto" class="form-control-file">
                                    </div>
                                    <div class="form-group">
                                        <label for="link_portofolio">Link Portofolio:</label>
                                        <input type="url" id="link_portofolio" name="link_portofolio" class="form-control" value="<?= esc($writer['link_portofolio']) ?>" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>Tidak ada penulis ditemukan</p>
<?php endif; ?>

<?= $this->endSection() ?>