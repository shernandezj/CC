<?php
//if (isset($_POST['tipob'])) {
	# code...

 include("conexion2.php");
$cadbuscar=$_POST['cadbuscar'];

 $q2="SELECT * FROM general_ips WHERE (Resguardo LIKE '%$cadbuscar%')";
 $resq2=mysqli_query($conexion,$q2) or die(mysql_error()) ;
 $compreg = mysqli_num_rows($resq2);
 if ($compreg==0) {
 	# code...
 	echo //"IP ADDRESS ASIGNADA PREVIAMENTE";
    '<script> alert("NO EXISTEN REGISTROS");
    window.history.go(-1);
    </script>';
    exit;
 }
 else
 {



echo "<table border ='1'> <tr><td align='center'>ID</td><td align='center'>ADDRESS</td> <td align='center'> IDENTIFICACION </td> <td align='center'> GRUPO TRABAJO</td> <td align='center'>AREA</td> <td align='center'>RESPONSABLE DE EQUIPO</td> <td align='center'>INVENTARIO</td></tr>";

while ($row = mysqli_fetch_row($resq2)) 
{
	# code...
	
	echo "<tr><td align='center'>$row[0]</td><td align='center'>$row[1]</td><td align='center'>$row[2]</td><td align='center'>$row[3]</td><td align='center'>$row[4]</td><td align='center'>$row[5]</td><td align='center'>$row[6]</td></tr>\n";


}
echo "</table> \n";

mysqli_free_result($resq2);

mysqli_close($conexion);

}
?>
