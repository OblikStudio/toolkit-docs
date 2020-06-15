import '../css/index.css'
import { Watcher } from './oblik/src/index'
import { Tabs as BaseTabs } from './oblik/src/components/tabs'

class Tabs extends BaseTabs {
	activate (index) {
		super.activate(index)

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

let w = new Watcher(document.body, {
	components: {
		tabs: Tabs
	}
})

w.init()
