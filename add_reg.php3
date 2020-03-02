<!DOCTYPE html>
<html>
</body>
</html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title></title>
</head>
<body>


<?php
    // Ejemplo de conexión a base de datos MySQL con PHP.
    //
    // Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
    
    // Datos de la base de datos
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "ips";
    
    // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
    
    // Selección del a base de datos a utilizar
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
if($conexion)
{
    //echo "Conexion correcta";
    $Address=$_POST['Address'];
    $Identificacion=$_POST['Identificacion'];
    $GrupoTrabajo=$_POST['GrupoTrabajo'];
    $Area=$_POST['Area'];
    $Resguardo=$_POST['Resguardo'];
    $Inventario=$_POST['Inventario'];

    $q1="INSERT INTO ips2 (Address,Identificacion,GrupoTrabajo,Area,Resguardo,Inventario) VALUES ('$Address','$Identificacion','$GrupoTrabajo','$Area','$Resguardo','$Inventario')";
$validar_ip=mysqli_query($conexion, "SELECT * FROM ips2 WHERE Address = '$Address'");
if(mysqli_num_rows($validar_ip)>0){
    echo //"IP ADDRESS ASIGNADA PREVIAMENTE";
    '<script> alert("LA IP ADDRESS INGRESADA YA FUE ASIGNADA A OTRO USUARIO");
    window.history.go(-1);
    </script>';
    exit;
}
$validar_inventario=mysqli_query($conexion,"SELECT * FROM ips2 WHERE Inventario = '$Inventario'");
if(mysqli_num_rows($validar_inventario)>0){
    echo //"Numero de Inventario Asignado PREVIAMENTE";
    '<script> alert("EL INVENTARIO INGRESADO YA FUE ASIGNADA A OTRO USUARIO");
    window.history.go(-1);
    </script>';
    exit;
}
    $result=mysqli_query($conexion,$q1);
    if(!$result){
        echo "Error al almacenar datos";

    }
    else
    {
        echo //"Datos agregados exitosamente";
          '<script> alert("REGISTRADO CORRETAMENTE");
    window.history.go(-1);
    </script>';
    }
if (mysqli_close($conexion)){
    echo "Desconexion realizada";
}
else{
    echo "Error en la Desconexion";
}


}

/* 
    // Motrar el resultado de los registro de la base de datos
    // Encabezado de la tabla
    echo "<table borde='2'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>ADDRESS</th>";
    echo "</tr>";
    
    // Bucle while que recorre cada registro y muestra cada campo en la tabla.
    while ($columna = mysqli_fetch_array( $resultado ))
    {
        echo "<tr>";
        echo "<td>" . $columna[''] . "</td><td>" . $columna[''] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>"; // Fin de la tabla
    // cerrar conexión de base de datos
    mysqli_close( $conexion );*/
?>
</body>
</html>