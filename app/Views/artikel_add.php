<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>
<!-- isi konten -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Upload Artikel</h4>
                <hr>
                <form action="/artikel/insert" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id_profil" value="<?= $profil['id_profil'] ?>">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control input-default" placeholder="Isi judul artikel">
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
                    </div>
                    <div class="form-group">
                        <label for="ringkasan">Ringkasan</label>
                        <textarea class="form-control" name="ringkasan" id="ringkasan" cols="5" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <textarea name="isi" id="summernote" class="form-control summernote"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Unggah</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>