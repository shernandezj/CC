<?php
  
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "ips";
    
    // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
    
    // Selección del a base de datos a utilizar
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "No se puede seleccionar la DB" );
 ?>


