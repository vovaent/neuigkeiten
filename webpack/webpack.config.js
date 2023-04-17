/**
 * WordPress Dependencies
 */
const defaultConfig = require( '@wordpress/scripts/config/webpack.config.js' );

/**
 * Internal dependencies
 */
const { getWebpackEntryPoints } = require( '@wordpress/scripts/utils' );
const desire = require( './utils/desire' );

const userConfig = desire( `${ __dirname }/config` );
const defaultEndpoints = getWebpackEntryPoints();

const config = {
	...defaultConfig,
	...{
		entry: { ...defaultEndpoints, ...userConfig.entry },
	},
};

module.exports = config;
