import { Component } from "oblik";
import { easeInQuint } from "oblik/utils/easings";

interface Options {
	rail: HTMLElement
	frames: string[]
}

export class Intro extends Component<HTMLElement, Options> {
	canvas: HTMLCanvasElement
	images: HTMLImageElement[]
	frame = 0

	init () {
		this.canvas = this.$element.querySelector('canvas')
		this.images = this.$options.frames.map(url => {
			let img = new Image()
			img.src = url
			img.onload = () => {
				if (this.images[this.frame] === img) {
					this.draw()
				}
			}

			return img
		})

		window.addEventListener('scroll', () => {
			this.update()
		})

		window.addEventListener('resize', () => {
			this.size()
			this.draw()
		})

		this.size()
		this.update()
	}

	update () {
		let box = this.$element.getBoundingClientRect()
		let progress = this.$element.offsetTop / (this.$options.rail.offsetHeight - this.$element.offsetHeight)
		this.frame = Math.round(progress * (this.$options.frames.length - 1))
		this.draw()

		if (box.bottom >= 0) {
			document.body.classList.add('is-at-intro')
		} else {
			document.body.classList.remove('is-at-intro')
		}

		document.body.style.setProperty('--intro-anim', easeInQuint(progress).toString())
	}

	size () {
		this.canvas.width = this.canvas.offsetWidth
		this.canvas.height = this.canvas.offsetHeight
	}

	draw () {
		let ctx = this.canvas.getContext('2d')
		let img = this.images[this.frame]
		let ratio = img.naturalWidth / img.naturalHeight
		let drawHeight = this.canvas.offsetHeight
		let drawWidth = drawHeight * ratio
		let left = (this.canvas.width - drawWidth) / 2

		ctx.drawImage(img, left, 0, drawWidth, drawHeight)
	}
}

export default Intro
