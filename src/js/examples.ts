import { Watcher } from './oblik/src/index'
import * as classes from './oblik/src/components'

let components = {}

for (let name in classes) {
	components[name.toLowerCase()] = classes[name]
}

let w = new Watcher(document.body, {
	components
})

w.init()

document.addEventListener('click', classes.ScrollTo.clickHandler())
