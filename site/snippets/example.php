<?php

$html = $page->getMarkup(true);
$css = $page->getStylesText();
$js = $page->getScriptText();

if (!empty($active)) {
	$data = "active: $active";
} else {
	$data = '';
}

if ($page->height()->isNotEmpty()) {
	$style = 'style="height: ' . $page->height() . '"';
} else {
	$style = '';
}

?>

<div class="my-8" ob-tabs="<?= $data ?>">
	<div class="flex -ml-2 md:ml-0 -my-4 md:pl-2">
		<?php if ($html) : ?>
			<button class="b-btn px-2 md:px-6 py-4" ob-tabs-toggle>HTML</button>
		<?php endif ?>

		<?php if ($css) : ?>
			<button class="b-btn px-2 md:px-6 py-4" ob-tabs-toggle>CSS</button>
		<?php endif ?>

		<?php if ($js) : ?>
			<button class="b-btn px-2 md:px-6 py-4" ob-tabs-toggle>JS</button>
		<?php endif ?>

		<button class="b-btn px-2 md:px-6 py-4" ob-tabs-toggle>Result</button>
	</div>

	<div class="-mx-4 md:mx-0 mt-4 px-4 md:px-0 md:rounded-md overflow-hidden">
		<?php if ($html) : ?>
			<pre ob-tabs-item="id: html"><code class="language-html"><?= htmlspecialchars($html) ?></code></pre>
		<?php endif ?>

		<?php if ($css) : ?>
			<pre ob-tabs-item="id: css"><code class="language-css"><?= $css ?></code></pre>
		<?php endif ?>

		<?php if ($js) : ?>
			<pre ob-tabs-item="id: js"><code class="language-js"><?= $js ?></code></pre>
		<?php endif ?>

		<iframe class="w-full" data-src="<?= $page->url() ?>" ob-tabs-item="id: result" <?= $style ?>></iframe>
	</div>
</div>
