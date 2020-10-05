<header class="b-intro flex flex-col justify-between w-full h-screen p-12 bg-black bg-center bg-no-repeat" style="background-image: url(<?= $site->file('visual.jpg')->url() ?>);" ob-intro>

	<div class="relative">
		<div class="absolute top-0 left-0">
			<img src="<?= $site->file('logo-light.svg')->url() ?>" alt="Oblik Toolkit white logo text">
		</div>

		<div class=" grid grid-flow-col justify-start gap-8 w-full max-w-content mx-auto text-white">
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

	<div></div>

</header>