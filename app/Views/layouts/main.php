<!DOCTYPE html>
<html>
<head>
    <title>Blog Aplikasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 20px;
        }
        .container {
            max-width: 800px;
        }
        .header {
            margin-bottom: 20px;
        }
        .footer {
            margin-top: 20px;
            padding: 10px 0;
            text-align: center;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Blog Aplikasi</h1>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?= site_url('/') ?>">Beranda</a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/post') ?>">Post</a>
                        </li>
                        <?php if (session()->get('role') === 'admin'): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/account') ?>">Akun</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <?php if (session()->get('logged_in')): ?>
                    <a class="btn btn-outline-danger" href="<?= site_url('/logout') ?>">Logout</a>
                    <?php else: ?>
                    <a class="btn btn-outline-primary" href="<?= site_url('/login') ?>">Login</a>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
        <?= $this->renderSection('content') ?>
        <div class="footer">
            <p>&copy; <?= date('Y') ?> Blog Aplikasi. Semua hak cipta dilindungi.</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
