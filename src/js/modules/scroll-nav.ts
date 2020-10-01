import { Component } from 'oblik'
import { throttle } from 'oblik/utils/functions'

class Item extends Component {
	target: Element

	init () {
		let href = this.$element.getAttribute('href')
		let id = href?.split('#')?.[1]

		if (id) {
			this.target = document.getElementById(id)
		}
	}
}

export class ScrollNav extends Component {
	static components = {
		item: Item
	}

	$item: Item[] = []
	$targets: Element[]
	updateThrottle = throttle(this.update.bind(this), 100)

	init () {
		window.addEventListener('scroll', () => {
			this.updateThrottle()
		})

		this.update()
	}

	update () {
		let el = document.scrollingElement
		let height = window.innerHeight
		let scrollableHeight = el.scrollHeight - el.clientHeight
		let scrollRemaining = scrollableHeight - el.scrollTop
		let screenOffset = 0

		if (scrollableHeight < height) {
			screenOffset = (el.scrollTop / scrollableHeight) * height
		} else if (scrollRemaining < height) {
			screenOffset = height - scrollRemaining
		}

		let map: [Element, DOMRect][] = this.$item.map(item => {
			return [item.target, item.target.getBoundingClientRect()]
		})

		let val = map.reduce((memo, curr) => {
			let a = memo[1].top - screenOffset
			let b = curr[1].top - screenOffset
			return Math.abs(a) < Math.abs(b) ? memo : curr
		})

		let activeEl = null

		if (val[1].top < height) {
			activeEl = val[0]
		}

		this.$item.forEach(item => {
			if (item.target === activeEl) {
				item.$element.classList.add('is-active')
			} else {
				item.$element.classList.remove('is-active')
			}
		})
	}
}

export default ScrollNav
