<?php

ob_start();
require $page->root() . '/index.html';
$html = ob_get_clean();

if (is_numeric($active)) {
	$data = "active: $active";
} else {
	$data = '';
}

?>

<div class="my-8" ob-tabs="<?= $data ?>">
	<div class="flex -my-4">
		<button class="b-btn px-6 py-4" ob-tabs-toggle>HTML</button>
		<button class="b-btn px-6 py-4" ob-tabs-toggle>CSS</button>
		<button class="b-btn px-6 py-4" ob-tabs-toggle>JS</button>
		<button class="b-btn px-6 py-4" ob-tabs-toggle>Result</button>
	</div>

	<div class="mt-4">
		<pre ob-tabs-item><code class="language-html"><?= htmlspecialchars($html) ?></code></pre>
		<pre ob-tabs-item><code class="language-css"><?php require $page->root() . '/style.css' ?></code></pre>
		<pre ob-tabs-item><code class="language-js"><?php require $page->root() . '/script.js' ?></code></pre>
		<iframe class="w-full" data-src="<?= $page->url() ?>" ob-tabs-item></iframe>
	</div>
</div>
