import '../css/index.css'

import './modules/keyboard.ts'

import { Watcher } from 'oblik'
import scrolled from 'oblik/components/scrolled'
import scrollto from 'oblik/components/scroll-to'
import toggle from 'oblik/components/toggle'
import tabs from './modules/tabs'

let w = new Watcher(document.body, {
	components: {
		scrolled,
		toggle,
		tabs
	}
})

w.init()

document.addEventListener('click', scrollto.clickHandler())
