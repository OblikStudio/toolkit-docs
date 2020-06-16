document.addEventListener('keydown', event => {
	if (event.code === 'Tab') {
		document.body.classList.add('is-kb-focus')
	}
})
