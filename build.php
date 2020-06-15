<?php

use Kirby\Cms\Media;
use Kirby\Toolkit\Dir;

require 'kirby/bootstrap.php';

$pages = kirby()->site()->pages();
$path = __DIR__ . '/public';

if (!is_dir($path)) {
	mkdir($path);
}

foreach ($pages as $key => $page) {
	$id = $page->uid();

	if ($id === 'home') {
		$uri = '/';
	} else {
		$uri = '/' . $page->uri();
	}

	$folder = $path . $uri;

	if (!is_dir($folder)) {
		mkdir($folder);
	}

	$file = $folder . '/index.html';
	$html = $page->render();

	file_put_contents($file, $html);

	foreach ($page->files() as $file) {
		Media::link($file->parent(), $file->mediaHash(), $file->filename());
	}
}

foreach (site()->files() as $file) {
	Media::link($file->parent(), $file->mediaHash(), $file->filename());
}

Dir::copy(kirby()->root('assets'), $path . '/assets');
Dir::copy(kirby()->root('media'), $path . '/media');
