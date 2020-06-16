<?php

use Kirby\Toolkit\Tpl;

$html = Tpl::load($page->root() . '/index.html');
$css = Tpl::load($page->root() . '/style.css');
$cssDemo = Tpl::load($page->root() . '/demo.css');

?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?= $page->title() ?> &bull; Example &bull; <?= $site->title() ?>
	</title>

	<?= css('assets/main.css') ?>

	<style>
		<?= $css ?><?= $cssDemo ?>
	</style>
</head>

<body class="overflow-x-hidden">
	<?= $html ?>
	<?= js('assets/' . $page->slug() . '.js') ?>
</body>

</html>
