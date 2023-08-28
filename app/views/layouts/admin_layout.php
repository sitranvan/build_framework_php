<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= assets('css/bootstrap.min.css?ver=' . rand()) ?>">
    <link rel="stylesheet" href="<?= assets('css/style.css?ver=' . rand()) ?>">
    <title><?= $title ?? 'My Website' ?></title>
</head>

<body>
    <?php loadView('blocks/header_admin') ?>
    <?php isset($forward) ? loadView($view, $forward) : loadView($view) ?>
    <?php loadView('blocks/footer_admin') ?>

</body>
<script src="<?= assets('js/bootstrap.min.js?ver=' . rand()) ?>"></script>
<script src="<?= assets('js/script.js?ver=' . rand()) ?>"></script>

</html>