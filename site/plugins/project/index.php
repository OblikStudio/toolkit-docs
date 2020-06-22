<?php

use Kirby\Cms\App;
use Kirby\Cms\Field;
use Kirby\Toolkit\Obj;
use Kirby\Toolkit\Str;

App::plugin('oblik/docs', [
	'tags' => [
		'example' => [
			'attr' => [
				'active'
			],
			'html' => function ($tag) {
				$page = page('examples/' . $tag->value);
				$active = $tag->active ?? 1;

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
		'headings' => function ($field, callable $replace = null) {
			$entries = [];

			$field->value = preg_replace_callback('!<h(\\d)>(.*?)<\\/h\\1>!', function ($match) use ($field, $replace, &$entries) {
				$text = $match[2];
				$textPlain = Str::unhtml($text);
				$id = Str::slug($textPlain);

				$entry = new Obj([
					'id' => $id,
					'level' => (int) $match[1],
					'text' => new Field($field->parent(), 'text', $textPlain),
					'content' => new Field($field->parent(), 'content', $text),
					'children' => []
				]);

				array_push($entries, $entry);

				if ($replace) {
					return $replace($entry);
				} else {
					return $match[0];
				}
			}, $field->value);

			$result = [];
			$stack = [];
			$curr = null;
			$prev = null;

			foreach ($entries as $entry) {
				$prev = $curr;
				$curr = $entry;

				if (isset($prev)) {
					if ($prev->level < $curr->level) {
						array_push($prev->children, $curr);
						array_push($stack, $prev);
						continue;
					} else if ($prev->level > $curr->level) {
						while (count($stack) > 0) {
							$last = end($stack);

							if ($last && $last->level >= $curr->level) {
								array_pop($stack);
							} else {
								break;
							}
						}
					}

					$last = end($stack);

					if ($last) {
						array_push($last->children, $curr);
					} else {
						array_push($result, $curr);
					}
				} else {
					array_push($result, $curr);
				}
			}

			if (count($result) > 0) {
				$field->headings = $result;
			} else {
				$field->headings = null;
			}

			return $field;
		},
		'toHeadings' => function ($field) {
			return $field->headings()->headings;
		}
	]
]);
