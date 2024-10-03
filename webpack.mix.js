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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .alias({
        '@': 'resources/js',
    })
    .react()
    ;

mix
    .js('resources/js/laravel.js', 'public/js')
    .sass('public/assets/sass/home.sass', 'assets/css')
    .sass('public/assets/sass/laravel.sass', 'assets/css')
    .sass('public/assets/sass/portafolio.sass', 'assets/css')
    .browserSync({
        proxy: 'http://127.0.0.1:8000', // Cambia esto por la URL de tu servidor de desarrollo
        files: [
        //    'app/**/*.php',
            'resources/views/**/*.php',
            'public/js/**/*.js',
            'public/assets/sass/**/*.sass'
        ],
        open: true,
        notify: true
    })
    ;


// if (mix.inProduction()) {
//     mix.version();
// }
