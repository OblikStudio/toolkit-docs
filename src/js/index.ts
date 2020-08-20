import '../css/index.css'

import './modules/keyboard.ts'

import { Watcher } from 'oblik'
import scrollto from 'oblik/components/scroll-to'
import tabs from './modules/tabs'

let w = new Watcher(document.body, {
	components: {
		tabs
	}
})

w.init()

document.addEventListener('click', scrollto.clickHandler())
