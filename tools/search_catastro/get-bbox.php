<?php
include 'config.php';
include 'access-bbdd.php';
include 'get-functions.php';

$table = '"public"."malla5_etrs_concellos"';
$column = 'CLASICO';
$code = $_GET['code'];


$getfeatures = new GetFeatures($connectionstring);
$connected = $getfeatures->connect();

try {
	$bbox = $getfeatures->getBBoxString($table, $column, $code, TRUE);
	echo json_encode($bbox);
} catch (SINAException $ex) {
	echo $ex.getMessage();
}
?>
