<button ob-scrollto="$target: #foo, offset: -15">
	Scroll to #foo
</button>

<a href="#bar">Link to #bar</a>

<p><?= lipsum(1, $source) ?></p>
<p><?= lipsum(2, $source) ?></p>
<h1 id="foo">Foo</h1>
<p><?= lipsum(3, $source) ?></p>
<h1 id="bar">Bar</h1>
<p><?= lipsum(4, $source) ?></p>
<p><?= lipsum(5, $source) ?></p>

<button ob-scrollto="offset: 0">
	Back to top
</button>
