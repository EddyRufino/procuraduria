const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
    'resources/plantilla/css/font-awesome.min.css',
    'resources/plantilla/css/simple-line-icons.min.css',
    'resources/plantilla/css/style.css'
], 'public/css/plantilla.css')
	.scripts([
		'resources/plantilla/js/jquery.min.js',
	    'resources/plantilla/js/Chart.min.js',
	    'resources/plantilla/js/pace.min.js',
	    'resources/plantilla/js/template.js',
	], 'public/js/plantilla.js');
