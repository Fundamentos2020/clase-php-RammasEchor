<?php
var_dump( $_GET );

$cadena = file_get_contents('php://input');

$json = json_decode( $cadena );

var_dump( $json );
?>