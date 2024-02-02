<?php 

include("con_bd.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['involucrados']) >= 1 && strlen($_POST['motivo']) >= 1 && strlen($_POST['descripcion']) >= 1) {
	    $fechareg = trim($_POST['date']);
	    $involucrados = trim($_POST['involucrados']);
		$motivo = trim($_POST['motivo']);
		$descripcion = trim($_POST['descripcion']);
	    $consulta = "INSERT INTO formularios(fecha,involucrados,motivo,descripcion) VALUES 
		('$fechareg','$involucrados','$motivo','$descripcion')";
		$resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {

			echo "<script languaje='JavaScript'>
    		alert ('Informe creado');
    		location.assign('index.php');
    		</script>";

	    } else {
	    	
			echo "<script languaje='JavaScript'>
    		alert ('Informe no creado');
    		location.assign('new_inform.php');
    		</script>";
        	
	    }
    }
}
?>