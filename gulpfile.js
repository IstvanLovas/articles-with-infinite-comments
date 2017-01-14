const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir((mix) => {
    mix.sass('app.scss')
    	.sass('admin.scss')
    	.styles([
	        'sb-admin.css'
	    ], 'public/css/sb-admin.css')
   		.webpack('app.js')
   		.webpack('admin.js');
});
