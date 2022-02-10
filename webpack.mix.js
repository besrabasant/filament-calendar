const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.disableSuccessNotifications()
mix.options({
    terser: {
        extractComments: false,
    },
})
mix.setPublicPath('dist')
mix.setResourceRoot('resources')
mix.sourceMaps()
mix.version()

mix.js('resources/js/filament-calendar.js', 'dist')

mix
    .postCss('resources/css/filament-calendar.css', 'dist', [
        tailwindcss('tailwind.config.js'),
    ]).options({
    processCssUrls: false,
})
