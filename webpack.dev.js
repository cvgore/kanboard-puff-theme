const path = require('path');
const merge = require('webpack-merge');
const common = require('./webpack.common');
const fs = require('fs');

const HOT_INDICATOR_FILE = path.resolve(__dirname, '.webpack-hot');

const __webpack_public_path__ = 'kanboard.local:8000/';

module.exports = merge({
	devtool: 'inline-source-map',
	devServer: {
		hot: process.env.HMR_ENABLED === 'enabled' || false,
		port: 8000,
		host: '0.0.0.0',
		allowedHosts: [
			'kanboard.local'
		],
		contentBase: path.resolve(__dirname, 'Asset'),
		after: function (app, server, compiler) {
			const uri = `${server.options.host}:${server.options.port}`;
			fs.writeFile(HOT_INDICATOR_FILE, uri, (err) => {
				if (err) {
					throw err;
				}
			});

			process.on('exit', () => {
				fs.unlink(HOT_INDICATOR_FILE, () => {});
			});
		},
	},
	module: {
		rules: [
			{
				test: /\.scss$/i,
				use: ['style-loader'],
			},
		],
	},
}, common);
