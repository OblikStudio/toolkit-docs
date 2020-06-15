<?php

use Kirby\Cms\App;

App::plugin('oblik/docs', [
	'tags' => [
		'example' => [
			'html' => function ($tag) {
				$page = page('examples/' . $tag->value);

				if ($page) {
					return snippet('example', compact('page'), true);
				} else {
					return null;
				}
			}
		]
	]
]);
