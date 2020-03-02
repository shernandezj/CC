<!DOCTYPE html>
<html>
</body>
</html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Actulizacion Realizada</title>
</head>
<body>


<?php
    # code...
if (isset($_POST['actualizar'])) {
    # code...

    $cadactualizar=$_POST['id'];
    $Address=$_POST['Address'];
    $Identificacion=$_POST['Identificacion'];
    $GrupoTrabajo=$_POST['GrupoTrabajo'];
    $Area=$_POST['Area'];
    $Resguardo=$_POST['Resguardo'];
    $Inventario=$_POST['Inventario'];

/*echo $cadactualizar;
echo $Address;
echo $Identificacion;
echo $GrupoTrabajo;
echo $Area;
echo $Resguardo;
echo $Inventario;*/

include('conexion2.php');

         
    $q1="UPDATE general_ips SET Address='$Address',Identificacion='$Identificacion',GrupoTrabajo='$GrupoTrabajo',Area='$Area',Resguardo='$Resguardo',Inventario='$Inventario' WHERE id ='$cadactualizar'";
   mysqli_query($conexion,$q1) or die(mysql_error());

mysqli_close($conexion);



echo '<script> alert("Actualizacion Correcta");
    window.history.go(-2);
    </script>';
}

?>
</body>
</html>