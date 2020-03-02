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
    # code...
          
        include('conexion2.php');

    //echo "Conexion correcta";
    $addreg=$_POST['addreg'];
    $Address=$_POST['Address'];
    $Identificacion=$_POST['Identificacion'];
    $GrupoTrabajo=$_POST['GrupoTrabajo'];
    $Area=$_POST['Area'];
    $Resguardo=$_POST['Resguardo'];
    $Inventario=$_POST['Inventario'];

    $q1="INSERT INTO general_ips (Address,Identificacion,GrupoTrabajo,Area,Resguardo,Inventario) VALUES ('$Address','$Identificacion','$GrupoTrabajo','$Area','$Resguardo','$Inventario')";

$validar_ip=mysqli_query($conexion, "SELECT * FROM general_ips WHERE Address = '$Address'");
if(mysqli_num_rows($validar_ip)>0){
    echo //"IP ADDRESS ASIGNADA PREVIAMENTE";
    '<script> alert("LA IP ADDRESS INGRESADA YA FUE ASIGNADA A OTRO USUARIO");
    window.history.go(-1);
    </script>';
    exit;
}
$validar_inventario=mysqli_query($conexion,"SELECT * FROM general_ips WHERE Inventario = '$Inventario'");
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




?>
</body>
</html>