<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container">
    <h2>Anda telah logout</h2>
    <a class="btn btn-primary" href="<?= site_url('/login') ?>">Login Kembali</a>
</div>
<?= $this->endSection() ?>
