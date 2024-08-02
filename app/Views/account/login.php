<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?= \Config\Services::validation()->listErrors(); ?>

    <form action="<?= site_url('account/login'); ?>" method="post">
        <label for="username">Username</label>
        <input type="input" name="username"><br>

        <label for="password">Password</label>
        <input type="password" name="password"><br>

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
