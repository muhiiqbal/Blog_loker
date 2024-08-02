<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container">
    <h2>Daftar Post</h2>
    <a class="btn btn-primary mb-3" href="<?= site_url('/post/create') ?>">Buat Post Baru</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Date</th>
                <th>Username</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= esc($post['title']) ?></td>
                <td><?= esc($post['content']) ?></td>
                <td><?= esc($post['date']) ?></td>
                <td><?= esc($post['username']) ?></td>
                <td>
                    <a class="btn btn-warning btn-sm" href="<?= site_url('/post/edit/'.$post['idpost']) ?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="<?= site_url('/post/delete/'.$post['idpost']) ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
