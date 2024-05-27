<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>

<!-- isi konten -->
<h1 class="my-4">Tambahkan Artikel</h1>
<form action="/artikel" method="post" class="mb-5 p-4 border rounded">
    <div class="form-group">
        <label for="id_penulis">ID Penulis:</label>
        <input type="number" id="id_penulis" name="id_penulis" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="isi">Isi:</label>
        <textarea id="isi" name="isi" class="form-control" rows="4" required></textarea>
    </div>
    <div class="form-group">
        <label for="tanggal_dibuat">Tanggal Dibuat:</label>
        <input type="date" id="tanggal_dibuat" name="tanggal_dibuat" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Terbitkan</button>
</form>

<!-- Daftar artikel -->
<h2>Daftar Artikel</h2>
<?php if (!empty($articles) && is_array($articles)) : ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Penulis</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) : ?>
                <tr>
                    <td><?= esc($article['id_artikel']) ?></td>
                    <td><?= esc($article['id_penulis']) ?></td>
                    <td><?= esc($article['judul']) ?></td>
                    <td><?= esc($article['isi']) ?></td>
                    <td><?= esc($article['tanggal_dibuat']) ?></td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal<?= $article['id_artikel'] ?>">Edit</button>
                        <form action="/artikel/<?= $article['id_artikel'] ?>" method="post" style="display:inline;">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                <!-- Modal untuk mengedit artikel -->
                <div class="modal fade" id="editModal<?= $article['id_artikel'] ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $article['id_artikel'] ?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel<?= $article['id_artikel'] ?>">Edit Artikel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/artikel/<?= $article['id_artikel'] ?>" method="post">
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label for="judul">Judul:</label>
                                        <input type="text" id="judul" name="judul" class="form-control" value="<?= esc($article['judul']) ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="isi">Isi:</label>
                                        <textarea id="isi" name="isi" class="form-control" rows="4" required><?= esc($article['isi']) ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_dibuat">Tanggal Dibuat:</label>
                                        <input type="date" id="tanggal_dibuat" name="tanggal_dibuat" class="form-control" value="<?= esc($article['tanggal_dibuat']) ?>" required>
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
    <p>Tidak ada artikel ditemukan</p>
<?php endif; ?>

<?= $this->endSection() ?>