var MyComponent = function (element, options) {
	element.addEventListener('click', function () {
		element.innerHTML = options.text
	})
}

var w = new oblik.Watcher(document.body, {
	components: {
		foo: MyComponent
	}
})

w.init()
