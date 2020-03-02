<?php
if (isset($_POST['tipob'])) {
	# code....
	$tipob= $_POST['tipob'];
	$cadbuscar= $_POST['cadbuscar'];
	switch ($tipob) {
		case '2':
		include('consultaip.php');
			break;

		case '3':
		include('considentificacion.php');

			break;

		case '4':
		include('consgrupotrabajo.php');
			break;

		case '5':
		include('consarea.php');
			break;

		case '6':
		include('consresguardo.php');
			break;

		case '7':
		include('consinventario.php');
			break;
			
	
	default:
			# code...
	echo
	'<script> alert("SELECCIONA UNA OPCION");
    window.history.go(-1);
    </script>';
 
			break;
	}
}


?>
