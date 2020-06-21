<?php foreach ($items as $item) : ?>
	<li>

		<?php
		$children = $item->children();
		?>

		<a class="flex py-2" href="#<?= $item->id() ?>">
			<?= $item->text() ?>
		</a>

		<?php if (count($children) > 0) : ?>
			<ul>
				<?= snippet('nav-headings', ['items' => $children]) ?>
			</ul>
		<?php endif ?>

	</li>
<?php endforeach ?>
