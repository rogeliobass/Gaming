<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body background="gamin2.jpg">
		<?php
				$link=new mysqli('localhost','root','vertrigo','Nuevo');
			//mysqli_select_db("DATOS", $link) or die ("Error de conexión");
			mysqli_query($link,"INSERT INTO datos2(folio ,nombre , edad , ocupacion ,opinion ,recomendacion , medidaSeguridad, cambio1 ) VALUES('{$_POST['folio']}','{$_POST['nombre']}','{$_POST['edad']}','{$_POST['ocupacion']}','{$_POST['opinion']}','{$_POST['recomendacion']}','{$_POST['medidaSeguridad']}','{$_POST['cabio1']}')");
			$my_error= mysqli_error($link);
			if(!empty ($my_error)){
				echo "Error al insertar $my_error";
			}
			else{
				echo "Datos insertados correctamente.se mandara su numero de seguimiento a su correo       ";

			}
			if($link -> connect_errno)
				echo "Error";;

		?>
	<center> <a  href="principal.html"> REGRESAR A CATALOGO </a> </center>
	</body>
</html>