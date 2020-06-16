import { Watcher, Component } from 'oblik'

class Text extends Component { }

class Toggle extends Component {
	init () {
		this.$element.addEventListener('click', () => {
			this.$parent.changeText(this.$options.text)
		})
	}
}

class MyComponent extends Component {
	static components = {
		text: Text,
		toggle: Toggle
	}

	changeText (value) {
		this.$text.$element.innerHTML = value
	}
}

let w = new Watcher(document.body, {
	components: {
		foo: MyComponent
	}
})

w.init()
