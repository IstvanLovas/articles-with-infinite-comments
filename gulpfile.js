const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir((mix) => {
    mix.sass('app.scss')
    	.sass('admin.scss')
   		.webpack('app.js')
   		.webpack('admin.js');
});
