<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Penulis</h4>
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
                                <th>Nama Lengkap</th>
                                <th>Biografi</th>
                                <th>Foto Profil</th>
                                <th>Link Portofolio</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Biografi</th>
                                <th>Foto Profil</th>
                                <th>Link Portofolio</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data as $row): ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td><?= $row->nama_lengkap ?></td>
                                    <td><?= $row->biografi ?></td>
                                    <td class="text-center"><img width="50px" src="<?= base_url('image/profil/') . $row->foto_profil ?>" alt=""></td>
                                    <td class="text-center"><?= $row->link_portofolio ?></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>