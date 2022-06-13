const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.js('resources/js/app.js', 'public/js');
mix.less('resources/less/first_container.less', '../public/css');
mix.less('resources/less/information_page.less', '../public/css');
mix.less('resources/less/lending.less', '../public/css');
mix.less('resources/less/mobile.less', '../public/css');
mix.less('resources/less/second_container.less', '../public/css');
mix.less('resources/less/style.less', '../public/css');

