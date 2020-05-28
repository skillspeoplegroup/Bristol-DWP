const mix = require("laravel-mix");
const tailwind = require("tailwindcss");

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

mix.setPublicPath('themes/bristol-dwp/assets');

mix.js("themes/bristol-dwp/resources/js/app.js", "js");

mix.sass("themes/bristol-dwp/resources/sass/app.scss", "css").options({
    processCssUrls: false,
    postCss: [tailwind("themes/bristol-dwp/resources/tailwind.config.js")]
});
