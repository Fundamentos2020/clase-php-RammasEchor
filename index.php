<?php

//Declaración de variables
$a = "Hola mundo" ;
$b = 3 ;
$a = 2.5 ;

//Arreglos
$array_1 = array();
$alumno = array();

$array_1[] = 1 ;
$array_1[] = 2 ;
$array_1[] = "Hola" ;

//var_dump( $array_1 )

$alumno['cve_unica'] = "251737" ;
$alumno['Nombre'] = "Luis" ;
$alumno['Apellidos'] = "Nieto" ;

//Json
$json = '{"cve_unica":"251737", "Nombre":"Luis", "Apellidos":"Nieto"}' ;
$alumno_aux = json_decode( $json );

//var_dump( $alumno_aux )

echo $alumno_aux->cve_unica ;

//Funciones
function miFuncion()    {
    $a = "Cambiar texto" ;
}

miFuncion();
echo $a ;

class Aux {
    public $x ;
    public $y ;
}

$aux = new Aux();

$aux->x = "Valor de x" ;

var_dump( $aux );

?>