<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= assets('css/bootstrap.min.css?ver=' . rand()) ?>">
    <link rel="stylesheet" href="<?= assets('css/style.css?ver=' . rand()) ?>">
    <title>404 Not Found</title>
</head>

<body style="height: 100vh;">
    <section class="container d-flex align-items-center flex-column gap-5 justify-content-center h-75">
        <img width="150" src="<?= assets('images/404-icon.png') ?>" alt="404-icon">
        <h1 class="text-danger text-uppercase">Page Not Found</h1>
        <a href="<?= route() ?>" class="btn btn-danger px-4 py-2">
            Back To Home Page</a>
    </section>
</body>
<script src="<?= assets('js/bootstrap.min.js?ver=' . rand()) ?>"></script>
<script src="<?= assets('js/script.js?ver=' . rand()) ?>"></script>

</html>