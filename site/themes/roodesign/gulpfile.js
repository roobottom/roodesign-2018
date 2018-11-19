var elixir = require('laravel-elixir'); //https://laravel.com/docs/5.3/elixir
var theme = 'roodesign';

elixir.config.assetsPath = './';
elixir.config.publicPath = './';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Statamic theme. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less(theme + '.less', 'css/' + theme + '.css');

    // mix.version('css/' + theme + '.css');
});
