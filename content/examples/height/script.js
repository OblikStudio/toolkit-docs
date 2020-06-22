import { Watcher } from 'oblik'
import { Height } from 'oblik/components/height'

let w = new Watcher(document.body, {
	components: {
		height: Height
	}
})

w.init()
