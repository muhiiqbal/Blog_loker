<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container">
    <h2>Daftar Akun</h2>
    <a class="btn btn-primary mb-3" href="<?= site_url('/account/create') ?>">Buat Akun Baru</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accounts as $account): ?>
            <tr>
                <td><?= esc($account['username']) ?></td>
                <td><?= esc($account['name']) ?></td>
                <td><?= esc($account['role']) ?></td>
                <td>
                    <a class="btn btn-warning btn-sm" href="<?= site_url('/account/edit/'.$account['username']) ?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="<?= site_url('/account/delete/'.$account['username']) ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
