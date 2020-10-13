<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
	<link rel="manifest" href="/assets/favicons/site.webmanifest">
	<link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#111111">
	<link rel="shortcut icon" href="/assets/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-config" content="/assets/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<?= snippet('meta') ?>

	<?= css('assets/main.css') ?>
</head>

<body <?= e($page->isHomePage(), 'class="is-at-intro"') ?>>
