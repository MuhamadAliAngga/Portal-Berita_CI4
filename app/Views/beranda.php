<?= $this->extend('layout_beranda') ?>

<?= $this->section('content') ?>

<div class="row text-center">
    <?php for ($i = 0; $i < 6; $i++) : ?>
        <div class="col-lg-4 col-md-6 mb-4 news-article">
            <div class="card h-100">
                <img class="card-img-top" src="https://via.placeholder.com/700x400" alt="">
                <div class="card-body">
                    <h4 class="card-title news-title">Judul Berita <?= $i + 1 ?></h4>
                    <p class="card-text news-subtitle">Subjudul Berita <?= $i + 1 ?></p>
                    <p class="card-text">Konten singkat berita <?= $i + 1 ?>. Ini adalah deskripsi singkat dari berita.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>

<?= $this->endSection() ?>