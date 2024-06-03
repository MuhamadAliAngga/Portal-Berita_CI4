<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="email-box">
                    <div class="read-content">
                        <div class="media pt-2">
                            <img class="mr-3 rounded-circle" src="images/avatar/1.jpg">
                            <div class="media-body">
                                <h5 class="m-b-3"><?= $artikel['nama_lengkap'] ?></h5>
                                <p class="m-b-2"><?= $artikel['tanggal_dibuat'] ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                        <img width="300" src="<?= base_url('image/thumbnail/') . $artikel['thumbnail'] ?>" alt="">
                        </div>
                        <div class="media mb-4 mt-1">
                            <div class="media-body">
                                <h4 class="m-0 text-primary"><?= $artikel['judul'] ?></h4><small
                                    class="text-muted"><?= $artikel['ringkasan'] ?></small>
                            </div>
                        </div>
                        <?= $artikel['isi'] ?>
                        
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primaryw-md m-b-30" type="button">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>