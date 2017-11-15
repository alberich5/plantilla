let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts([

	'resources/assets/js/jquery.js',
	'resources/assets/js/bootstrap.js',
	'resources/assets/js/toastr.js',
	'resources/assets/js/vue.js',
	'resources/assets/js/axios.js',//depende de vue
	'resources/assets/js/sweetalert.min.js',
	//basicas
	'resources/assets/js/hover.zoom.js',
	'resources/assets/js/hover.zoom.conf.js',
	//'public/js/administrador/usuario.js'
	//'resources/assets/js/menu.js',
], 'public/js/administrador/app2.js')

;


//mix.scripts para compilar los eleementos de la base de sweetalert
mix.scripts([
	'resources/assets/css/elementoaCompilar.css',
	'resources/assets/css/menuHeader.css',
	'resources/assets/css/bodyPrincipal.css',
	'resources/assets/css/footerPrincipal.css'
], 'public/css/iniciarPlantilla.css')

.styles([
	'resources/assets/js/scriptParaCompilar.js',
	'resources/assets/js/scriptmenu.js',
	'resources/assets/js/scriptFooter.js'
],'public/js/enviar.js');
//wizard
   mix.scripts([
   	'resources/assets/wizard/js/jquery.bootstrap.js',
      'resources/assets/wizard/js/material-bootstrap-wizard.js',
      'resources/assets/wizard/js/jquery.validate.min.js',
   	], 'public/js/wizard.js');
