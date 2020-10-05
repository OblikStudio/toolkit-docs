import { Component } from "oblik";
import { throttle } from "oblik/utils/functions";

export class Intro extends Component {
	updateThrottled = throttle(this.update.bind(this), 100)

	init () {
		window.addEventListener('scroll', this.updateThrottled)
		this.update()
	}

	update () {
		let box = this.$element.getBoundingClientRect()
		if (box.bottom >= 0) {
			document.body.classList.add('is-at-intro')
		} else {
			document.body.classList.remove('is-at-intro')
		}
	}
}

export default Intro
