import '../css/index.css'

import './modules/keyboard.ts'

import { Watcher } from 'oblik'
import scrolled from 'oblik/components/scrolled'
import scrollto from 'oblik/components/scroll-to'
import toggle from 'oblik/components/toggle'
import intro from './modules/intro'
import scrollnav from './modules/scroll-nav'
import tabs from './modules/tabs'

let w = new Watcher(document.body, {
	components: {
		scrolled,
		toggle,
		intro,
		scrollnav,
		tabs
	}
})

w.init()

let navToggle = document.querySelector('.b-navbar__toggle')
let navPad = document.querySelector('.b-sidebar__pad')
let toggleComp = w.instance(navToggle, 'toggle') as toggle

navPad.addEventListener('click', () => {
	toggleComp.off()
})

document.addEventListener('click', scrollto.clickHandler({ offset: -48 }))
