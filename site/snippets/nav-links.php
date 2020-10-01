<?php

$size = $size ?? 'large';

?>

<?php foreach ($items as $item) : ?>
	<li>

		<?php
		$isActive = $item === $page;
		$isParentActive = $item === $page->parent();

		$children = $item->children()->listed();
		$hasChildren = $children->count() > 0;
		$isChildActive = $children->find($page) !== null;
		?>

		<a class="b-btn flex py-2 <?= r($size === 'large', 'b-sidebar__item text-lg leading-5', 'leading-4') ?> <?= e($isActive || $isChildActive, 'is-active') ?>" href="<?= $item->url() ?>">
			<?= $item->title() ?>
		</a>

		<?php if ($hasChildren && ($isActive || $isParentActive)) : ?>
			<div class="my-2 pl-3 border-l-2 border-gray-200">
				<ul class="inline-block -my-2">
					<?= snippet('nav-links', ['items' => $children, 'size' => 'small']) ?>
				</ul>
			</div>
		<?php endif ?>

	</li>
<?php endforeach ?>