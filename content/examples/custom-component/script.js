import { Watcher, Component } from 'oblik'

class MyComponent extends Component {
	init () {
		this.$element.addEventListener('click', () => {
			this.$element.innerHTML = this.$options.text
		})
	}
}

let w = new Watcher(document.body, {
	components: {
		foo: MyComponent
	}
})

w.init()
