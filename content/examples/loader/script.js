import { Watcher } from 'oblik'
import { Loader } from 'oblik/components/loader'

let w = new Watcher(document.body, {
	components: {
		loader: Loader
	}
})

w.init()
