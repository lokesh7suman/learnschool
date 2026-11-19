<?php
// phpcs:ignoreFile -- Standalone CLI E2E test runner.
/**
 * Standalone CLI E2E Block Patterns Test Runner for LearnSchool Theme.
 *
 * Comprehensive 4-tier validation suite for WordPress FSE block patterns:
 * - Tier 1: Existence, PHP syntax (php -l), docblock header extraction, ABSPATH security guard, EOF check.
 * - Tier 2: Slug uniqueness, localization text domain purity ('learnschool'), escaping context, security checks.
 * - Tier 3: Gutenberg block syntax tokenizer, stack balance, attribute JSON validation, theme.json presets, structural divergence.
 * - Tier 4: Theme-wide quality gate verification (npm run check: Stylelint, JSON lint, PHPCS, PHPStan Level 6).
 *
 * Supported CLI Options:
 *   --strict              (Default) Asserts all 42 pattern variations exist; exits non-zero if any is missing or failing.
 *   --only-existing       Validates only files currently present in patterns/, reporting pending patterns as [PENDING].
 *   --pattern=<name>      Filter checks by pattern family or specific pattern variation (e.g. --pattern=alert-bar).
 *   --filter=<name>       Alias for --pattern.
 *   --tier=<1..4>         Run only checks for a specific tier (1, 2, 3, or 4).
 *   --json                Output results as structured JSON report.
 *   --help                Display usage documentation.
 *
 * @package LearnSchool
 * @version 1.0.0
 */

declare(strict_types=1);

class LearnSchool_E2E_Patterns_Test_Runner {

	/**
	 * Root directory of the theme.
	 *
	 * @var string
	 */
	private string $rootDir;

	/**
	 * Patterns directory.
	 *
	 * @var string
	 */
	private string $patternsDir;

	/**
	 * Theme.json path.
	 *
	 * @var string
	 */
	private string $themeJsonPath;

	/**
	 * CLI Options.
	 *
	 * @var array<string, mixed>
	 */
	private array $options = [];

	/**
	 * Design tokens loaded from theme.json.
	 *
	 * @var array<string, array<string>>
	 */
	private array $tokens = [];

	/**
	 * Map of all 14 parent base patterns.
	 *
	 * @var array<string, string>
	 */
	private array $parentPatterns = [
		'alert-bar'          => 'patterns/alert-bar.php',
		'blog'               => 'patterns/blog-grid.php',
		'faq'                => 'patterns/faq-simple.php',
		'features'           => 'patterns/features-cards.php',
		'footer'             => 'patterns/footer-accreditation.php',
		'header'             => 'patterns/header-nav-cta.php',
		'hero'               => 'patterns/hero-split-tour.php',
		'hero-campus'        => 'patterns/hero-centered-campus.php',
		'landing-page'       => 'patterns/landing-page.php',
		'learning-materials' => 'patterns/learning-materials-split.php',
		'teachers'           => 'patterns/teachers-grid.php',
		'testimonials'       => 'patterns/testimonials-cards.php',
		'top-bar'            => 'patterns/top-bar-contact.php',
	];

	/**
	 * Catalog of all 42 expected pattern variations.
	 *
	 * @var array<string, array{family: string, milestone: string, file: string}>
	 */
	private array $expectedVariations = [
		// M1: Navigation & Utility Patterns
		'alert-bar-2'                  => [ 'family' => 'alert-bar',          'milestone' => 'M1', 'file' => 'patterns/alert-bar-2.php' ],
		'alert-bar-3'                  => [ 'family' => 'alert-bar',          'milestone' => 'M1', 'file' => 'patterns/alert-bar-3.php' ],
		'alert-bar-4'                  => [ 'family' => 'alert-bar',          'milestone' => 'M1', 'file' => 'patterns/alert-bar-4.php' ],
		'header-two-row'               => [ 'family' => 'header',             'milestone' => 'M1', 'file' => 'patterns/header-two-row.php' ],
		'header-3'                     => [ 'family' => 'header',             'milestone' => 'M1', 'file' => 'patterns/header-3.php' ],
		'header-4'                     => [ 'family' => 'header',             'milestone' => 'M1', 'file' => 'patterns/header-4.php' ],
		'top-bar-announcement'         => [ 'family' => 'top-bar',            'milestone' => 'M1', 'file' => 'patterns/top-bar-announcement.php' ],
		'top-bar-3'                    => [ 'family' => 'top-bar',            'milestone' => 'M1', 'file' => 'patterns/top-bar-3.php' ],
		'top-bar-4'                    => [ 'family' => 'top-bar',            'milestone' => 'M1', 'file' => 'patterns/top-bar-4.php' ],
		'footer-newsletter'            => [ 'family' => 'footer',             'milestone' => 'M1', 'file' => 'patterns/footer-newsletter.php' ],
		'footer-3'                     => [ 'family' => 'footer',             'milestone' => 'M1', 'file' => 'patterns/footer-3.php' ],
		'footer-4'                     => [ 'family' => 'footer',             'milestone' => 'M1', 'file' => 'patterns/footer-4.php' ],
		// M2: Hero & Banner Patterns
		'hero-split-checklist'         => [ 'family' => 'hero',               'milestone' => 'M2', 'file' => 'patterns/hero-split-checklist.php' ],
		'hero-3'                       => [ 'family' => 'hero',               'milestone' => 'M2', 'file' => 'patterns/hero-3.php' ],
		'hero-4'                       => [ 'family' => 'hero',               'milestone' => 'M2', 'file' => 'patterns/hero-4.php' ],
		'hero-campus-2'                => [ 'family' => 'hero-campus',        'milestone' => 'M2', 'file' => 'patterns/hero-campus-2.php' ],
		'hero-campus-3'                => [ 'family' => 'hero-campus',        'milestone' => 'M2', 'file' => 'patterns/hero-campus-3.php' ],
		'hero-campus-4'                => [ 'family' => 'hero-campus',        'milestone' => 'M2', 'file' => 'patterns/hero-campus-4.php' ],
		'call-to-action-3'             => [ 'family' => 'call-to-action',     'milestone' => 'M2', 'file' => 'patterns/call-to-action-3.php' ],
		'call-to-action-4'             => [ 'family' => 'call-to-action',     'milestone' => 'M2', 'file' => 'patterns/call-to-action-4.php' ],
		// M3: Academic & Service Patterns
		'features-journey'             => [ 'family' => 'features',           'milestone' => 'M3', 'file' => 'patterns/features-journey.php' ],
		'features-3'                   => [ 'family' => 'features',           'milestone' => 'M3', 'file' => 'patterns/features-3.php' ],
		'features-4'                   => [ 'family' => 'features',           'milestone' => 'M3', 'file' => 'patterns/features-4.php' ],
		'learning-materials-reversed'  => [ 'family' => 'learning-materials', 'milestone' => 'M3', 'file' => 'patterns/learning-materials-reversed.php' ],
		'learning-materials-3'         => [ 'family' => 'learning-materials', 'milestone' => 'M3', 'file' => 'patterns/learning-materials-3.php' ],
		'learning-materials-4'         => [ 'family' => 'learning-materials', 'milestone' => 'M3', 'file' => 'patterns/learning-materials-4.php' ],
		'faq-3'                        => [ 'family' => 'faq',                'milestone' => 'M3', 'file' => 'patterns/faq-3.php' ],
		'faq-4'                        => [ 'family' => 'faq',                'milestone' => 'M3', 'file' => 'patterns/faq-4.php' ],
		// M4: Community & Content Patterns
		'teachers-spotlight'           => [ 'family' => 'teachers',           'milestone' => 'M4', 'file' => 'patterns/teachers-spotlight.php' ],
		'teachers-3'                   => [ 'family' => 'teachers',           'milestone' => 'M4', 'file' => 'patterns/teachers-3.php' ],
		'teachers-4'                   => [ 'family' => 'teachers',           'milestone' => 'M4', 'file' => 'patterns/teachers-4.php' ],
		'testimonials-3'               => [ 'family' => 'testimonials',       'milestone' => 'M4', 'file' => 'patterns/testimonials-3.php' ],
		'testimonials-4'               => [ 'family' => 'testimonials',       'milestone' => 'M4', 'file' => 'patterns/testimonials-4.php' ],
		'blog-magazine'                => [ 'family' => 'blog',               'milestone' => 'M4', 'file' => 'patterns/blog-magazine.php' ],
		'blog-3'                       => [ 'family' => 'blog',               'milestone' => 'M4', 'file' => 'patterns/blog-3.php' ],
		'blog-4'                       => [ 'family' => 'blog',               'milestone' => 'M4', 'file' => 'patterns/blog-4.php' ],
		// M5: Full-Page Landing Page Templates
		'landing-page-2'               => [ 'family' => 'landing-page',       'milestone' => 'M5', 'file' => 'patterns/landing-page-2.php' ],
		'landing-page-3'               => [ 'family' => 'landing-page',       'milestone' => 'M5', 'file' => 'patterns/landing-page-3.php' ],
		'landing-page-4'               => [ 'family' => 'landing-page',       'milestone' => 'M5', 'file' => 'patterns/landing-page-4.php' ],
	];

	/**
	 * Allowed WordPress core & theme pattern categories.
	 *
	 * @var array<string>
	 */
	private array $allowedCategories = [
		// ── Ollie-aligned FSE standard categories ────────────────────────────
		'call-to-action',
		'faq',
		'featured',
		'features',
		'footer',
		'header',
		'hero',
		'learnschool',
		'pages',
		'posts',
		'pricing',
		'team',
		'testimonials',
	];

	/**
	 * Constructor.
	 *
	 * @param string               $rootDir Directory root of the theme.
	 * @param array<string, mixed> $options CLI Options.
	 */
	public function __construct( string $rootDir, array $options = [] ) {
		$this->rootDir        = rtrim( $rootDir, '/' );
		$this->patternsDir    = $this->rootDir . '/patterns';
		$this->themeJsonPath  = $this->rootDir . '/theme.json';
		$this->options        = array_merge( [
			'strict'        => true,
			'only-existing' => false,
			'pattern'       => null,
			'tier'          => null,
			'json'          => false,
		], $options );

		if ( $this->options['only-existing'] ) {
			$this->options['strict'] = false;
		}

		$this->loadThemeTokens();
	}

	/**
	 * Loads theme tokens from theme.json.
	 */
	private function loadThemeTokens(): void {
		if ( ! file_exists( $this->themeJsonPath ) ) {
			$this->tokens = [
				'colors'       => [],
				'fontSizes'    => [],
				'fontFamilies' => [],
				'spacing'      => [],
				'shadows'      => [],
			];
			return;
		}

		$json = json_decode( (string) file_get_contents( $this->themeJsonPath ), true );
		if ( ! is_array( $json ) ) {
			$this->tokens = [
				'colors'       => [],
				'fontSizes'    => [],
				'fontFamilies' => [],
				'spacing'      => [],
				'shadows'      => [],
			];
			return;
		}

		$colors = [];
		if ( isset( $json['settings']['color']['palette'] ) && is_array( $json['settings']['color']['palette'] ) ) {
			foreach ( $json['settings']['color']['palette'] as $p ) {
				if ( isset( $p['slug'] ) && is_string( $p['slug'] ) ) {
					$colors[] = $p['slug'];
				}
			}
		}

		$fontSizes = [];
		if ( isset( $json['settings']['typography']['fontSizes'] ) && is_array( $json['settings']['typography']['fontSizes'] ) ) {
			foreach ( $json['settings']['typography']['fontSizes'] as $f ) {
				if ( isset( $f['slug'] ) && is_string( $f['slug'] ) ) {
					$fontSizes[] = $f['slug'];
				}
			}
		}

		$fontFamilies = [];
		if ( isset( $json['settings']['typography']['fontFamilies'] ) && is_array( $json['settings']['typography']['fontFamilies'] ) ) {
			foreach ( $json['settings']['typography']['fontFamilies'] as $f ) {
				if ( isset( $f['slug'] ) && is_string( $f['slug'] ) ) {
					$fontFamilies[] = $f['slug'];
				}
			}
		}

		$spacing = [];
		if ( isset( $json['settings']['spacing']['spacingSizes'] ) && is_array( $json['settings']['spacing']['spacingSizes'] ) ) {
			foreach ( $json['settings']['spacing']['spacingSizes'] as $s ) {
				if ( isset( $s['slug'] ) && is_string( $s['slug'] ) ) {
					$spacing[] = $s['slug'];
				}
			}
		}

		$shadows = [];
		if ( isset( $json['settings']['shadow']['presets'] ) && is_array( $json['settings']['shadow']['presets'] ) ) {
			foreach ( $json['settings']['shadow']['presets'] as $sh ) {
				if ( isset( $sh['slug'] ) && is_string( $sh['slug'] ) ) {
					$shadows[] = $sh['slug'];
				}
			}
		}

		$this->tokens = [
			'colors'       => $colors,
			'fontSizes'    => $fontSizes,
			'fontFamilies' => $fontFamilies,
			'spacing'      => $spacing,
			'shadows'      => $shadows,
		];
	}

	/**
	 * Run the full test suite and return report.
	 *
	 * @return array<string, mixed>
	 */
	public function run(): array {
		$startTime = microtime( true );
		$targetVariations = $this->resolveTargetVariations();

		$tierFilter = null;
		if ( isset( $this->options['tier'] ) && is_numeric( $this->options['tier'] ) ) {
			$tierFilter = (int) $this->options['tier'];
		}

		$results = [
			'status'       => 'pass',
			'options'      => $this->options,
			'summary'      => [
				'total_expected' => count( $targetVariations ),
				'existing'       => 0,
				'pending'        => 0,
				'passed'         => 0,
				'failed'         => 0,
			],
			'tier_status'  => [
				1 => [ 'name' => 'Existence, PHP Syntax & Headers', 'status' => 'pass', 'errors' => 0 ],
				2 => [ 'name' => 'Slugs, Escaping & Text Domain',   'status' => 'pass', 'errors' => 0 ],
				3 => [ 'name' => 'Blocks, Presets & Divergence',   'status' => 'pass', 'errors' => 0 ],
				4 => [ 'name' => 'Theme Quality Gates',             'status' => 'pass', 'errors' => 0 ],
			],
			'patterns'     => [],
			'global_slugs' => [],
			'tier4'        => null,
			'execution_time' => 0.0,
		];

		// Collect base pattern slugs first to enforce absolute uniqueness
		$globalSlugs = [];
		foreach ( $this->parentPatterns as $baseKey => $baseRelPath ) {
			$absPath = $this->rootDir . '/' . $baseRelPath;
			if ( file_exists( $absPath ) ) {
				$baseHeaders = $this->extractHeaders( (string) file_get_contents( $absPath ) );
				if ( ! empty( $baseHeaders['Slug'] ) ) {
					$globalSlugs[$baseHeaders['Slug']] = $baseRelPath;
				}
			}
		}

		// Cache base pattern block structures for Tier 3 divergence testing
		$baseBlockCache = [];

		// Evaluate each pattern variation
		foreach ( $targetVariations as $varName => $varMeta ) {
			$relPath = $varMeta['file'];
			$absPath = $this->rootDir . '/' . $relPath;
			$exists  = file_exists( $absPath );

			$patternResult = [
				'name'      => $varName,
				'family'    => $varMeta['family'],
				'milestone' => $varMeta['milestone'],
				'file'      => $relPath,
				'exists'    => $exists,
				'status'    => 'pass',
				'tiers'     => [],
				'errors'    => [],
			];

			if ( ! $exists ) {
				$results['summary']['pending']++;
				if ( $this->options['strict'] ) {
					$patternResult['status'] = 'fail';
					$patternResult['errors'][] = "[Tier 1] File does not exist: {$relPath}";
					$results['tier_status'][1]['errors']++;
					$results['tier_status'][1]['status'] = 'fail';
					$results['summary']['failed']++;
					$results['status'] = 'fail';
				} else {
					$patternResult['status'] = 'pending';
				}
				$results['patterns'][$varName] = $patternResult;
				continue;
			}

			$results['summary']['existing']++;
			$content = (string) file_get_contents( $absPath );

			// Tier 1 Check
			if ( $tierFilter === null || $tierFilter === 1 ) {
				$t1 = $this->runTier1( $absPath, $content );
				$patternResult['tiers'][1] = $t1;
				if ( ! empty( $t1['errors'] ) ) {
					$patternResult['errors'] = array_merge( $patternResult['errors'], $t1['errors'] );
					$results['tier_status'][1]['errors'] += count( $t1['errors'] );
					$results['tier_status'][1]['status'] = 'fail';
				}
			}

			// Tier 2 Check
			if ( $tierFilter === null || $tierFilter === 2 ) {
				$t2 = $this->runTier2( $absPath, $content, $varName, $globalSlugs );
				$patternResult['tiers'][2] = $t2;
				if ( ! empty( $t2['errors'] ) ) {
					$patternResult['errors'] = array_merge( $patternResult['errors'], $t2['errors'] );
					$results['tier_status'][2]['errors'] += count( $t2['errors'] );
					$results['tier_status'][2]['status'] = 'fail';
				}
			}

			// Tier 3 Check
			if ( $tierFilter === null || $tierFilter === 3 ) {
				$baseFamily = $varMeta['family'];
				$baseFile   = $this->rootDir . '/' . ( $this->parentPatterns[$baseFamily] ?? "patterns/{$baseFamily}.php" );
				if ( ! isset( $baseBlockCache[$baseFamily] ) && file_exists( $baseFile ) ) {
					$baseBlockCache[$baseFamily] = $this->parseGutenbergBlocks( (string) file_get_contents( $baseFile ) );
				}
				$baseData = $baseBlockCache[$baseFamily] ?? null;

				$t3 = $this->runTier3( $absPath, $content, $varName, $baseFamily, $baseData );
				$patternResult['tiers'][3] = $t3;
				if ( ! empty( $t3['errors'] ) ) {
					$patternResult['errors'] = array_merge( $patternResult['errors'], $t3['errors'] );
					$results['tier_status'][3]['errors'] += count( $t3['errors'] );
					$results['tier_status'][3]['status'] = 'fail';
				}
			}

			if ( ! empty( $patternResult['errors'] ) ) {
				$patternResult['status'] = 'fail';
				$results['summary']['failed']++;
				$results['status'] = 'fail';
			} else {
				$results['summary']['passed']++;
			}

			$results['patterns'][$varName] = $patternResult;
		}

		// Tier 4 Check: Theme Quality Gate
		if ( $tierFilter === null || $tierFilter === 4 ) {
			$t4 = $this->runTier4();
			$results['tier4'] = $t4;
			if ( ! $t4['pass'] ) {
				$results['tier_status'][4]['status'] = 'fail';
				$results['tier_status'][4]['errors'] += count( $t4['errors'] );
				$results['status'] = 'fail';
			}
		}

		$results['global_slugs']  = $globalSlugs;
		$results['execution_time'] = round( microtime( true ) - $startTime, 3 );

		return $results;
	}

	/**
	 * Tier 1: Existence, PHP syntax (php -l), docblock headers, ABSPATH guard, and EOF check.
	 *
	 * @param string $absPath Absolute file path.
	 * @param string $content File contents.
	 * @return array{pass: bool, headers: array<string, string>, errors: array<string>}
	 */
	public function runTier1( string $absPath, string $content ): array {
		$errors  = [];
		$headers = [];

		// 1. PHP syntax check via php -l
		$lintOut    = [];
		$lintStatus = 0;
		exec( 'php -l ' . escapeshellarg( $absPath ) . ' 2>&1', $lintOut, $lintStatus );
		if ( $lintStatus !== 0 ) {
			$errors[] = '[Tier 1] PHP syntax error: ' . implode( ' ', $lintOut );
		}

		// 2. Extract docblock headers
		$headers = $this->extractHeaders( $content );
		if ( empty( $headers ) ) {
			$errors[] = '[Tier 1] Missing or invalid pattern docblock header (/** ... */).';
		} else {
			// Title check
			if ( empty( $headers['Title'] ) ) {
				$errors[] = "[Tier 1] Header 'Title' is missing or empty.";
			}

			// Slug check
			if ( empty( $headers['Slug'] ) ) {
				$errors[] = "[Tier 1] Header 'Slug' is missing or empty.";
			} elseif ( ! preg_match( '#^learnschool/[a-z0-9-]+$#', $headers['Slug'] ) ) {
				$errors[] = "[Tier 1] Header 'Slug' must match 'learnschool/<slug>'. Found: '{$headers['Slug']}'.";
			}

			// Categories check
			if ( empty( $headers['Categories'] ) ) {
				$errors[] = "[Tier 1] Header 'Categories' is missing or empty.";
			} else {
				$cats = array_map( 'trim', explode( ',', $headers['Categories'] ) );
				foreach ( $cats as $cat ) {
					if ( ! in_array( $cat, $this->allowedCategories, true ) ) {
						$errors[] = "[Tier 1] Unknown category '{$cat}' in Categories header.";
					}
				}
			}

			// Keywords check
			if ( empty( $headers['Keywords'] ) ) {
				$errors[] = "[Tier 1] Header 'Keywords' is missing or empty.";
			}

			// Description check
			if ( empty( $headers['Description'] ) ) {
				$errors[] = "[Tier 1] Header 'Description' is missing or empty.";
			}

			// Inserter check
			if ( empty( $headers['Inserter'] ) || strtolower( $headers['Inserter'] ) !== 'yes' ) {
				$found = $headers['Inserter'] ?? 'NONE';
				$errors[] = "[Tier 1] Header 'Inserter' must be 'yes' for all pattern variations. Found: '{$found}'.";
			}
		}

		// 3. ABSPATH security guard check
		$hasAbspath = (
			strpos( $content, "defined( 'ABSPATH' )" ) !== false ||
			strpos( $content, 'defined( "ABSPATH" )' ) !== false
		);
		if ( ! $hasAbspath ) {
			$errors[] = "[Tier 1] Missing ABSPATH security guard (defined( 'ABSPATH' ) || exit).";
		}

		// 4. Assert no closing PHP tag at EOF
		$trimmed = rtrim( $content );
		if ( substr( $trimmed, -2 ) === '?' . '>' ) {
			$errors[] = "[Tier 1] Pattern file must NOT end with a closing PHP tag.";
		}

		return [
			'pass'    => empty( $errors ),
			'headers' => $headers,
			'errors'  => $errors,
		];
	}

	/**
	 * Tier 2: Slug uniqueness, localization text domain purity ('learnschool'), escaping context, security checks.
	 *
	 * @param string               $absPath     Absolute file path.
	 * @param string               $content     File contents.
	 * @param string               $varName     Variation identifier (e.g. alert-bar-2).
	 * @param array<string,string> $globalSlugs Global slug registry.
	 * @return array{pass: bool, errors: array<string>}
	 */
	public function runTier2( string $absPath, string $content, string $varName, array &$globalSlugs ): array {
		$errors = [];

		// 1. Slug uniqueness
		$headers = $this->extractHeaders( $content );
		$slug    = $headers['Slug'] ?? '';
		if ( ! empty( $slug ) ) {
			if ( isset( $globalSlugs[$slug] ) ) {
				$errors[] = "[Tier 2] Duplicate slug '{$slug}' already registered by {$globalSlugs[$slug]}.";
			} else {
				$globalSlugs[$slug] = basename( $absPath );
			}

			// Ensure slug matches the file variation suffix convention
			$expectedSlug = 'learnschool/' . $varName;
			if ( $slug !== $expectedSlug ) {
				$errors[] = "[Tier 2] Slug mismatch: expected '{$expectedSlug}', found '{$slug}'.";
			}
		}

		// 2. Tokenizer analysis: Localization, text domain, escaping & security
		$tokens = token_get_all( $content );
		$n      = count( $tokens );

		$prohibitedFunctions = [
			'eval',
			'exec',
			'passthru',
			'system',
			'shell_exec',
			'popen',
			'proc_open',
			'assert',
			'unserialize',
			'create_function',
		];

		$prohibitedSuperglobals = [
			'_GET',
			'_POST',
			'_REQUEST',
			'_COOKIE',
			'_SERVER',
			'_FILES',
			'_ENV',
			'_SESSION',
		];

		for ( $i = 0; $i < $n; $i++ ) {
			$t = $tokens[$i];
			if ( ! is_array( $t ) ) {
				continue;
			}

			$tokenType = $t[0];
			$tokenVal  = $t[1];
			$tokenLine = $t[2];

			// Security: Prohibited functions
			if ( $tokenType === T_STRING && in_array( strtolower( $tokenVal ), $prohibitedFunctions, true ) ) {
				$errors[] = "[Tier 2] Security violation: call to prohibited function '{$tokenVal}()' on line {$tokenLine}.";
			}

			// Security: Prohibited superglobals
			if ( $tokenType === T_VARIABLE && in_array( ltrim( $tokenVal, '$' ), $prohibitedSuperglobals, true ) ) {
				$errors[] = "[Tier 2] Security violation: direct access to raw superglobal '{$tokenVal}' on line {$tokenLine}.";
			}

			// Localization functions check
			if ( $tokenType === T_STRING && in_array( $tokenVal, [ 'esc_html__', 'esc_html_e', 'esc_attr__', 'esc_attr_e', '__', '_e', '_x', '_ex', 'esc_html_x', 'esc_attr_x', '_n', '_nx' ], true ) ) {
				// Bare unescaped functions are forbidden in learnschool theme patterns
				if ( in_array( $tokenVal, [ '__', '_e' ], true ) ) {
					$errors[] = "[Tier 2] Prohibited unescaped localization function '{$tokenVal}()' on line {$tokenLine}. Use 'esc_html__()' or 'esc_attr__()'.";
				}

				// Extract function arguments to inspect text domain
				$args = $this->extractFunctionArguments( $tokens, $i, $n );
				$domainArg = null;
				if ( in_array( $tokenVal, [ 'esc_html__', 'esc_html_e', 'esc_attr__', 'esc_attr_e', '__', '_e' ], true ) ) {
					$domainArg = $args[1] ?? null;
				} elseif ( in_array( $tokenVal, [ '_x', '_ex', 'esc_html_x', 'esc_attr_x' ], true ) ) {
					$domainArg = $args[2] ?? null;
				} elseif ( in_array( $tokenVal, [ '_n', '_nx' ], true ) ) {
					$domainArg = $args[3] ?? null;
				}

				$domainClean = trim( $domainArg ?? '', "\"' \t\n\r\0\x0B" );
				if ( $domainClean !== 'learnschool' ) {
					$errors[] = "[Tier 2] Invalid text domain '{$domainClean}' in '{$tokenVal}()' on line {$tokenLine}. Must be strictly 'learnschool'.";
				}
			}
		}

		// 3. Context-appropriate escaping checks
		// Check HTML attributes: alt, aria-label, placeholder, title must use esc_attr*
		if ( preg_match_all( '/\b(alt|aria-label|placeholder|title)\s*=\s*["\x27]\s*<\?php\s+(?:echo\s+)?([a-z0-9_]+)\(/i', $content, $attrMatches, PREG_SET_ORDER ) ) {
			foreach ( $attrMatches as $m ) {
				$attrName = strtolower( $m[1] );
				$funcName = $m[2];
				if ( ! in_array( $funcName, [ 'esc_attr__', 'esc_attr_e' ], true ) ) {
					$errors[] = "[Tier 2] Context escaping error: attribute '{$attrName}' must use 'esc_attr__()' or 'esc_attr_e()', found '{$funcName}()'.";
				}
			}
		}

		// Check URL attributes: href, src must use esc_url or esc_url_raw
		if ( preg_match_all( '/\b(href|src)\s*=\s*["\x27]\s*<\?php\s+(?:echo\s+)?([a-z0-9_]+)\(/i', $content, $urlMatches, PREG_SET_ORDER ) ) {
			foreach ( $urlMatches as $m ) {
				$attrName = strtolower( $m[1] );
				$funcName = $m[2];
				if ( ! in_array( $funcName, [ 'esc_url', 'esc_url_raw' ], true ) ) {
					$errors[] = "[Tier 2] Context escaping error: attribute '{$attrName}' must use 'esc_url()', found '{$funcName}()'.";
				}
			}
		}

		return [
			'pass'   => empty( $errors ),
			'errors' => $errors,
		];
	}

	/**
	 * Tier 3: Gutenberg block comment syntax tokenizer, stack balance, attribute JSON, theme.json presets, and structural divergence.
	 *
	 * @param string                    $absPath    Absolute file path.
	 * @param string                    $content    File contents.
	 * @param string                    $varName    Variation name.
	 * @param string                    $baseFamily Parent base pattern name.
	 * @param array<string,mixed>|null  $baseData   Pre-parsed block structure of base pattern.
	 * @return array<string, mixed>
	 */
	public function runTier3( string $absPath, string $content, string $varName, string $baseFamily, ?array $baseData ): array {
		$errors = [];

		// 1. Gutenberg block parsing and stack balancing
		$blockData = $this->parseGutenbergBlocks( $content );
		if ( ! empty( $blockData['errors'] ) ) {
			foreach ( $blockData['errors'] as $err ) {
				$errors[] = "[Tier 3] {$err}";
			}
		}

		if ( $blockData['total_blocks'] === 0 ) {
			$errors[] = '[Tier 3] No Gutenberg block comments detected in pattern file.';
		}

		// 2. Validate Design Tokens against theme.json
		$tokenErrors = $this->validateDesignTokens( $content, $blockData['parsed_attributes'] );
		if ( ! empty( $tokenErrors ) ) {
			foreach ( $tokenErrors as $terr ) {
				$errors[] = "[Tier 3] {$terr}";
			}
		}

		// 3. Structural Divergence Validation against parent base pattern
		$divergenceInfo = [
			'divergent'             => true,
			'path_jaccard_distance' => 1.0,
			'tree_hash_collision'   => false,
			'block_count_diff'      => 0,
			'new_block_types'       => [],
			'removed_block_types'   => [],
		];

		if ( $baseData !== null ) {
			$isTreeEqual = ( $blockData['tree_hash'] === $baseData['tree_hash'] );
			$diffBlocks  = array_diff_key( $blockData['block_counts'], $baseData['block_counts'] );
			$remBlocks   = array_diff_key( $baseData['block_counts'], $blockData['block_counts'] );

			$intersect = count( array_intersect( $blockData['paths'], $baseData['paths'] ) );
			$union     = count( array_unique( array_merge( $blockData['paths'], $baseData['paths'] ) ) );
			$jaccard   = ( $union > 0 ) ? ( 1 - ( $intersect / $union ) ) : 0.0;
			$countDiff = abs( $blockData['total_blocks'] - $baseData['total_blocks'] );

			// Compute block histogram distance
			$allKeys = array_unique( array_merge( array_keys( $blockData['block_counts'] ), array_keys( $baseData['block_counts'] ) ) );
			$diffSum = 0;
			foreach ( $allKeys as $k ) {
				$diffSum += abs( ( $blockData['block_counts'][$k] ?? 0 ) - ( $baseData['block_counts'][$k] ?? 0 ) );
			}
			$histDist = ( ( $blockData['total_blocks'] + $baseData['total_blocks'] ) > 0 )
				? ( $diffSum / ( $blockData['total_blocks'] + $baseData['total_blocks'] ) )
				: 0.0;

			$isDivergent = ( ! $isTreeEqual ) && (
				$jaccard >= 0.15 ||
				! empty( $diffBlocks ) ||
				! empty( $remBlocks ) ||
				$countDiff >= 1 ||
				$histDist >= 0.10
			);

			$divergenceInfo = [
				'divergent'             => $isDivergent,
				'path_jaccard_distance' => round( $jaccard, 3 ),
				'histogram_distance'    => round( $histDist, 3 ),
				'tree_hash_collision'   => $isTreeEqual,
				'block_count_diff'      => $countDiff,
				'var_blocks'            => $blockData['total_blocks'],
				'base_blocks'           => $baseData['total_blocks'],
				'new_block_types'       => array_keys( $diffBlocks ),
				'removed_block_types'   => array_keys( $remBlocks ),
			];

			if ( $isTreeEqual ) {
				$errors[] = "[Tier 3] Structural clone detected: '{$varName}' has identical block hierarchy to base pattern '{$baseFamily}'.";
			} elseif ( ! $isDivergent ) {
				$errors[] = "[Tier 3] Insufficient structural divergence for '{$varName}' vs '{$baseFamily}'. Jaccard: " . round( $jaccard * 100, 1 ) . '%, block diff: ' . $countDiff . '.';
			}
		}

		return [
			'pass'            => empty( $errors ),
			'total_blocks'    => $blockData['total_blocks'],
			'block_counts'    => $blockData['block_counts'],
			'divergence'      => $divergenceInfo,
			'errors'          => $errors,
		];
	}

	/**
	 * Tier 4: Theme-wide quality gates execution (npm run check).
	 *
	 * @return array{pass: bool, command: string, exit_code: int, output: string, errors: array<string>}
	 */
	public function runTier4(): array {
		$cmd = 'npm run check 2>&1';
		$out = [];
		$status = 0;
		exec( "cd " . escapeshellarg( $this->rootDir ) . " && {$cmd}", $out, $status );
		$outputStr = implode( "\n", $out );

		$errors = [];
		if ( $status !== 0 ) {
			$errors[] = "[Tier 4] Theme quality check failed with exit code {$status}.\nOutput:\n" . $outputStr;
		}

		return [
			'pass'      => ( $status === 0 ),
			'command'   => $cmd,
			'exit_code' => $status,
			'output'    => $outputStr,
			'errors'    => $errors,
		];
	}

	/**
	 * Parse Gutenberg block comments and validate stack balance & attribute JSON.
	 *
	 * @param string $content HTML and block comment content.
	 * @return array{errors: array<string>, paths: array<string>, block_counts: array<string, int>, total_blocks: int, tree_hash: string, parsed_attributes: array<array<string, mixed>>}
	 */
	public function parseGutenbergBlocks( string $content ): array {
		$errors = [];
		$pattern = '/<!--\s+(\/?wp:[a-z0-9-]+(?:\/[a-z0-9-]+)?)(?:\s+(\{.*?\}))?\s*(\/?)-->/s';
		preg_match_all( $pattern, $content, $matches, PREG_SET_ORDER );

		$stack            = [];
		$paths            = [];
		$blockCounts      = [];
		$parsedAttributes = [];

		foreach ( $matches as $m ) {
			$tag         = $m[1];
			$json        = isset( $m[2] ) ? $m[2] : '';
			$selfClosing = ( isset( $m[3] ) && $m[3] === '/' );

			if ( strpos( $tag, '/wp:' ) === 0 ) {
				$raw = substr( $tag, 4 );
				$blockName = ( strpos( $raw, '/' ) === false ) ? 'core/' . $raw : $raw;
				if ( empty( $stack ) ) {
					$errors[] = "Unexpected closing Gutenberg block '</wp:{$raw}>' with empty stack.";
				} else {
					$popped = array_pop( $stack );
					if ( $popped !== $blockName ) {
						$errors[] = "Mismatched Gutenberg block closing tag: expected '</wp:" . str_replace( 'core/', '', $popped ) . ">', got '{$tag}>'.";
					}
				}
			} else {
				$raw = substr( $tag, 3 );
				$blockName = ( strpos( $raw, '/' ) === false ) ? 'core/' . $raw : $raw;
				$blockCounts[$blockName] = ( $blockCounts[$blockName] ?? 0 ) + 1;

				$curPath = implode( '/', $stack ) . '/' . $blockName;
				$paths[] = $curPath;

				if ( ! $selfClosing ) {
					$stack[] = $blockName;
				}

				// Attribute JSON validation with PHP placeholder sanitization
				if ( ! empty( $json ) ) {
					$cleanJson = preg_replace( '/"<\?php[\s\S]*?\?' . '>"/', '"__PHP_STRING__"', $json );
					$cleanJson = preg_replace( '/<\?php[\s\S]*?\?' . '>/', 'null', (string) $cleanJson );
					$decoded   = json_decode( (string) $cleanJson, true );
					if ( json_last_error() !== JSON_ERROR_NONE ) {
						$errors[] = "Invalid JSON attributes in block '{$blockName}': " . json_last_error_msg();
					} elseif ( is_array( $decoded ) ) {
						$parsedAttributes[] = $decoded;
					}
				}
			}
		}

		if ( ! empty( $stack ) ) {
			$errors[] = 'Unclosed Gutenberg blocks at EOF: ' . implode( ', ', $stack );
		}

		return [
			'errors'            => $errors,
			'paths'             => array_unique( $paths ),
			'block_counts'      => $blockCounts,
			'total_blocks'      => array_sum( $blockCounts ),
			'tree_hash'         => md5( implode( '|', $paths ) ),
			'parsed_attributes' => $parsedAttributes,
		];
	}

	/**
	 * Validate design token presets against theme.json.
	 *
	 * @param string                      $content          File content.
	 * @param array<array<string, mixed>> $parsedAttributes Decoded block attributes.
	 * @return array<string>
	 */
	public function validateDesignTokens( string $content, array $parsedAttributes ): array {
		$errors = [];

		// 1. Validate block attribute tokens
		foreach ( $parsedAttributes as $attrs ) {
			if ( isset( $attrs['backgroundColor'] ) && is_string( $attrs['backgroundColor'] ) ) {
				if ( ! in_array( $attrs['backgroundColor'], $this->tokens['colors'], true ) ) {
					$errors[] = "Invalid backgroundColor token preset: '{$attrs['backgroundColor']}'.";
				}
			}
			if ( isset( $attrs['textColor'] ) && is_string( $attrs['textColor'] ) ) {
				if ( ! in_array( $attrs['textColor'], $this->tokens['colors'], true ) ) {
					$errors[] = "Invalid textColor token preset: '{$attrs['textColor']}'.";
				}
			}
			if ( isset( $attrs['borderColor'] ) && is_string( $attrs['borderColor'] ) ) {
				if ( ! in_array( $attrs['borderColor'], $this->tokens['colors'], true ) ) {
					$errors[] = "Invalid borderColor token preset: '{$attrs['borderColor']}'.";
				}
			}
			if ( isset( $attrs['fontSize'] ) && is_string( $attrs['fontSize'] ) ) {
				if ( ! in_array( $attrs['fontSize'], $this->tokens['fontSizes'], true ) ) {
					$errors[] = "Invalid fontSize token preset: '{$attrs['fontSize']}'.";
				}
			}
			if ( isset( $attrs['fontFamily'] ) && is_string( $attrs['fontFamily'] ) ) {
				if ( ! in_array( $attrs['fontFamily'], $this->tokens['fontFamilies'], true ) ) {
					$errors[] = "Invalid fontFamily token preset: '{$attrs['fontFamily']}'.";
				}
			}
		}

		// 2. Validate var:preset|<type>|<slug>
		if ( preg_match_all( '/var:preset\|([a-z-]+)\|([a-z0-9-]+)/', $content, $presetMatches ) ) {
			foreach ( $presetMatches[1] as $idx => $type ) {
				$slug = $presetMatches[2][$idx];
				if ( $type === 'color' && ! in_array( $slug, $this->tokens['colors'], true ) ) {
					$errors[] = "Invalid preset token 'var:preset|color|{$slug}'. Color not in theme.json.";
				} elseif ( $type === 'spacing' && ! in_array( $slug, $this->tokens['spacing'], true ) ) {
					$errors[] = "Invalid preset token 'var:preset|spacing|{$slug}'. Spacing step not in theme.json.";
				} elseif ( $type === 'font-size' && ! in_array( $slug, $this->tokens['fontSizes'], true ) ) {
					$errors[] = "Invalid preset token 'var:preset|font-size|{$slug}'. Font size not in theme.json.";
				} elseif ( $type === 'shadow' && ! in_array( $slug, $this->tokens['shadows'], true ) ) {
					$errors[] = "Invalid preset token 'var:preset|shadow|{$slug}'. Shadow not in theme.json.";
				}
			}
		}

		// 3. Validate CSS custom properties: var(--wp--preset--<type>--<slug>)
		if ( preg_match_all( '/var\(--wp--preset--([a-z-]+)--([a-z0-9-]+)\)/', $content, $varMatches ) ) {
			foreach ( $varMatches[1] as $idx => $type ) {
				$slug = $varMatches[2][$idx];
				if ( $type === 'color' && ! in_array( $slug, $this->tokens['colors'], true ) ) {
					$errors[] = "Invalid CSS preset variable 'var(--wp--preset--color--{$slug})'.";
				} elseif ( $type === 'spacing' && ! in_array( $slug, $this->tokens['spacing'], true ) ) {
					$errors[] = "Invalid CSS preset variable 'var(--wp--preset--spacing--{$slug})'.";
				} elseif ( $type === 'font-size' && ! in_array( $slug, $this->tokens['fontSizes'], true ) ) {
					$errors[] = "Invalid CSS preset variable 'var(--wp--preset--font-size--{$slug})'.";
				} elseif ( $type === 'shadow' && ! in_array( $slug, $this->tokens['shadows'], true ) ) {
					$errors[] = "Invalid CSS preset variable 'var(--wp--preset--shadow--{$slug})'.";
				}
			}
		}

		// 4. Validate CSS classes
		if ( preg_match_all( '/\bclass=["\x27]([^"\x27]+)["\x27]/', $content, $classMatches ) ) {
			foreach ( $classMatches[1] as $classStr ) {
				$classes = preg_split( '/\s+/', trim( $classStr ) );
				if ( ! is_array( $classes ) ) {
					continue;
				}
				foreach ( $classes as $cls ) {
					if ( preg_match( '/^has-([a-z0-9-]+)-background-color$/', $cls, $cm ) ) {
						if ( ! in_array( $cm[1], $this->tokens['colors'], true ) ) {
							$errors[] = "Invalid class '{$cls}': background color '{$cm[1]}' not in theme.json.";
						}
					} elseif ( preg_match( '/^has-([a-z0-9-]+)-border-color$/', $cls, $cm ) ) {
						if ( $cm[1] !== 'border' && ! in_array( $cm[1], $this->tokens['colors'], true ) ) {
							$errors[] = "Invalid class '{$cls}': border color '{$cm[1]}' not in theme.json.";
						}
					} elseif ( preg_match( '/^has-([a-z0-9-]+)-color$/', $cls, $cm ) ) {
						if ( $cm[1] !== 'text' && $cm[1] !== 'border' && ! in_array( $cm[1], $this->tokens['colors'], true ) ) {
							$errors[] = "Invalid class '{$cls}': text color '{$cm[1]}' not in theme.json.";
						}
					} elseif ( preg_match( '/^has-([a-z0-9-]+)-font-size$/', $cls, $cm ) ) {
						if ( $cm[1] !== 'custom' && ! in_array( $cm[1], $this->tokens['fontSizes'], true ) ) {
							$errors[] = "Invalid class '{$cls}': font size '{$cm[1]}' not in theme.json.";
						}
					}
				}
			}
		}

		return array_unique( $errors );
	}

	/**
	 * Extract docblock header key-value pairs.
	 *
	 * @param string $content File contents.
	 * @return array<string, string>
	 */
	public function extractHeaders( string $content ): array {
		if ( ! preg_match( '#/\*\*([\s\S]*?)\*/#', $content, $matches ) ) {
			return [];
		}

		$lines   = explode( "\n", $matches[1] );
		$headers = [];
		foreach ( $lines as $line ) {
			$clean = trim( (string) preg_replace( '/^\s*\*\s?/', '', $line ) );
			if ( preg_match( '/^([A-Za-z ]+):\s*(.+)$/', $clean, $m ) ) {
				$headers[trim( $m[1] )] = trim( $m[2] );
			}
		}

		return $headers;
	}

	/**
	 * Extract argument tokens for a function call.
	 *
	 * @param array<int, mixed> $tokens Token stream.
	 * @param int               $i      Token index of function name.
	 * @param int               $n      Token count.
	 * @return array<int, string>
	 */
	private function extractFunctionArguments( array $tokens, int $i, int $n ): array {
		$j = $i + 1;
		while ( $j < $n && $tokens[$j] !== '(' ) {
			$j++;
		}
		if ( $j >= $n || $tokens[$j] !== '(' ) {
			return [];
		}

		$depth  = 1;
		$args   = [];
		$curArg = '';
		$j++;

		while ( $j < $n && $depth > 0 ) {
			$tok = $tokens[$j];
			if ( $tok === '(' ) {
				$depth++;
				$curArg .= '(';
			} elseif ( $tok === ')' ) {
				$depth--;
				if ( $depth === 0 ) {
					if ( trim( $curArg ) !== '' ) {
						$args[] = trim( $curArg );
					}
					break;
				}
				$curArg .= ')';
			} elseif ( $tok === ',' && $depth === 1 ) {
				$args[] = trim( $curArg );
				$curArg = '';
				$j++;
				continue;
			} else {
				$curArg .= is_array( $tok ) ? $tok[1] : $tok;
			}
			$j++;
		}

		return $args;
	}

	/**
	 * Filter expected variations based on CLI options.
	 *
	 * @return array<string, array{family: string, milestone: string, file: string}>
	 */
	private function resolveTargetVariations(): array {
		$filter = $this->options['pattern'] ?? null;
		if ( empty( $filter ) ) {
			return $this->expectedVariations;
		}

		$filtered = [];
		foreach ( $this->expectedVariations as $name => $meta ) {
			if ( $name === $filter || $meta['family'] === $filter || strpos( $name, $filter ) !== false ) {
				$filtered[$name] = $meta;
			}
		}

		return $filtered;
	}

	/**
	 * Render results to console or JSON output.
	 *
	 * @param array<string, mixed> $report Full test report.
	 * @return int Exit code (0 for success, 1 for failure).
	 */
	public function render( array $report ): int {
		if ( ! empty( $this->options['json'] ) ) {
			echo json_encode( $report, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) . "\n";
			return ( $report['status'] === 'pass' ) ? 0 : 1;
		}

		$hasColor = $this->supportsColor();
		$cGreen   = $hasColor ? "\033[32m" : '';
		$cRed     = $hasColor ? "\033[31m" : '';
		$cYellow  = $hasColor ? "\033[33m" : '';
		$cCyan    = $hasColor ? "\033[36m" : '';
		$cBold    = $hasColor ? "\033[1m" : '';
		$cReset   = $hasColor ? "\033[0m" : '';

		echo "\n" . $cBold . $cCyan . '========================================================================' . $cReset . "\n";
		echo $cBold . ' LearnSchool WordPress Theme: Block Patterns E2E Test Suite' . $cReset . "\n";
		echo $cCyan . '========================================================================' . $cReset . "\n";

		$modeStr = $this->options['only-existing'] ? 'ONLY-EXISTING (Incremental)' : 'STRICT (All 42 Required)';
		echo " Execution Mode: {$modeStr}\n";
		if ( ! empty( $this->options['pattern'] ) ) {
			echo " Pattern Filter: {$this->options['pattern']}\n";
		}
		if ( ! empty( $this->options['tier'] ) ) {
			echo " Tier Filter:    Tier {$this->options['tier']}\n";
		}
		echo " Execution Time: {$report['execution_time']}s\n";
		echo "------------------------------------------------------------------------\n\n";

		// Print per-pattern execution status
		echo $cBold . sprintf( "%-24s %-6s %-10s %-8s %s\n", 'Pattern Variation', 'Mile', 'Status', 'Blocks', 'Diagnostics' ) . $cReset;
		echo str_repeat( '-', 72 ) . "\n";

		foreach ( $report['patterns'] as $name => $p ) {
			$statusStr = '';
			if ( $p['status'] === 'pass' ) {
				$statusStr = $cGreen . '[PASS]' . $cReset;
			} elseif ( $p['status'] === 'pending' ) {
				$statusStr = $cYellow . '[PENDING]' . $cReset;
			} else {
				$statusStr = $cRed . '[FAIL]' . $cReset;
			}

			$blocksStr = isset( $p['tiers'][3]['total_blocks'] ) ? (string) $p['tiers'][3]['total_blocks'] : '-';
			$diagStr   = '';
			if ( $p['status'] === 'pass' ) {
				if ( isset( $p['tiers'][3]['divergence'] ) ) {
					$div = $p['tiers'][3]['divergence'];
					$diagStr = "Jaccard: " . round( $div['path_jaccard_distance'] * 100, 1 ) . "% diff";
				} else {
					$diagStr = 'OK';
				}
			} elseif ( $p['status'] === 'pending' ) {
				$diagStr = 'Awaiting implementation';
			} else {
				$diagStr = count( $p['errors'] ) . ' error(s)';
			}

			echo sprintf( "%-24s %-6s %-10s %-8s %s\n", $name, $p['milestone'], $statusStr, $blocksStr, $diagStr );

			// Print error details if failed
			if ( ! empty( $p['errors'] ) ) {
				foreach ( $p['errors'] as $err ) {
					echo '   ' . $cRed . '↳ ' . $err . $cReset . "\n";
				}
			}
		}

		echo "\n" . str_repeat( '-', 72 ) . "\n";
		echo $cBold . ' Tier Execution Status Summary:' . $cReset . "\n";
		foreach ( $report['tier_status'] as $tierNum => $tInfo ) {
			$tStatus = ( $tInfo['status'] === 'pass' ) ? ( $cGreen . 'PASS' . $cReset ) : ( $cRed . 'FAIL (' . $tInfo['errors'] . ' errors)' . $cReset );
			echo sprintf( "  Tier %d: %-36s [%s]\n", $tierNum, $tInfo['name'], $tStatus );
		}

		if ( isset( $report['tier4'] ) && $report['tier4'] !== null ) {
			$t4Status = $report['tier4']['pass'] ? ( $cGreen . 'PASS (Exit 0)' . $cReset ) : ( $cRed . 'FAIL (Exit ' . $report['tier4']['exit_code'] . ')' . $cReset );
			echo "  Theme Quality Gate (`npm run check`): [{$t4Status}]\n";
		}

		echo "\n" . str_repeat( '-', 72 ) . "\n";
		$summary = $report['summary'];
		echo sprintf(
			" Summary: Total: %d | %sPassed: %d%s | %sPending: %d%s | %sFailed: %d%s\n",
			$summary['total_expected'],
			$cGreen, $summary['passed'], $cReset,
			$cYellow, $summary['pending'], $cReset,
			$summary['failed'] > 0 ? $cRed : '', $summary['failed'], $cReset
		);

		if ( $report['status'] === 'pass' ) {
			echo "\n " . $cBold . $cGreen . '✔ E2E Pattern Test Suite PASSED.' . $cReset . "\n\n";
			return 0;
		}

		echo "\n " . $cBold . $cRed . '✘ E2E Pattern Test Suite FAILED.' . $cReset . "\n\n";
		return 1;
	}

	/**
	 * Check if stdout supports ANSI colors.
	 *
	 * @return bool
	 */
	private function supportsColor(): bool {
		if ( isset( $_SERVER['NO_COLOR'] ) || getenv( 'NO_COLOR' ) !== false ) {
			return false;
		}
		if ( function_exists( 'posix_isatty' ) ) {
			return @posix_isatty( STDOUT );
		}
		return true;
	}
}

// -----------------------------------------------------------------------------
// CLI Dispatch Entry Point
// -----------------------------------------------------------------------------

if ( PHP_SAPI === 'cli' || defined( 'STDIN' ) ) {
	$longopts = [
		'strict',
		'only-existing',
		'pattern:',
		'filter:',
		'tier:',
		'json',
		'help',
	];

	$rawOptions = getopt( '', $longopts );
	if ( isset( $rawOptions['help'] ) ) {
		echo "Usage: php tests/e2e-patterns-test.php [OPTIONS]\n\n";
		echo "Options:\n";
		echo "  --strict              Assert all 42 pattern variations exist (default).\n";
		echo "  --only-existing       Test only present pattern files, reporting others as [PENDING].\n";
		echo "  --pattern=<name>      Filter by pattern family (e.g. alert-bar) or variation name.\n";
		echo "  --filter=<name>       Alias for --pattern.\n";
		echo "  --tier=<1..4>         Run only specified tier checks (1, 2, 3, or 4).\n";
		echo "  --json                Output results in JSON format.\n";
		echo "  --help                Display this help documentation.\n\n";
		exit( 0 );
	}

	$themeDir = dirname( __DIR__ );
	$parsedOptions = [
		'strict'        => isset( $rawOptions['strict'] ) || ! isset( $rawOptions['only-existing'] ),
		'only-existing' => isset( $rawOptions['only-existing'] ),
		'pattern'       => $rawOptions['pattern'] ?? $rawOptions['filter'] ?? null,
		'tier'          => $rawOptions['tier'] ?? null,
		'json'          => isset( $rawOptions['json'] ),
	];

	$runner = new LearnSchool_E2E_Patterns_Test_Runner( $themeDir, $parsedOptions );
	$report = $runner->run();
	$exitCode = $runner->render( $report );
	exit( $exitCode );
}
