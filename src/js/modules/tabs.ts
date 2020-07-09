import { Tabs, Item } from '../oblik/src/components/tabs'

class CustomItem extends Item {
	$options: {
		id: string
	}
}

export class CustomTabs extends Tabs {
	$item: CustomItem[]
	$options: Tabs['$options'] & {
		active: string
	}

	init () {
		if (this.$options.active) {
			let item = this.$item.find(item => item.$options.id === this.$options.active)
			this.toggle(this.$item.indexOf(item))
		} else {
			this.toggle(0)
		}
	}

	toggle (index: number) {
		super.toggle(index)

		let item = this.$item[index]
		if (item?.$element.tagName === 'IFRAME') {
			let dataSrc = item.$element.getAttribute('data-src')
			let src = item.$element.getAttribute('src')

			if (src !== dataSrc) {
				item.$element.setAttribute('src', dataSrc)
			}
		}
	}
}

export default CustomTabs
