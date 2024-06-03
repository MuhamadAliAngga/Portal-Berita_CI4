<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>
<!-- isi konten -->
<a href="/artikel/tambah" class="btn mb-3 btn-info">Tambah Artikel<span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>
<div class="row">
    
    <?php 
            if (session()->get('akses') == 2) :
            foreach ($artikel as $row): 
    ?>
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <img class="img-fluid" src="<?= base_url('image/thumbnail/') . $row->thumbnail ?>" alt="rusak">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between mb-0">
                        <h5 class="card-title"><?= $row->judul ?></h5>
                        <div class="media-reply__link">
                            <p class="font-weight-bold"><?= $row->nama_lengkap ?></p>
                        </div>
                    </div>
                    <p class="card-text"><?= $row->ringkasan ?></p>
                    <div class="text-center ago mb-1">
                        <a href="/artikel/read/<?= $row->id_artikel ?>" class="btn mb-1 btn-rounded btn-info">Selengkapnya</a>
                    </div>
                    <p class="card-text"><small class="text-muted"><?= $row->tanggal_dibuat ?></small>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    <?php endif ?>
    <?php 
            if (session()->get('akses') == 1) :
            foreach ($artikel_all as $row): 
    ?>
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <img class="img-fluid" src="<?= base_url('image/thumbnail/') . $row->thumbnail ?>" alt="rusak">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between mb-0">
                        <h5 class="card-title"><?= $row->judul ?></h5>
                        <div class="media-reply__link">
                            <p class="font-weight-bold"><?= $row->nama_lengkap ?></p>
                        </div>
                    </div>
                    <p class="card-text"><?= $row->ringkasan ?></p>
                    <div class="text-center ago mb-1">
                        <a href="/artikel/read/<?= $row->id_artikel ?>" class="btn mb-1 btn-rounded btn-info">Selengkapnya</a>
                    </div>
                    <p class="card-text"><small class="text-muted"><?= $row->tanggal_dibuat ?></small>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    <?php endif ?>
</div>

<?= $this->endSection() ?>