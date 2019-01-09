const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Default laravel js and css files
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

// Each page css and js files
mix.styles([
    'resources/css/select2.min.css'
], 'public/css/plugins.css');

mix.scripts([
    'resources/js/select2.min.js',
], 'public/js/plugins.js');

// Each page css and js files
mix.styles([
    'resources/css/dashboard.css'
], 'public/css/all.css');

mix.scripts([
    'resources/js/dashboard.js',
], 'public/js/all.js');

if (mix.inProduction()) {
    mix.version();
}
