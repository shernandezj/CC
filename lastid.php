<?php 
include ('conexion2.php');
$q1="SELECT MAX(id) AS id FROM general_ips";
$resq1=mysqli_query($conexion,$q1) or die(mysql_error());

//$vid=$resq1;

//echo "<table border ='1'> <tr><td align='center'>ID</td></tr>";
//$row =mysqli_fetch_row($resq1);

echo $vid;
//if ($row>0) {
	//include('registrar_v2.php');
//}

//echo "</table> \n";

mysqli_free_result($resq1);

mysqli_close($conexion);

array_key_exists(key, array)



 ?>