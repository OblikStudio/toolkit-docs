<?= snippet('document/open') ?>

<a class="b-btn b-btn--github fixed top-0 right-0 hidden md:block p-4" href="https://github.com/oblikjs/oblik" target="_blank">
	<svg class="h-6" viewBox="0 0 496 512">
		<path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
	</svg>
</a>

<nav class="b-navbar fixed z-50 top-0 left-0 flex md:hidden justify-between w-full px-4 bg-white is-scrolled-up" ob-scrolled>
	<a class="flex items-center md:hidden" href="<?= $site->url() ?>">
		<img class="h-6" src="<?= $site->file('logo.svg')->url() ?>" alt="logo">
	</a>

	<button class="b-navbar__toggle -mx-4 px-4 py-4" ob-toggle="$target: body, class: is-active-nav">
		<svg width="24" height="24" viewBox="0 0 24 24">
			<path d="M21.9999 5C22.5521 5 22.9999 5.44772 22.9999 6C22.9999 6.55228 22.5521 7 21.9999 7H2C1.44772 7 1 6.55228 1 6C1 5.44772 1.44772 5 2 5H21.9999Z" fill="black" />
			<path d="M22.9999 12C22.9999 11.4477 22.5521 11 21.9999 11H2C1.44772 11 1 11.4477 1 12C1 12.5523 1.44772 13 2 13H21.9999C22.5521 13 22.9999 12.5523 22.9999 12Z" fill="black" />
			<path d="M22.9999 18C22.9999 17.4477 22.5521 17 21.9999 17H2C1.44772 17 1 17.4477 1 18C1 18.5523 1.44772 19 2 19H21.9999C22.5521 19 22.9999 18.5523 22.9999 18Z" fill="black" />
		</svg>
	</button>
</nav>

<aside class="b-sidebar fixed z-40 top-0 left-0 h-full px-4 overflow-auto">
	<a class="hidden md:block" href="<?= $site->url() ?>">
		<img class="h-8 mx-auto my-8" src="<?= $site->file('logo.svg')->url() ?>" alt="logo">
	</a>

	<ul class="my-4">
		<?= snippet('nav-links', ['items' => $pages->listed()]) ?>
	</ul>
</aside>

<div class="b-sidebar__pad fixed z-30 top-0 left-0 w-full h-full"></div>

<main class="b-content my-24">
	<div class="s-content mx-auto">
		<h1>
			<?= $page->title() ?>
		</h1>

		<?php if ($page->content()->content()->isNotEmpty()) : ?>
			<?= $page->content()->content()->markdown()->clean()->kirbytags()->headings(function ($heading) {
				return snippet('heading', ['item' => $heading], true);
			}) ?>
		<?php endif ?>
	</div>

	<hr class="my-12 border-t-2 border-gray-200">

	<div class="flex -my-4 text-lg md:text-xl">
		<?php
		$all = $site->index()->listed();
		$index = $all->indexOf($page);

		$prev = $all->nth($index - 1);
		$next = $all->nth($index + 1);
		?>

		<?php if ($prev) : ?>
			<a class="b-anchor py-4 font-bold text-accent" href="<?= $prev->url() ?>">
				&larr; <?= $prev->title() ?>
			</a>
		<?php endif ?>

		<?php if ($next) : ?>
			<a class="b-anchor ml-auto py-4 font-bold text-accent" href="<?= $next->url() ?>">
				<?= $next->title() ?> &rarr;
			</a>
		<?php endif ?>
	</div>
</main>

<?= snippet('document/close') ?>
