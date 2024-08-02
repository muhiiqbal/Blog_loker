<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container">
    <h2>Buat Akun Baru</h2>
    <form action="<?= site_url('/account/store') ?>" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select class="form-control" name="role" id="role" required>
                <option value="admin">Admin</option>
                <option value="author">Author</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</div>
<?= $this->endSection() ?>
