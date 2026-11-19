/**
 * lint-staged configuration for LearnSchool.
 *
 * Runs the appropriate linter only on files staged for commit,
 * giving instant feedback before any code reaches the repo.
 *
 * @see https://github.com/lint-staged/lint-staged
 */
export default {
	'*.css': 'wp-scripts lint-style',
	'assets/js/**/*.js': 'wp-scripts lint-js',
	'*.php': 'vendor/bin/phpcs',
};
