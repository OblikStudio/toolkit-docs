<?= snippet('document/open') ?>

<aside class="b-sidebar fixed top-0 left-0 px-4 h-screen text-gray-600 bg-gray-200">
	<a href="<?= $site->url() ?>">
		<img class="h-8 mx-auto my-8" src="<?= $site->file('logo.svg')->url() ?>" alt="">
	</a>

	<ul class="my-4">
		<?php foreach ($pages as $entry) : ?>
			<li class="font-bold">
				<a class="flex py-1 hover:text-black transition duration-200 <?= e($page === $entry, 'text-black') ?>" href="<?= $entry->url() ?>">
					<?= $entry->title() ?>

					<?php if ($page === $entry) : ?>
						<span class="text-accent">.</span>
					<?php endif ?>
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</aside>

<main class="s-content container mx-auto my-24 max-w-3xl">
	<h1>
		<?= $page->title() ?>
	</h1>

	<?= $page->content()->content()->markdown()->kirbytags() ?>
</main>

<?= snippet('document/close') ?>
