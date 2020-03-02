<?php
if (isset($_POST['login'])) {
	# code...
	$user=$_POST['user'];
	$pswd=$_POST['pswd'];

echo "Usuario es:";
echo "";
echo "";
echo $_POST['user'];
echo "";
echo "";
echo "Password es:";
echo "";
echo "";
echo $_POST['pswd'];
 include("conexion_login.php");
$qtcuenta="SELECT usuario,Tusuario FROM usuarios WHERE (usuario ='$user')";
$rstcuenta=mysqli_query($conexion,$qtcuenta) or die(mysql_error());

$row = mysqli_fetch_array($rstcuenta);
$tu=$row['Tusuario'];
$user=$row['usuario'];
$password=$row['pass'];
if (($usuario == $user) AND ($pass == $password)) {
	# code...
	if ($tu == "administrador" /*|| "Administrador"*/) {
		# code...
		header("Location: admin.html");
	}

	if ($tu == "usuario" /*|| "Usuario"*/) {
		# code...
		header("Location: user.html");
	}
}
else
{

	echo '<script> alert("Usuario no valido");
    window.history.go(-1);
    </script>';
	
}

	
}

?>

