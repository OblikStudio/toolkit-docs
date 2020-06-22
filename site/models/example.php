<?php

use Kirby\Cms\Page;
use Kirby\Toolkit\Tpl;

class ExamplePage extends Page
{
	public function getMarkup()
	{
		return Tpl::load($this->root() . '/index.html');
	}

	public function getStyles()
	{
		$css = Tpl::load($this->root() . '/style.css');
		$cssDemo = Tpl::load($this->root() . '/demo.css');
		return $css . PHP_EOL . $cssDemo;
	}

	public function getScriptURL()
	{
		$assets = kirby()->root('assets');
		$slug = $this->slug();
		$filepath = "$assets/$slug.js";

		if (file_exists($filepath)) {
			$filename = "$slug.js";
		} else {
			$filename = 'examples.js';
		}

		return "assets/$filename";
	}

	public function getStylesText()
	{
		return Tpl::load($this->root() . '/style.css');
	}

	public function getScriptText()
	{
		if ($this->scriptText()->isNotEmpty()) {
			return $this->scriptText()->value();
		} else {
			return Tpl::load($this->root() . '/script.js');
		}
	}
}
