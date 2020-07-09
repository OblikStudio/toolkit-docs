import { Watcher } from 'oblik'
import { Tabs } from 'oblik/components/tabs'

let w = new Watcher(document.body, {
	components: {
		tabs: Tabs
	}
})

w.init()
