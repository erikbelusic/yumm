var gulp = require('gulp');
var Elixir = require('laravel-elixir');

Elixir.config.production = true;
Elixir.config.sourcemaps = true;
Elixir.config.assetsPath = './assets/';
Elixir.config.publicPath = './dist/';

Elixir.config.css.sass.folder = 'styles';

var paths = {
    src: Elixir.config.assetsPath,
    dest: Elixir.config.publicPath
};

Elixir(function (mix) {
    mix.sass('main.scss');
});