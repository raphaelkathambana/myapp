const mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'public/css', {
    sassOptions: {
        outputStyle: 'expanded'
    }
})
    .sourceMaps();
mix.js("resources/js/app.js", "public/js")
    .extract(['vendor/composer'])
    .postCss("resources/style/app.css", "public/css", [
        require("tailwindcss"),
    ]);
