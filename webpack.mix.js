const mix = require('laravel-mix');
require('laravel-mix-jigsaw');
require('laravel-mix-purgecss');
const tailwindcss = require('tailwindcss')

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .options({
        processCssUrls: false,
        postCss: [
           tailwindcss('tailwind.config.js'),
       ]
    })
    .sass('source/_assets/sass/main.scss', 'css')
	.purgeCss({
        content: [path.join(__dirname, 'source/**/*.php')],
		enabled: true
	})
    .version();

