<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container">
    <h2>Edit Akun</h2>
    <form action="<?= site_url('/account/update/'.$account['username']) ?>" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" value="<?= esc($account['name']) ?>" required>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select class="form-control" name="role" id="role" required>
                <option value="admin" <?= $account['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                <option value="author" <?= $account['role'] == 'author' ? 'selected' : '' ?>>Author</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a class="btn btn-secondary" href="<?= site_url('/account') ?>">Kembali</a>
    </form>
</div>
<?= $this->endSection() ?>
