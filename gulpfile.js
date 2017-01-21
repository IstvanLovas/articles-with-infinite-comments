const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir((mix) => {
    mix.sass('app.scss')
    	.sass('admin.scss')
    	.styles([
	        'sb-admin.css'
	    ], 'public/css/sb-admin.css')
	    .styles([
	        'sweetalert.css'
	    ], 'public/css/sweetalert.css')
   		.webpack('app.js')
   		.webpack('admin.js');
});
