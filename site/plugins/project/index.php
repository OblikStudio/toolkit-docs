<?php

use Kirby\Cms\App;

App::plugin('oblik/docs', [
	'tags' => [
		'example' => [
			'attr' => [
				'active'
			],
			'html' => function ($tag) {
				$page = page('examples/' . $tag->value);
				$active = $tag->active ?? null;

				if ($page) {
					return snippet('example', compact('page', 'active'), true);
				} else {
					return null;
				}
			}
		]
	],
	'fieldMethods' => [
		'clean' => function ($field) {
			$field->value = preg_replace('/<p>(\(.*?\))<\/p>/', '$1', $field->value);
			return $field;
		}
	]
]);
