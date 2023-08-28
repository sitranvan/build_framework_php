<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= assets('css/bootstrap.min.css?ver=' . rand()) ?>">
    <link rel="stylesheet" href="<?= assets('css/style.css?ver=' . rand()) ?>">
    <title>Database Error</title>
</head>

<body style="height: 100vh;">
    <section class="container d-flex align-items-center flex-column gap-5 justify-content-center h-75">
        <img width="150" src="<?= assets('images/database-icon.png') ?>" alt="database-icon">
        <h1 class="text-danger text-uppercase">Database error</h1>
        <p class="fs-5 text-secondary"><?= $message ?></p>
    </section>
</body>
<script src="<?= assets('js/bootstrap.min.js?ver=' . rand()) ?>"></script>
<script src="<?= assets('js/script.js?ver=' . rand()) ?>"></script>

</html>