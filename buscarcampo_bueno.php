<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if ($_POST['bcampo']) {
	# code...
	$buscar= $_POST['bcampo'];
	
}
if (empty($buscar)) {
	# code...
	echo "NO hay criterios de busqueda intente nuevamente";
}
else
{


	include("conexion2.php");

 $qbc="SELECT * FROM general_ips";
 $resqbc=mysqli_query($conexion,$qbc) or die(mysql_error()) ;

echo "<table border ='1'> <tr><td align='center'>ADDRESS</td> <td align='center'>SEGMENTO</td><td align='center'> IDENTIFICACION </td> <td align='center'> GRUPO TRABAJO</td> <td align='center'>AREA</td> <td align='center'>RESGUARDO</td> <td align='center'>INVENTARIO</td></tr>";

while ($row = mysqli_fetch_row($resqbc)) 
{
	# code...
	//echo "<tr>";
	echo "<tr><td align='center'>$row[0]</td><td align='center'>$row[1]</td><td align='center'>$row[2]</td><td align='center'>$row[3]</td><td align='center'>$row[4]</td> <td align='center'>$row[5]</td> <td align='center'>$row[6]</td></tr>\n";

}
echo "</table> \n";

mysqli_free_result($resqbc);

mysqli_close($conexion);
}
/*else
{
	echo "NO HAY REGISTROS, INTENTE NUEVAMENTE";
}*/
?>

</body>
</html>