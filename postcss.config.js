let isProd = process.argv.indexOf('--mode=production') >= 0

let imports = require('postcss-easy-import')
let tailwind = require('tailwindcss')('tailwind.config.js')
let nesting = require('postcss-nested')
let ancestors = require('postcss-nested-ancestors')
let autoprefixer = require('autoprefixer')

let purge = require('@fullhuman/postcss-purgecss')({
	whitelistPatternsChildren: [/tippy/],
	defaultExtractor: content => {
		return content.match(/[\w-/:]+(?<!:)/g) || []
	},
	content: [
		'./site/templates/**/*.*',
		'./site/snippets/**/*.*',
		'./site/modules/**/*.php'
	]
})

let nano = require('cssnano')({
	preset: 'default'
})

module.exports = {
	plugins: [
		imports,
		tailwind,
		autoprefixer,
		ancestors,
		nesting,
		...isProd ? [purge, nano] : []
	]
}
