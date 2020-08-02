import '../css/index.css'

import './modules/keyboard.ts'

import { Watcher } from './oblik/src/index'
import scrollto from './oblik/src/components/scroll-to'
import tabs from './modules/tabs'
import { Animation } from 'oblik/utils'
import { easeOutQuad } from 'oblik/utils/easings'

let w = new Watcher(document.body, {
	components: {
		tabs
	}
})

w.init()

document.addEventListener('click', scrollto.clickHandler())

let anim = new Animation(500, easeOutQuad)
anim.on('update', console.log)
anim.run()
