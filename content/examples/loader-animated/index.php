<div ob-loader>
	<nav>
		<span>Navigation</span>

		<div ob-loader-nav>
			<a class="is-active" href="/examples/loader-animated">Foo</a>
			<a href="/examples/loader-animated/bar">Bar</a>
		</div>
	</nav>

	<div ob-loader-content>
		<h1>Foo</h1>

		<p><?= lipsum(1, $source) ?></p>
		<p><?= lipsum(2, $source) ?></p>
		<p><?= lipsum(3, $source) ?></p>
	</div>
</div>
