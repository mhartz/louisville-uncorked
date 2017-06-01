var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('main.scss');
    mix.scripts([
      'lib/jquery',
      'lib/modernizr'
    ]);
});
