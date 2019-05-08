let mix = require('laravel-mix');

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

mix.scripts([
   'resources/assets/js/jquery.slim.min.js',
   'resources/assets/js/popper.min.js',
   'resources/assets/js/bootstrap.min.js',
   'resources/assets/js/dynamicscrollspy.min.js',
   'resources/assets/js/custom.js',
   ],'public/js/app.js').version();

mix.sass('resources/assets/sass/app.scss', 'public/css');

mix.autoload({
   'jquery': ['jQuery', '$'],
})