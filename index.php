<?php require_once('admin/config.php'); ?>

<?php 

$response_page = $client->request('GET', 'items/landing', [
	'query' => [
	    'fields' => '*.*,bloques.bloques_id.*',
	    'single' => true
	]
]);

$page = json_decode($response_page->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP



$response_redes = $client->request('GET', 'items/redes', [
	'query' => [
	    'fields' => '*.*'
	]
]);

$redes = json_decode($response_redes->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP


$response_contacto = $client->request('GET', 'items/contacto', [
	'query' => [
	    'fields' => '*.*',
        'single' => true
	]
]);

$contacto = json_decode($response_contacto->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP



if(0){
	header('Content-type: application/json');
	echo json_encode($contacto, true);  //Los objetos de paypal ya vienen en formato json asi que se debe evitar el json_encode.
	die();
}








?>

<?php require("views/index.view.php"); ?>