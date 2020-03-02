<!DOCTYPE html>
<html>
<head>
	<title>ACTULIZACION DE REGISTROS</title>
</head>
<?php
if (isset($_POST['buscar'])) {
	# code...

 $cadactualizar=$_POST['idb'];
 include("conexion2.php");
 $q2="SELECT * FROM general_ips WHERE Id = '$cadactualizar'";
 $resq2=mysqli_query($conexion,$q2) or die(mysql_error()) ;

 while ($registro= mysqli_fetch_array($resq2)) {
 	# code...
echo "Usted Actualizara los datos del registro:";
 	echo $cadactualizar;
 	echo "
 		<body>
 		<form method='POST' action='updateregistro.php' >
 		<input type='hidden' name='id' value ='".$registro['Id']."'>
IP Address:<input type='text' name='Address' value='".$registro['Address']."' required ><br>
Identificacion :<input type='Text' name='Identificacion' value='".$registro['Identificacion']."' required>
<br>
Grupo de Trabajo   :<input type='Text' name='GrupoTrabajo' value='".$registro['GrupoTrabajo']."' required><br>
Área   :<input type='Text' name='Area' value='".$registro['Area']."' required><br>
Responsable  :<input type='Text' name='Resguardo' value='".$registro['Resguardo']."' required><br>
Inventario  :<input type='Text' name='Inventario' value='".$registro['Inventario']."' required><br>
<input type='Submit' name='actualizar' value='actualizar' >
</form>
 		";

 }

 
}
mysqli_close($conexion);

?>
</body>
</html>