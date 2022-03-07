const mix = require('laravel-mix'),
    path = require('path'),
    SVGSpite = require('svg-spritemap-webpack-plugin'),
    pathAssets = 'resources/assets',
    pathCriticalBlade = 'resources/views/common/critical-css.blade.php',
    fs = require('fs');

    require('laravel-mix-webp')

mix.webpackConfig({
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/assets/js/'),
            '@scss': path.resolve(__dirname, 'resources/assets/scss'),
            '@base': path.resolve(__dirname, 'resources/assets/scss/base'),
            '@components': path.resolve(__dirname, 'resources/assets/scss/components'),
            '@header': path.resolve(__dirname, 'resources/assets/scss/layouts/header'),
            '@footer': path.resolve(__dirname, 'resources/assets/scss/layouts/footer'),
            '@pages': path.resolve(__dirname, 'resources/assets/scss/pages'),
            '@ui': path.resolve(__dirname, 'resources/assets/scss/ui'),
        }
    },
    plugins: [
        new SVGSpite('./resources/assets/grafical/icons/*.svg', {
            output: {
                filename: './grafical/icons/sprite.svg',
                chunk: {
                    keep: true,
                },
            },
            sprite: {
                prefix: false,
            }
        })
    ],
    optimization: {
            splitChunks: {
                chunks: 'async',
                minSize: 20000,
                minRemainingSize: 0,
                minChunks: 1,
                maxAsyncRequests: 30,
                maxInitialRequests: 30,
                enforceSizeThreshold: 50000,
                cacheGroups: {
                    defaultVendors: {
                        test: /[\\/]node_modules[\\/]/,
                        priority: -10,
                        reuseExistingChunk: true,
                    },
                    default: {
                        minChunks: 2,
                        priority: -20,
                        reuseExistingChunk: true,
                    },
                },
            },
        },
        output: {
            chunkFilename: 'js/chunks/[name].js'
        }
})
.copy(`${pathAssets}/fonts`,'public/fonts')
.ImageWebp({
    from: `${pathAssets}/grafical/images`,
    to: 'public/grafical/images/resize-90',
    imageminWebpOptions: {
        quality: 90
    },
})
.ImageWebp({
    from: `${pathAssets}/grafical/images`,
    to: 'public/grafical/images/resize-75',
    imageminWebpOptions: {
        quality: 75
    },
})
.ImageWebp({
    from: `${pathAssets}/grafical/images`,
    to: 'public/grafical/images/resize-50',
    imageminWebpOptions: {
        quality: 50
    },
})

mix.js('resources/assets/js/app.js', 'public/js')

if(mix.inProduction()) {
    
    mix.sass('resources/assets/scss/critical.scss', 'public/css')
    .sass('resources/assets/scss/app.scss', 'public/css')
    .then(el => {
        let fileCss = fs.readFileSync('public/css/critical.css', 'utf8');
        
        fs.writeFileSync(pathCriticalBlade, `<style>${fileCss}</style>`)
    })
} else {

    mix.sass('resources/assets/scss/critical.scss', 'public/css/app.css')
    mix.sass('resources/assets/scss/app.scss', 'public/css/app.css')

    if(!!fs.readFileSync(pathCriticalBlade, 'utf8').length) fs.writeFileSync(pathCriticalBlade, '');
}

mix.browserSync({ 
    proxy: process.env.APP_URL,
    host: process.env.APP_URL,
    open: 'external', 
});
mix.options({ processCssUrls: false })
mix.version([
    './public/grafical/icons/sprite.svg'
]);