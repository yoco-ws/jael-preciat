<?php

/* Validators */
function validateContact( $data ){

	foreach ($data as $key => $value) {
		switch ($key) {
			case 'name':
				if($value == ""){
					throw new Exception("Please write your name");
					return false;
				}
				break;
			case 'email':
				if($value == ""){
					throw new Exception("Please write your email address.");
					return false;
				}
				break;
			case 'message':
				if($value == ""){
					throw new Exception("Please select an answer.");
					return false;
				}
				break;
			
		}
	}
	return true;

}

/* Helpers */

function verifyCaptcha(){
	$captcha = '';

	if (isset($_POST['recaptcha'])) $captcha = $_POST['recaptcha'];

	if (!$captcha){
		throw new Exception("No pudimos enviar tu mensaje, por favor verifica que se marcó correctamente el captcha.");
	}

	$secret = '6LcchOYUAAAAAAkXkPiG4VA3SoDwA_vR61PaxpYi';
	$response = json_decode(url_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

	if($response['success'] == false){
		return false;
		throw new Exception("No se validó correctamente el recaptcha", 1);
	}else{
		return true;
	}
}

function url_get_contents ($Url) {
    if (!function_exists('curl_init')){ 
        throw new Exception("Error del servidor: extension curl desactivada");
        die();
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

function generarAssocArray($data){
	$assocArray = array();
	foreach ($data as $key => $value) {
		$assocArray[$value['name']] = $value['value'];
	}

	return $assocArray;
}


?>