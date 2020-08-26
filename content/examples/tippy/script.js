import { Watcher, Component } from 'oblik'
import tippy from 'tippy.js'
import 'tippy.js/dist/tippy.css'

class Tippy extends Component {
	init () {
		let template = this.$options?.content?.innerHTML

		if (template) {
			this.$options.content = template
			this.$options.allowHTML = true
		}

		this.tippy = tippy(this.$element, this.$options)
	}

	destroy () {
		this.tippy.destroy()
	}
}

let w = new Watcher(document.body, {
	components: {
		tippy: Tippy
	}
})

w.init()
