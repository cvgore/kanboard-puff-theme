const path = require('path');
const TerserPlugin = require('terser-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
	mode: process.env.NODE_ENV,
	entry: '@/main.js',
	resolve: {
		alias: {
			'@': path.resolve(__dirname, 'src/'),
		},
	},
	optimization: {
		minimizer: [
			new TerserPlugin({
				test: /\.js(\?.*)?$/i,
			}),
		],
	},
	plugins: [
		new CleanWebpackPlugin(),
	],
	module: {
		rules: [
			{
				test: /\.scss$/,
				use: [
					'css-loader',
					'resolve-url-loader',
					{
						loader: 'sass-loader',
						options: {
							// Prefer `dart-sass`
							implementation: require('sass'),
						},
					},
				],
			},
			{
				test: /\.js$/,
				include: path.resolve(__dirname, 'src'),
				use: [
					'babel-loader',
				],
			},
			{
				test: /\.(woff|woff2|eot|ttf|otf|svg)$/,
				use: ['file-loader'],
			},
		],
	},
	output: {
		filename: 'puff.min.js',
		path: path.resolve(__dirname, 'Asset'),
	},
};
