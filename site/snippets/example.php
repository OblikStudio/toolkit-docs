<?php

ob_start();
require $page->root() . '/index.html';
$html = ob_get_clean();

?>

<div ob-tabs>
	<div>
		<button ob-tabs-toggle>HTML</button>
		<button ob-tabs-toggle>CSS</button>
		<button ob-tabs-toggle>JS</button>
		<button ob-tabs-toggle>Result</button>
	</div>

	<pre class="language-html" ob-tabs-item><?= htmlspecialchars($html) ?></pre>
	<pre class="language-css" ob-tabs-item><?php require $page->root() . '/style.css' ?></pre>
	<pre class="language-js" ob-tabs-item><?php require $page->root() . '/script.js' ?></pre>
	<iframe class="w-full" data-src="<?= $page->url() ?>" ob-tabs-item></iframe>
</div>
