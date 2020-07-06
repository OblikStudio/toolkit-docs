import { Watcher } from 'oblik'
import { ScrollTo } from 'oblik/components/scroll-to'

let w = new Watcher(document.body, {
	components: {
		scrollto: ScrollTo
	}
})

w.init()

// Additionally, adds smooth scrolling to hash links.
document.addEventListener('click', ScrollTo.clickHandler())
