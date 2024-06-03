<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>
<!-- isi konten -->
<?php foreach($getprofil as $row) {?>
<div class="card">
    <div class="card-body">
        <div class="media align-items-center mb-4">
            <img class="mr-3" src="<?= base_url('image/profil/'.$row->foto_profil) ?>" width="80"  alt="">
            <div class="media-body">
                <h3 class="mb-0"><?= $row->nama_lengkap ?></h3>
                
                <p class="text-muted mb-0"><?= session()->get('username') ?></p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col">
                <div class="card card-profile text-center">
                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                    <h3 class="mb-0">263</h3>
                    <p class="text-muted px-4">Following</p>
                </div>
            </div>
            <div class="col">
                <div class="card card-profile text-center">
                    <span class="mb-1 text-warning"><i class="icon-user-follow"></i></span>
                    <h3 class="mb-0">263</h3>
                    <p class="text-muted">Followers</p>
                </div>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-danger px-5">Follow Now</button>
            </div>
        </div>

        <h4>About Me</h4>
        <p class="text-muted"><?= $row->biografi ?></p>
        <ul class="card-profile__info">

            <li><strong class="text-dark mr-4">Selengkapnya</strong> <span><a href=""><?= $row->link_portofolio ?></a></span></li>
        </ul>
    </div>
</div>
<?php } ?>
<?= $this->endSection() ?>