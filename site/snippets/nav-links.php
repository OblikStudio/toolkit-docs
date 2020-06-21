<?php foreach ($items as $item) : ?>
	<li>

		<?php
		$isActive = $page === $item;
		$children = $item->children()->listed();
		$hasNested = $children->count() > 0;

		if ($isActive) {
			$headings = $page->content()->content()->markdown()->toHeadings();
		} else {
			$headings = null;
		}
		?>

		<a class="b-btn flex py-2 <?= e($isActive, 'is-active') ?>" href="<?= $item->url() ?>">
			<?= $item->title() ?>
		</a>

		<?php if ($headings || $hasNested) : ?>
			<div class="pl-4 border-l border-gray-400">

				<?php if ($headings) : ?>
					<ul class="b-nav-headings">
						<?= snippet('nav-headings', ['items' => $headings]) ?>
					</ul>
				<?php endif ?>

				<?php if ($hasNested) : ?>
					<ul>
						<?= snippet('nav-links', ['items' => $children]) ?>
					</ul>
				<?php endif ?>

			</div>
		<?php endif ?>

	</li>
<?php endforeach ?>
