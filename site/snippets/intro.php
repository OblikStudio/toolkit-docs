<header class="b-intro flex flex-col justify-between w-full h-screen p-12 bg-black bg-center bg-no-repeat" style="background-image: url(<?= $site->file('visual.jpg')->url() ?>);" ob-intro>

	<div class="relative">
		<div class="absolute top-0 left-0">
			<img src="<?= $site->file('logo-light.svg')->url() ?>" alt="Oblik Toolkit white logo text">
		</div>

		<div class="grid grid-flow-col justify-start gap-8 w-full max-w-content mx-auto text-white">
			<a class="b-anchor py-3" href="#content">Introduction</a>
			<a class="b-anchor py-3" href="https://github.com/oblikjs/oblik/issues" target="_blank" rel="nofollow">Issues</a>
			<span class="py-3 select-none">&mdash;</span>
			<a class="b-anchor py-3" href="https://oblik.studio" target="_blank" rel="nofollow">Oblik Studio</a>
		</div>

		<div class="absolute top-0 right-0 text-white">
			<a class="b-anchor inline-block py-3 font-bold" href="https://www.npmjs.com/package/oblik" target="_blank" rel="nofollow">Download</a>
		</div>
	</div>

	<div class="w-full max-w-content mx-auto">
		<h1 class="text-5xl leading-tight text-white"><?= $site->heading() ?></h1>
		<p class="mt-6 text-2xl leading-snug text-white text-opacity-75"><?= $site->headline() ?></p>
		<div class="mt-12">
			<a class="b-anchor inline-block px-8 py-4 text-lg font-bold bg-white text-gray-900" href="#content">Get Started</a>
			<a class="b-anchor inline-block px-8 py-4 text-lg font-bold text-white" href="#content">GitHub</a>
		</div>
	</div>

	<div class="relative text-sm font-bold text-white">
		<div class="absolute top-0 left-0">
			<a class="b-anchor block" href="https://github.com/oblikjs" target="_blank" rel="nofollow">GitHub</a>
			<a class="b-anchor block" href="https://twitter.com/oblikweare" target="_blank" rel="nofollow">Twitter</a>
		</div>

		<div class="w-full max-w-content mx-auto">
			<p class="s-links"><?= $site->headerBottom()->kti() ?></p>
		</div>

		<div class="absolute top-0 right-0">
			<div class="flex text-right">
				<p class="mr-12">Version<br>1.1.1</p>
				<a class="b-anchor" href="#content">
					<svg width="3em" height="3em" viewBox="0 0 48 48">
						<circle cx="24" cy="24" r="23" fill="black" stroke="white" stroke-width="2" />
						<path d="M25.614 32.3213C24.8401 33.6431 22.9284 33.6399 22.1589 32.3156L15.5861 21.0049C14.8113 19.6715 15.7733 18 17.3154 18L30.5112 18C32.0563 18 33.0178 19.6773 32.2371 21.0106L25.614 32.3213Z" fill="currentColor" />
					</svg>
				</a>
			</div>
		</div>
	</div>

</header>
