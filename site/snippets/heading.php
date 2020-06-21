<?php

$tag = 'h' . $item->level();

?>

<<?= $tag ?> id="<?= $item->id() ?>">
	<a href="#<?= $item->id() ?>">
		<?= $item->content() ?>
	</a>
</<?= $tag ?>>
