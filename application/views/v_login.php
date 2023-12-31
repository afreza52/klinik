<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Aplikasi Klinik Sederhana">
    <meta name="generator" content="afreza">
    <title>Login Aplikasi Klinik</title>


    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(''); ?>asset/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="icon" href="asset/favicon.ico">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= base_url('asset/custom/login.css'); ?>" rel="stylesheet">
</head>

<body class="text-center">
    <form method="post" action="<?= base_url('auth/login'); ?>" class="form-signin">
        <img class="mb-4" src="<?= base_url('asset'); ?>/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
        <label for="username" class="sr-only">Username</label>
        <div class="form-group">
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" autofocus>
            <?= form_error('username', '<div class="text-danger small">', '</div>') ?>
        </div>
        <div class="form-group">
            <label for="Password" class="sr-only">Password</label>
            <input type="password" id="Password" name="password" class="form-control" placeholder="Password">
            <?= form_error('password', '<div class="text-danger small">', '</div>') ?>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2023 - Afreza Dwi Zuliyanto</p>
    </form>
</body>

</html>