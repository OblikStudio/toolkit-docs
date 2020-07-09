import { Watcher } from 'oblik'
import { Toggle } from 'oblik/components/toggle'

let w = new Watcher(document.body, {
	components: {
		toggle: Toggle
	}
})

w.init()
