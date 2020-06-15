import { Carousel, Rail, Item } from 'oblik/components/carousel'

let carousel = new Carousel(document.querySelector('.carousel'))
let rail = new Rail(document.querySelector('.rail'), { infinite: true }, carousel)

for (let item of document.querySelectorAll('.item')) {
	new Item(item, null, rail)
}

carousel.$init()
