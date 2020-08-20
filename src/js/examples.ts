import { Watcher } from 'oblik'
import * as classes from 'oblik/components'

let components = {}

for (let name in classes) {
	components[name.toLowerCase()] = classes[name]
}

let w = new Watcher(document.body, {
	components
})

w.init()

document.addEventListener('click', classes.ScrollTo.clickHandler())
