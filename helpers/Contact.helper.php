<?php
/*Recibe un request post con los datos del usuario e intenta enviar un correo*/

require 'Courier.php';
require 'Responses.php';
require 'Forms.helper.php';
require '../vendor/autoload.php';

define('RUTA', parse_ini_file('../admin/path.ini')['path']);

$client = new GuzzleHttp\Client(['base_uri' => 'https://directus.cliqued.it/jael_preciat/']);

$response_correo = $client->request('GET', 'items/contacto', [
	'query' => [
	    'fields' => 'correo',
	    'single' => true
	]
]);

$correo = json_decode($response_correo->getBody(), true)['data']['correo']; //Convertir a un arreglo, para uso en PHP

response('success', $correo );

try{

	if( validateContact( $_POST['data'] )  ){
		//Enviar el correo de confirmación

		if( sendContactMail( $_POST['data'], $correo ) ){
			response('success', 'Gracias, nos pondremos en contacto pronto.' );
		}else{
		
			throw new Exception( 'No se pudo enviar el mensaje.' );
		}
	}

}catch(Exception $e){
	
	response( 'error', $e->getMessage() );

}


?>