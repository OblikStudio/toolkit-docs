<?php

$tag = 'h' . $item->level();

?>

<<?= $tag ?> id="<?= $item->id() ?>" class="b-heading">
	<a class="b-heading__fragment" href="#<?= $item->id() ?>">#</a>
	<?= $item->content() ?>
</<?= $tag ?>>
