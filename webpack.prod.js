const path = require('path');
const merge = require('webpack-merge');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const common = require('./webpack.common');

module.exports = merge({
	plugins: [new MiniCssExtractPlugin({
		filename: '[name].min.css',
	})],
	module: {
		rules: [
			{
				test: /\.scss$/i,
				use: [MiniCssExtractPlugin.loader],
			},
		],
	},
}, common);
