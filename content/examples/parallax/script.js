import { Watcher } from 'oblik'
import { Parallax } from 'oblik/components/parallax'

let w = new Watcher(document.body, {
	components: {
		parallax: Parallax
	}
})

w.init()
