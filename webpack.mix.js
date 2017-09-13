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
    .js('resources/assets/js/main.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    // .sass('resources/assets/sass/main.scss', 'public/css')
    // .sass('resources/assets/sass/preset.scss', 'public/css')
    // .sass('resources/assets/sass/feature_team.scss', 'public/css')
    .sass('resources/assets/sass/style.scss', 'public/css')
    .options({
        processCssUrls: false
    });



mix.copyDirectory('resources/assets/images', 'public/images');
mix.copyDirectory('node_modules/font-awesome-sass/assets/fonts/font-awesome', 'public/fonts/font-awesome');

mix.copy('resources/assets/js/jssor.slider-23.0.0.min.js', 'public/js/jssor.slider-23.0.0.min.js');
mix.copy('resources/assets/js/owl.carousel.min.js', 'public/js/owl.carousel.min.js');

mix.copy('resources/assets/css/owl.carousel.css', 'public/css/owl.carousel.css');
mix.copy('resources/assets/css/owl.theme.css', 'public/css/owl.theme.css');
mix.copy('resources/assets/css/responsive.css', 'public/css/responsive.css');


//mix.copy('resources/assets/sass/slicknav.min.css', 'public/css/slicknav.min.css');