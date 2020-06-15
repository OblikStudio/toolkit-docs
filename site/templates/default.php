<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $page->title() ?>
    </title>
</head>

<body>
    <?php foreach ($pages as $page) : ?>
        <a href="<?= $page->url() ?>">
            <?= $page->title() ?>
        </a>
    <?php endforeach ?>
</body>

</html>