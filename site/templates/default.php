<?= snippet('document/open') ?>

<aside class="b-sidebar fixed top-0 left-0 px-4 h-screen bg-gray-200">
	<a href="<?= $site->url() ?>">
		<img class="h-8 mx-auto my-8" src="<?= $site->file('logo.svg')->url() ?>" alt="logo">
	</a>

	<ul class="my-4">
		<?php foreach ($pages->listed() as $entry) : ?>
			<li>
				<a class="b-btn flex py-1 <?= e($page === $entry, 'is-active') ?>" href="<?= $entry->url() ?>">
					<?= $entry->title() ?>
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</aside>

<main class="container max-w-content my-24">
	<div class="s-content mx-auto">
		<h1>
			<?= $page->title() ?>
		</h1>

		<?php if ($page->content()->content()->isNotEmpty()) : ?>
			<?= $page->content()->content()->markdown()->clean()->kirbytags() ?>
		<?php endif ?>
	</div>

	<hr class="my-12 border-t-2 border-gray-200">

	<div class="flex -my-4 text-xl">
		<?php if ($prev = $page->prevListed()) : ?>
			<a class="b-anchor py-4 text-accent font-bold" href="<?= $prev->url() ?>">
				&larr; <?= $prev->title() ?>
			</a>
		<?php endif ?>

		<?php if ($next = $page->nextListed()) : ?>
			<a class="b-anchor ml-auto py-4 text-accent font-bold" href="<?= $next->url() ?>">
				<?= $next->title() ?> &rarr;
			</a>
		<?php endif ?>
	</div>
</main>

<?= snippet('document/close') ?>
