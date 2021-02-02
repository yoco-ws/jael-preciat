<?php 
	require('vendor/autoload.php');

	define('RUTA','http://localhost/jael-preciat/');

	$client = new GuzzleHttp\Client(['base_uri' => 'https://directus.cliqued.it/jael_preciat/']);


	$favicon = "<link rel='icon' type='image/png' href='img/favicon.png' />";

	#CSS

	$normalize_css = '<link rel="stylesheet" href="'.RUTA.'css/normalize.min.css">';

	$boostrap_v4_css = '<link rel="stylesheet" href="'.RUTA.'css/bootstrap.min.css">';

	$font_awesome_css = '<link rel="stylesheet" href="'.RUTA.'css/all.css">';


	#JS
	
	$jquery_js = '<script src="'.RUTA.'js/jquery-3.2.1.min.js"></script>';

	$tether_js = '<script src="'.RUTA.'js/tether.min.js"></script>';

	$bootstrap_v4_js = '<script src="'.RUTA.'js/bootstrap.min.js"></script>';

	$font_awesome_js = '<script src="'.RUTA.'js/all.js"></script>';

	$lottie_js = "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.8/lottie.min.js\" integrity=\"sha256-QWuFU4W0oiKnJa3GVz5Z+pNf91eTYdmHogcIeJpWON0=\" crossorigin=\"anonymous\"></script>";

	$scroll_magic = '<script src="'.RUTA.'js/ScrollMagic.js"></script>';
	$scroll_magic_debugging = '<script src="'.RUTA.'js/debug.addIndicators.js"></script>';

	#Own 
	#	js
		$own_file_js = '<script src="'.RUTA.'js/jael-preciat.js"></script>';
	#	css
		$own_file_css = '<link rel="stylesheet" href="'.RUTA.'css/jael-preciat.min.css">';
	

	#Extra
	#
	$google_analitycs = "<!-- Global site tag (gtag.js) - Google Analytics -->
						<script async src='https://www.googletagmanager.com/gtag/js?id=G-LTWJBW83RM'></script>
						<script>
						  window.dataLayer = window.dataLayer || [];
						  function gtag(){dataLayer.push(arguments);}
						  gtag('js', new Date());

						  gtag('config', 'G-LTWJBW83RM');
						</script>";

	$google_recaptcha = "";


?>