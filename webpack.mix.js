const mix = require("laravel-mix");

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

const commonJS = [
    "resources/js/lib/jquery.min.js",
    "resources/js/lib/jQueryUI.js",
    "resources/js/lib/animation.js",
    "resources/js/script/script.js",
];

mix
    .scripts([
        ...commonJS,
        "resources/js/script/slick.min.js",
        "resources/js/page/home.js",
    ], "public/js/home.js")
    .scripts(commonJS, "public/js/services.js")
 
    .scripts([
        ...commonJS, 
        "resources/js/script/slick.min.js",
        "resources/js/script/paint-protection-slider.js",
        "resources/js/page/car_paint_protection.js",
    ], "public/js/car_paint_protection.js")
    .scripts([
        ...commonJS, 
        "resources/js/script/slider.js",
    ], "public/js/car_window_tinting.js")
    .scripts(commonJS, "public/js/car_detailing.js")
    .scripts([
        ...commonJS, 
        "resources/js/script/slick.min.js", 
        "resources/js/page/car_wrapping.js"
    ], "public/js/car_wrapping.js")
    .scripts(commonJS, "public/js/car_wrapping_design.js")
    .scripts(commonJS, "public/js/contact.js")
    .scripts(commonJS, "public/js/gallery.js")
    .scripts([
        ...commonJS, 
        "resources/js/lib/swiper.js",
        "resources/js/lib/jquery.mousewheel.min.js",
        "resources/js/lib/lightgallery-all-min.js",
        "resources/js/page/car_detail.js"
    ], "public/js/car_detail.js");

mix
    .postCss("resources/css/home.css", "public/css/home.css")
    .postCss("resources/css/services.css", "public/css/services.css")
    .postCss("resources/css/car_detailing.css", "public/css/car_detailing.css")
    .postCss("resources/css/car_window_tinting.css", "public/css/car_window_tinting.css")
    .postCss("resources/css/car_paint_protection.css", "public/css/car_paint_protection.css")
    .postCss("resources/css/car_wrapping.css", "public/css/car_wrapping.css")
    .postCss("resources/css/car_wrapping_design.css", "public/css/car_wrapping_design.css")
    .postCss("resources/css/contact.css", "public/css/contact.css")
    .postCss("resources/css/gallery.css", "public/css/gallery.css")
    .postCss("resources/css/car_detail.css", "public/css/car_detail.css");

if (mix.inProduction()) {
    mix.version();
}
