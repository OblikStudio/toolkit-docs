<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?= $page->title() ?> &bull; Example &bull; <?= $site->title() ?>
	</title>

	<?= css('assets/main.css') ?>

	<style>
		<?php require $page->root() . '/style.css' ?>
	</style>
</head>

<body class="overflow-x-hidden">
	<?php require $page->root() . '/index.html' ?>

	<?= js('assets/' . $page->slug() . '.js') ?>
</body>

</html>
