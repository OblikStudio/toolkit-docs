import { Watcher } from 'oblik'
import { Scrolled } from 'oblik/components/scrolled'

let w = new Watcher(document.body, {
	components: {
		scrolled: Scrolled
	}
})

w.init()
