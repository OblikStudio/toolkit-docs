import { Carousel, Rail, Item } from 'oblik/components/carousel'

let elCarousel = document.querySelector('.carousel')
let elRail = document.querySelector('.rail')
let elItems = document.querySelectorAll('.item')

let carousel = new Carousel(elCarousel)
let rail = new Rail(elRail, { infinite: true }, carousel)

for (let el of elItems) {
	new Item(el, null, rail)
}

carousel.$init()
