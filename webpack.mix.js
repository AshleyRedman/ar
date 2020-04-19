const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix.sass("resources/sass/app.scss", "public/css").options({
    processCssUrls: false,
    postCss: [tailwindcss("tailwind.config.js"), require("autoprefixer")]
});

mix.js("resources/js/app.js", "public/js").extract([
    'axios',
    'lodash',
    'smooth-scroll',
    'vanilla-lazyload'
]);
