<!DOCTYPE html>
<html>
<head>
	<title>Busqueda de IP</title>
</head>
<body>
<?php
	include("conexion2.php");

 $q2="SELECT * FROM segmento2 WHERE Identificacion =''";
 $resq2=mysqli_query($conexion,$q2) or die(mysql_error()) ;

echo "<table border ='1'> <tr><td align='center'>ID</td><td align='center'>ADDRESS</td> <td align='center'> IDENTIFICACION </td> <td align='center'> GRUPO TRABAJO</td> <td align='center'>AREA</td> <td align='center'>RESGUARDO</td> <td align='center'>INVENTARIO</td></tr>";

while ($row = mysqli_fetch_row($resq2)) 
{
	# code...
	//echo "<tr>";
	echo "<tr><td align='center'>$row[0]</td><td align='center'>$row[1]</td><td align='center'>$row[2]</td><td align='center'>$row[3]</td><td align='center'>$row[4]</td><td align='center'>$row[5]</td> <td align='center'>$row[6]</td></tr>\n";

}
echo "</table> \n";

mysqli_free_result($resq2);

mysqli_close($conexion);

?>

</body>
</html>