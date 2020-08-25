<?= snippet('document/open') ?>

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

	<div class="flex -my-4 text-xl">
		<?php
		$all = $site->index()->listed();
		$index = $all->indexOf($page);

		$prev = $all->nth($index - 1);
		$next = $all->nth($index + 1);
		?>

		<?php if ($prev) : ?>
			<a class="b-anchor py-4 text-accent font-bold" href="<?= $prev->url() ?>">
				&larr; <?= $prev->title() ?>
			</a>
		<?php endif ?>

		<?php if ($next) : ?>
			<a class="b-anchor ml-auto py-4 text-accent font-bold" href="<?= $next->url() ?>">
				<?= $next->title() ?> &rarr;
			</a>
		<?php endif ?>
	</div>
</main>

<?= snippet('document/close') ?>
