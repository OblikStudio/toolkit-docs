import { Watcher } from 'oblik'
import { Loader, Container } from 'oblik/components/loader'

class Content extends Container {
	animateIn () {
		this.$element.classList.add('is-animate-in')
		return this.promiseAnimation()
	}

	animateOut () {
		this.$element.classList.add('is-animate-out')
		return this.promiseAnimation()
	}
}

class Nav extends Content {
	// Uses the same logic as the first container.
}

Loader.components.content = Content
Loader.components.nav = Nav

let w = new Watcher(document.body, {
	components: {
		loader: Loader
	}
})

w.init()
