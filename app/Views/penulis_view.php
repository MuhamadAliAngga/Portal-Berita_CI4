<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>

<!-- Tombol untuk menambah profil baru -->
<a href="/profil/tambah" class="btn mb-3 btn-info">Tambah Profil<span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>

<div class="row">
    <?php
    $aksesPengguna = session()->get('akses'); // Mendapatkan tingkat akses pengguna

    // Cek jika pengguna memiliki akses level 2
    if ($aksesPengguna == 2 && isset($profil) && is_array($profil)) :
        foreach ($profil as $row) :
    ?>
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <img class="img-fluid" src="<?= base_url('image/profil/' . $row->foto_profil) ?>" alt="Gambar tidak tersedia">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between mb-0">
                            <h5 class="card-title"><?= $row['nama_lengkap'] ?></h5>
                        </div>
                        <p class="card-text"><?= $row['biografi'] ?></p>
                        <div class="text-center ago mb-1">
                            <a href="/profil/read/<?= $row['id_profil'] ?>" class="btn mb-1 btn-rounded btn-info">Selengkapnya</a>
                        </div>
                        <p class="card-text"><small class="text-muted"><?= $row['link_portofolio'] ?></small></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    <?php endif ?>

    <!-- Cek jika pengguna memiliki akses level 1 -->
    <?php
    if ($aksesPengguna == 1 && isset($profil_all) && is_array($profil_all)) :
        foreach ($profil_all as $row) :
    ?>
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <img class="img-fluid" src="<?= base_url('image/profil/' . $row->foto_profil) ?>" alt="Gambar tidak tersedia">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between mb-0">
                            <h5 class="card-title"><?= $row['nama_lengkap'] ?></h5>
                        </div>
                        <p class="card-text"><?= $row['biografi'] ?></p>
                        <div class="text-center ago mb-1">
                            <a href="/profil/read/<?= $row['id_profil'] ?>" class="btn mb-1 btn-rounded btn-info">Selengkapnya</a>
                        </div>
                        <p class="card-text"><small class="text-muted"><?= $row['link_portofolio'] ?></small></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    <?php endif ?>
</div>

<?= $this->endSection() ?>