<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container">
    <h2>Edit Post</h2>
    <form action="<?= site_url('/post/update/'.$post['idpost']) ?>" method="post">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" id="title" value="<?= esc($post['title']) ?>" required>
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea class="form-control" name="content" id="content" rows="5" required><?= esc($post['content']) ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a class="btn btn-secondary" href="<?= site_url('/post') ?>">Kembali</a>
    </form>
</div>
<?= $this->endSection() ?>
