const path = require( 'path' );

// Ensure WP_BASE_URL and SSL bypass are set before requiring test utilities
process.env.WP_BASE_URL = process.env.WP_BASE_URL || 'https://development.test';
process.env.NODE_TLS_REJECT_UNAUTHORIZED = '0';
process.env.WP_ARTIFACTS_PATH = process.env.WP_ARTIFACTS_PATH || path.join( process.cwd(), 'artifacts' );
process.env.STORAGE_STATE_PATH = process.env.STORAGE_STATE_PATH || path.join(
	process.env.WP_ARTIFACTS_PATH,
	'storage-states/admin.json'
);

const { defineConfig, devices } = require( '@playwright/test' );

module.exports = defineConfig( {
	reporter: process.env.CI ? [ [ 'github' ] ] : [ [ 'list' ] ],
	forbidOnly: !! process.env.CI,
	workers: 1,
	retries: process.env.CI ? 2 : 0,
	timeout: 60_000,
	testDir: './tests/e2e',
	outputDir: path.join( process.env.WP_ARTIFACTS_PATH, 'test-results' ),
	globalSetup: require.resolve( '@wordpress/scripts/config/playwright/global-setup.js' ),
	use: {
		baseURL: process.env.WP_BASE_URL,
		headless: true,
		viewport: {
			width: 1280,
			height: 800,
		},
		ignoreHTTPSErrors: true,
		locale: 'en-US',
		contextOptions: {
			reducedMotion: 'reduce',
			strictSelectors: false,
		},
		storageState: process.env.STORAGE_STATE_PATH,
		actionTimeout: 10_000,
		trace: process.env.CI ? 'retain-on-failure' : 'off',
		screenshot: 'only-on-failure',
	},
	webServer: undefined, // Zero Docker: direct native Valet execution
	projects: [
		{
			name: 'chromium',
			use: { ...devices[ 'Desktop Chrome' ] },
		},
	],
} );
