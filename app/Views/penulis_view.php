<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>
<!-- isi konten -->
<!-- File: app/Views/profil/index.php -->

<body>
    <h1>Daftar Profil</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID Profil</th>
                <th>ID User</th>
                <th>Nama Lengkap</th>
                <th>Biografi</th>
                <th>Foto Profil</th>
                <th>Link Portofolio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profils as $profil) : ?>
                <tr>
                    <td><?= $profil['id_profil']; ?></td>
                    <td><?= $profil['id_user']; ?></td>
                    <td><?= $profil['nama_lengkap']; ?></td>
                    <td><?= $profil['biografi']; ?></td>
                    <td><?= $profil['foto_profil']; ?></td>
                    <td><?= $profil['link_portofolio']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<?= $this->endSection() ?>