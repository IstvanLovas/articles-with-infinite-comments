const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir((mix) => {
    mix.sass('app.scss')
    	.sass('admin.scss')
    	.styles([
	        'sb-admin.css'
	    ], 'public/css/sb-admin.css')
	    .styles([
	        'plugins/morris.css'
	    ], 'public/css/plugins/morris.css')
   		.webpack('app.js')
   		.webpack('admin.js')
   		.webpack([
   			'admin/welcome.js'
   		], 'public/js/admin/welcome.js');
});
