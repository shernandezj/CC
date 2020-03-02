<?php
if (isset($_POST['segmento'])) {
	# code....
	$segmento= $_POST['segmento'];
	switch ($segmento) {
		case '2':
			# code...
		include('consultas2.php');
		//echo "Selecionaste 2";
			break;
		case '3':
		include('consultas3.php');
			break;

		case '4':
		
			break;

		case '5':

			break;

		case '6':

			break;

		case '7':

			break;

		case '8':

			break;

		case '9':

			break;
			
		case '10':

			break;
			
		case '11':

			break;
			
		case '12':

			break;
			
		case '13':

			break;
			
		case '14':

			break;
			

		case '15':

			break;

		case '16':

			break;
			
		case '17':

			break;
					
					
		case '18':

			break;
			
		case '19':

			break;
					
		case '20':

			break;

		case '21':

			break;
			
		case '22':

			break;
			
		case '23':

			break;
					
		case '24':

			break;

		case '66':

			break;
					
	
	default:
			# code...
		echo "Seleccione un segmento del 2-24 o 66";
			break;
	}
}


?>
