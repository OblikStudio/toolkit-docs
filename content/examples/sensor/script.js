import { Watcher } from 'oblik'
import { Sensor } from 'oblik/components/sensor'

let w = new Watcher(document.body, {
	components: {
		sensor: Sensor
	}
})

w.init()
