var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    //mix.less('app.less');

    mix
        .styles([
            "bootstrap/bootstrap.css", //I've included the css and not the min.css as I edited the said file to be able to adapt to my current structure
            "bootstrap-materialize/bootstrap-material-design.min.css",
            "bootstrap-materialize/ripples.min.css"
        ], 'public/build/css/everything.css')

        .scripts([
            "jquery/jquery.min.js",
            "bootstrap/bootstrap.min.js",
            "bootstrap-materialize/material.min.js",
            "bootstrap-materialize/ripples.min.js",
            "custom/index.js"
        ], "public/build/js/everything.js")
        .version(["public/build/css/everything.css", "public/build/js/everything.js"]);
});

