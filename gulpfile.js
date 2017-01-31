const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir((mix) => {
    mix.sass('app.scss')
    	.sass('admin.scss')
    	.styles([
	        'sb-admin.css'
	    ], 'public/css/sb-admin.css')
	    .copy('node_modules/sweetalert2/dist/sweetalert2.css','public/css/sweetalert2.css')
	    .copy('node_modules/dropzone/dist/min/dropzone.min.css','public/css/dropzone.css')
   		.webpack('app.js')
   		.webpack('admin.js');
});
