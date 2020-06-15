import '../css/index.css'
import { Watcher, components } from './oblik/src/index'

let w = new Watcher(document.body, {
	components
})

w.init()
