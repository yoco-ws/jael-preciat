<?php require_once('admin/config.php'); ?>
<?php 

$response_page = $client->request('GET', 'items/home', [
	'query' => [
	    'fields' => '*.*,iconos.iconos_id.*.*.*',
	    'single' => true
	]
]);

$page = json_decode($response_page->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP





if(0){
	header('Content-type: application/json');
	echo json_encode($page, true);  //Los objetos de paypal ya vienen en formato json asi que se debe evitar el json_encode.
	die();
}




?>
<?php require("views/index.view.php"); ?>








