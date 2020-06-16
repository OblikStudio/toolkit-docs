<?= snippet('document/open') ?>

<aside class="b-sidebar fixed top-0 left-0 px-4 h-screen bg-gray-200">
	<a href="<?= $site->url() ?>">
		<img class="h-8 mx-auto my-8" src="<?= $site->file('logo.svg')->url() ?>" alt="">
	</a>

	<ul class="my-4">
		<?php foreach ($pages as $entry) : ?>
			<li>
				<a class="b-btn flex py-1 <?= e($page === $entry, 'is-active') ?>" href="<?= $entry->url() ?>">
					<?= $entry->title() ?>
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</aside>

<main class="s-content container mx-auto my-24">
	<h1>
		<?= $page->title() ?>
	</h1>

	<?= $page->content()->content()->markdown()->clean()->kirbytags() ?>
</main>

<?= snippet('document/close') ?>
