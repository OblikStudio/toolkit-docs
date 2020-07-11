import { Watcher } from 'oblik'
import { Tweet } from 'oblik/components/tweet'

let w = new Watcher(document.body, {
	components: {
		tweet: Tweet
	}
})

w.init()
