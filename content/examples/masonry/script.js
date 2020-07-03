import { Watcher } from 'oblik'
import { Masonry } from 'oblik/components/masonry'

let w = new Watcher(document.body, {
	components: {
		masonry: Masonry
	}
})

w.init()
