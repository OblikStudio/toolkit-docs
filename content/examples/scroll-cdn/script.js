var button = document.querySelector('button')
var foo = document.querySelector('#foo')

button.addEventListener('click', function () {
	oblik.utils.scrollTo({
		target: foo,
		duration: 1000,
		easing: oblik.utils.easeOutQuint
	})
})
