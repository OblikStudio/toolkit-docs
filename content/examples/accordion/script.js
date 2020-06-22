import { Watcher } from 'oblik'
import { Accordion } from 'oblik/components/accordion'

let w = new Watcher(document.body, {
	components: {
		accordion: Accordion
	}
})

w.init()
