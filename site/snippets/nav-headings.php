<?php

use Kirby\Toolkit\Str;

?>

<?php foreach ($items as $item) : ?>
	<li>

		<?php
		$children = $item->children();
		$text = Str::unhtml($item->text()->value());
		?>

		<a class="flex py-2" href="#todo">
			<?= $text ?>
		</a>

		<?php if (count($children) > 0) : ?>
			<ul>
				<?= snippet('nav-headings', ['items' => $children]) ?>
			</ul>
		<?php endif ?>

	</li>
<?php endforeach ?>
