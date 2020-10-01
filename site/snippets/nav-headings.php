<?php

$size = $size ?? 'large';

?>

<?php foreach ($items as $item) : ?>
	<li>

		<?php
		$children = $item->children();
		?>

		<a class="b-btn py-2 <?= r($size === 'large', 'text-lg leading-5', 'leading-4') ?>" href="#<?= $item->id() ?>" ob-scrollnav-item>
			<?= $item->text() ?>
		</a>

		<?php if (count($children) > 0) : ?>
			<ul>
				<?= snippet('nav-headings', ['items' => $children, 'size' => 'small']) ?>
			</ul>
		<?php endif ?>

	</li>
<?php endforeach ?>