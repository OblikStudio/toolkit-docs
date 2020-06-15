<?php

$path = __DIR__ . '/public';

if (!is_dir($path)) {
    mkdir($path);
}

file_put_contents($path . '/index.html', '<h1>hello to my site</h1>');
