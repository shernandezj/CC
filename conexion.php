<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
  
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "ips";
    
    // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
    
    // Selección del a base de datos a utilizar
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
if ($conexion) {
	echo "Conexion Correcta";
	$q2= mysqli_query($conexion, "SELECT * FROM 'total' WHERE Identificacion = 'null'");
}
else
echo "Error en conexion";

 ?>
</body>
</html>


