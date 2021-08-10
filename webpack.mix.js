const mix = require('laravel-mix');
const path = require('path');
require('laravel-mix-purgecss');


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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')



// stisla
mix
    .styles([
        'public/vendor/stisla/css/bootstrap.css',
    ], 'public/vendor/stisla/css/bootstrap.min.css')

    .styles([
        'public/vendor/stisla/css/fontawesome.css',
    ], 'public/vendor/stisla/css/fontawesome.min.css')
    .styles([
        'public/vendor/stisla/css/components.css',
    ], 'public/vendor/stisla/css/components.min.css')
    .styles([
        'public/vendor/stisla/css/style.css',
    ], 'public/vendor/stisla/css/style.min.css')

    .scripts([
        'public/vendor/stisla/js/stisla.js'
    ], 'public/vendor/stisla/js/stisla,min.js')
    .scripts([
        'public/vendor/stisla/js/scripts.js'
    ], 'public/vendor/stisla/js/scripts,min.js')
    .scripts([
        'public/vendor/stisla/js/lib/jquery-3.3.1.min.js'
    ], 'public/vendor/stisla/js/jquery-3.3.1.min.js')
    .scripts([
        'public/vendor/stisla/js/lib/bootstrap.min.js'
    ], 'public/vendor/stisla/js/bootstrap.min.js')
    .scripts([
        'public/vendor/stisla/js/lib/jquery.nicescroll.min.js'
    ], 'public/vendor/stisla/js/jquery.nicescroll.min.js')
    .scripts([
        'public/vendor/stisla/js/lib/popper.min.js'
    ], 'public/vendor/stisla/js/popper.min.js')
    .scripts([
        'public/vendor/stisla/js/lib/moment.min.js'
    ], 'public/vendor/stisla/js/moment.min.js')


mix.purgeCss({
    content: [
        path.join(__dirname, "resources/views/**/*.blade.php"),
        path.join(__dirname, "public/vendor/stisla/**/*.js"),
    ],
    // defaultExtractor: content =>
    // content.match(/[\w-/:.]+(?<!:)/g) || [],
    // whitelistPatternsChildren: [/nprogress/]
});
