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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css')
//    .sass('resources/assets/sass/my.scss', 'public/css')
//    .sass('resources/assets/sass/main-style.scss', 'public/css')
//    		.options({
//       		processCssUrls: false
//    });

// mix.copyDirectory('resources/assets/images', 'public/images');
// mix.copyDirectory('node_modules/font-awesome-sass/assets/fonts/font-awesome', 'public/fonts/font-awesome');
//mix.copy('resources/assets/js/jquery.slicknav.js', 'public/js/jquery.slicknav.js');
//mix.copy('resources/assets/js/active.js', 'public/js/active.js');
//mix.copy('resources/assets/sass/slicknav.min.css', 'public/css/slicknav.min.css');