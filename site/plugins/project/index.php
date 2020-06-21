<?php

use Kirby\Cms\App;
use Kirby\Cms\Field;
use Kirby\Toolkit\Obj;

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
		},
		'toHeadings' => function ($field) {
			$result = [];
			$matches = [];
			$stack = [];
			$entry = null;
			$prev = null;

			$pattern = '!<h(\\d)>(.*?)<\\/h\\1>!';

			preg_match_all($pattern, $field->value, $matches, PREG_SET_ORDER);

			foreach ($matches as $match) {
				$prev = $entry;
				$entry = new Obj([
					'level' => (int) $match[1],
					'text' => new Field($field->parent(), 'text', $match[2]),
					'children' => []
				]);

				if (isset($prev)) {
					if ($prev->level < $entry->level) {
						array_push($prev->children, $entry);
						array_push($stack, $prev);
						continue;
					} else if ($prev->level > $entry->level) {
						while (count($stack) > 0) {
							$last = end($stack);

							if ($last && $last->level >= $entry->level) {
								array_pop($stack);
							} else {
								break;
							}
						}
					}

					$last = end($stack);

					if ($last) {
						array_push($last->children, $entry);
					} else {
						array_push($result, $entry);
					}
				} else {
					array_push($result, $entry);
				}
			}

			if (count($result) > 0) {
				return $result;
			} else {
				return null;
			}
		}
	]
]);
