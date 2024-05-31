<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>
<!-- isi konten -->
<h1>Halaman User</h1>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table</h4>
                                <button type="button" class="btn mb-1 btn-info" data-toggle="modal" data-target="#tambah">Tambah <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                                    </button>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Akses</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr class="text-center">
                                                 <th>No</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Akses</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                $no = 1;
                                                foreach ($data as $user) {
                                            ?>
                                            <tr>
                                                <td class="text-center"><?= $no++ ?></td>
                                                <td><?= $user['username'] ?></td>
                                                <td><?= $user['password'] ?></td>
                                                <td class="text-center"><?= $user['akses'] ?></td>
                                                <td class="text-center">
                                                    <button type="button" class="btn mb-1 btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn mb-1 btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- Modal -->
<div class="modal fade" id="tambah">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Tambah User</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <form action="/as" method="post">
                                                <div class="modal-body">
                                                    
                                                        <div class="form-group">
                                                            <input type="text" class="form-control input-rounded" placeholder="Username">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control input-rounded" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="akses" id="akses" class="form-control input-rounded">
                                                                <option>Pilih</option>
                                                                <option value="1">Admin</option>
                                                                <option value="2">Penulis</option>
                                                            </select>
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
<?= $this->endSection() ?>