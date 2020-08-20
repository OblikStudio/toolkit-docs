const path = require('path')

const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const BrowserSyncWebpackPlugin = require('browser-sync-webpack-plugin')

module.exports = {
	entry: {
		main: './src/js/index.ts',
		examples: './src/js/examples.ts',
		polyfills: './src/js/polyfills.ts',

		'carousel': './content/examples/carousel/script.js',
		'carousel-watcher': './content/examples/carousel-watcher/script.js',
		'custom-component': './content/examples/custom-component/script.js',
		'custom-subcomponent': './content/examples/custom-subcomponent/script.js',
		'loader-animated': './content/examples/loader-animated/script.js'
	},
	output: {
		path: path.resolve(__dirname, 'assets')
	},
	resolve: {
		extensions: ['.ts', '.js']
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: '[name].css'
		}),
		new BrowserSyncWebpackPlugin({
			host: 'toolkit-docs.work',
			proxy: 'http://toolkit-docs.work',
			port: 3000,
			open: false,
			files: [
				'site/**/*.php',
				'content/**/*.txt'
			]
		})
	],
	module: {
		rules: [
			{
				test: /\.(t|j)s$/,
				exclude: /node_modules/,
				loader: 'ts-loader',
				options: {
					transpileOnly: true
				}
			},
			{
				test: /\.css$/,
				use: [
					MiniCssExtractPlugin.loader,
					{
						loader: 'css-loader',
					},
					{
						loader: 'postcss-loader'
					}
				]
			},
			{
				test: /\.ttf$/,
				loader: 'file-loader',
				options: {
					name: '[name].[ext]',
					outputPath: 'fonts'
				}
			},
			{
				test: /\.svg$/,
				loader: 'file-loader',
				options: {
					name: '[name].[ext]',
					outputPath: 'images'
				}
			}
		]
	}
}
