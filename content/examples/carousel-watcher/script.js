import { Watcher } from 'oblik'
import { Carousel } from 'oblik/components/carousel'

let w = new Watcher(document.body, {
	components: {
		carousel: Carousel
	}
})

w.init()
