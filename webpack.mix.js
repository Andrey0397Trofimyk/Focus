const mix = require('laravel-mix'),
    path = 'resources/assets';

require('laravel-mix-svg-sprite');
console.log(123);
mix.js(`${path}/js/app.js`, 'public/js')
    .sass(`${path}/scss/app.scss`, 'public/css')
    .copyDirectory(`${path}/fonts`, 'public/fonts')
    .svgSprite(
        `${path}/grafical/icons`,
        'public/grafical/icons/sprite.svg', 
    );

mix.browserSync({ 
    proxy: process.env.APP_URL,
    host: process.env.APP_URL,
    open: 'external', 
});

if (mix.inProduction()) {
    mix.version();
}