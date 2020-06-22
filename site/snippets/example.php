<?php

$html = $page->getMarkup();
$css = $page->getStylesText();
$js = $page->getScriptText();

if (is_numeric($active)) {
	$data = "active: $active";
} else {
	$data = '';
}

?>

<div class="my-8" ob-tabs="<?= $data ?>">
	<div class="flex -my-4">
		<?php if ($html) : ?>
			<button class="b-btn px-6 py-4" ob-tabs-toggle>HTML</button>
		<?php endif ?>

		<?php if ($css) : ?>
			<button class="b-btn px-6 py-4" ob-tabs-toggle>CSS</button>
		<?php endif ?>

		<?php if ($js) : ?>
			<button class="b-btn px-6 py-4" ob-tabs-toggle>JS</button>
		<?php endif ?>

		<button class="b-btn px-6 py-4" ob-tabs-toggle>Result</button>
	</div>

	<div class="mt-4 rounded-md overflow-hidden">
		<?php if ($html) : ?>
			<pre ob-tabs-item><code class="language-html"><?= htmlspecialchars($html) ?></code></pre>
		<?php endif ?>

		<?php if ($css) : ?>
			<pre ob-tabs-item><code class="language-css"><?= $css ?></code></pre>
		<?php endif ?>

		<?php if ($js) : ?>
			<pre ob-tabs-item><code class="language-js"><?= $js ?></code></pre>
		<?php endif ?>

		<iframe class="w-full" data-src="<?= $page->url() ?>" ob-tabs-item></iframe>
	</div>
</div>
