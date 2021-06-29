const mix = require('laravel-mix');

mix.options({
    processCssUrls: false
}).version();

mix.copy('resources/js/jquery.min.js', 'public/js')
    .copy('resources/js/gsap.min.js', 'public/js')
    .copy('resources/js/ScrollMagic.min.js', 'public/js')
    .copy('resources/js/animation.gsap.min.js', 'public/js')
    .copy('resources/js/SmoothScroll.js', 'public/js')
    .copy('resources/js/swiper.min.js', 'public/js')
    .copy('resources/js/select2.full.min.js', 'public/js')
    .copy('resources/js/jquery.fancybox.min.js', 'public/js')
    .copy('resources/js/bootstrap-slider.min.js', 'public/js')
    .copy('resources/js/slider.js', 'public/js')
    .copy('resources/js/common.js', 'public/js')


mix.styles([
    'resources/css/bootstrap.css',
    'resources/css/swiper.min.css',
    'resources/css/jquery.fancybox.min.css',
    'resources/css/select2.min.css',
    'resources/css/bootstrap-slider.min.css',
    'resources/css/main.css',
], 'public/css/app.css');


mix.copyDirectory('resources/img', 'public/img');
mix.copyDirectory('resources/fonts', 'public/fonts');
