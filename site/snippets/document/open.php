<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>
		<?= $page->title() ?> &bull; <?= $site->title() ?>
	</title>

	<?= css('assets/main.css') ?>
</head>

<body <?= e($page->isHomePage(), 'class="is-at-intro"') ?>>