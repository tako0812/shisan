var elixir = require('laravel-elixir');

require('laravel-elixir-sass-compass');

elixir(function(mix) {

    mix.compass(['app.scss'], 'resources/assets/css', {
        style: "expanded",
        sass: "resources/assets/sass",
        font: "public/assets/fonts",
        image: "public/assets/images",
        javascript: "public/assets/js",
        sourcemap: true,
        comments: false,
        relative: true
    });

    mix.styles('app.css', 'public/assets/css/app.css');
});