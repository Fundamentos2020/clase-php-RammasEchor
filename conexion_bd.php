<?php

    $host = '127.0.0.1' ;
    $base_datos = 'lista_tareas' ;  /* Cambiar al nombre de la base de datos */
    $user = 'root' ;
    $pass = '' ;
    $charset = 'utf8' ;

    $dsn = "mysql:host=$host;dbname=$base_datos;charset=$charset";
    $options = [];

    try {
        $pdo = new PDO( $dsn, $user, $pass, $options );
    }
    catch( \PDOexception $e )   {
        throw new \PDOexception( $e->getMessage(), (int)$e->getCode() );
    }

    $query = $pdo->query('SELECT * FROM tareas WHERE id = 1 OR id = 2');
    while( $res = $query->fetch( PDO::FETCH_OBJ ) ) {
        echo json_encode( $res ) . "<br>" ;
    }
?>