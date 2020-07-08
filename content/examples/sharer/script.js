import { Watcher } from 'oblik'
import { Sharer } from 'oblik/components/sharer'

let w = new Watcher(document.body, {
	components: {
		sharer: Sharer
	}
})

w.init()
