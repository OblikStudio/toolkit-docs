<?= snippet('document/open') ?>

<?php if (page()->isHomePage()) : ?>
	<?= snippet('intro') ?>
<?php endif ?>

<nav class="b-navbar fixed z-50 top-0 left-0 flex md:hidden justify-between w-full px-4 text-gray-900 bg-white is-scrolled-up" ob-scrolled>
	<a class="b-navbar__logo flex items-center md:hidden" href="<?= $site->url() ?>">
		<?= svg($site->file('logo.svg')) ?>
	</a>

	<button class="b-navbar__toggle -mx-4 px-4 py-4" ob-toggle="$target: body, class: is-active-nav">
		<svg width="24" height="24" viewBox="0 0 24 24">
			<path d="M21.9999 5C22.5521 5 22.9999 5.44772 22.9999 6C22.9999 6.55228 22.5521 7 21.9999 7H2C1.44772 7 1 6.55228 1 6C1 5.44772 1.44772 5 2 5H21.9999Z" fill="currentColor" />
			<path d="M22.9999 12C22.9999 11.4477 22.5521 11 21.9999 11H2C1.44772 11 1 11.4477 1 12C1 12.5523 1.44772 13 2 13H21.9999C22.5521 13 22.9999 12.5523 22.9999 12Z" fill="currentColor" />
			<path d="M22.9999 18C22.9999 17.4477 22.5521 17 21.9999 17H2C1.44772 17 1 17.4477 1 18C1 18.5523 1.44772 19 2 19H21.9999C22.5521 19 22.9999 18.5523 22.9999 18Z" fill="currentColor" />
		</svg>
	</button>
</nav>

<nav class="b-sidebar fixed z-40 top-0 left-0 flex flex-col justify-between h-full border-r border-gray-200 overflow-auto">
	<div class="p-12">
		<a class="hidden md:block text-gray-900" href="<?= $site->url() ?>">
			<?= svg($site->file('logo.svg')) ?>
		</a>

		<ul class="inline-block md:mt-8">
			<?= snippet('nav-links', ['items' => $pages->listed()]) ?>
		</ul>

		<div class="md:hidden">
			<hr class="my-8">

			<ul>
				<li><a class="b-btn inline-flex py-2 text-lg leading-5" href="https://oblik.studio" target="_blank" rel="nofollow">Oblik Studio</a></li>
				<li><a class="b-btn inline-flex py-2 text-lg leading-5" href="https://github.com/oblikjs" target="_blank" rel="nofollow">GitHub</a></li>
				<li><a class="b-btn inline-flex py-2 text-lg leading-5" href="https://twitter.com/oblikweare" target="_blank" rel="nofollow">Twitter</a></li>
			</ul>
		</div>
	</div>

	<div class="hidden md:block text-center border-t border-gray-200">
		<a class="inline-flex items-center h-16 text-lg font-bold" href="https://github.com/oblikjs/oblik" target="_blank" rel="nofollow">GitHub</a>
	</div>
</nav>

<div class="b-sidebar__pad fixed z-30 top-0 left-0 w-full h-full"></div>

<main id="content" class="b-content relative my-24 md:mb-40">
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

	<?php
	$headings = $page->content()->content()->markdown()->toHeadings();
	?>

	<?php if ($headings && count($headings) > 1 && count($headings) < 16) : ?>
		<div class="absolute hidden md:block top-0 left-100 h-full" ob-scrollnav>
			<ul class="b-nav-headings fixed -my-2 pt-16 pl-16">
				<?= snippet('nav-headings', ['items' => $headings]) ?>
			</ul>
		</div>
	<?php endif ?>
</main>

<div class="b-bottom-nav md:fixed z-30 bottom-0 left-0 w-full px-4 md:px-0 bg-white border-t border-gray-200">
	<div class="flex w-full max-w-content h-16 mx-auto text-lg md:text-xl">
		<?php
		$all = $site->index()->listed();
		$index = $all->indexOf($page);

		$prev = $all->nth($index - 1);
		$next = $all->nth($index + 1);
		?>

		<?php if ($prev) : ?>
			<a class="b-anchor inline-flex items-center font-bold text-accent" href="<?= $prev->url() ?>">
				&larr; <?= $prev->title() ?>
			</a>
		<?php endif ?>

		<?php if ($next) : ?>
			<a class="b-anchor inline-flex items-center ml-auto font-bold text-accent" href="<?= $next->url() ?>">
				<?= $next->title() ?> &rarr;
			</a>
		<?php endif ?>
	</div>
</div>

<?= snippet('document/close') ?>