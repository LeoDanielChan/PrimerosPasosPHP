<?php 

include("con_bd.php");


if (isset($_POST['registrarse'])) {
	$tipo_user = trim($_POST['tipo_user']);
	$area = trim($_POST['area']);
	$nombre = trim($_POST['nombre']);
	$apellido_p = trim($_POST['apellido_pa']);
    $apellido_m = trim($_POST['apellido_ma']);
	$user_name = trim($_POST['user_name']);
    $correo = trim($_POST['email']);
    $contraseña = trim($_POST['password']);
    $tel = trim($_POST['tel']);
    $puesto_tra = trim($_POST['puesto']);

	$validacion = "SELECT id_usuario FROM usuarios WHERE name_user LIKE '$user_name' LIMIT 1 ";
	$sql = mysqli_query($conex,$validacion);
	$validacion2 = "SELECT id_usuario FROM usuarios WHERE correo LIKE '$correo' LIMIT 1 ";
	$sql2 = mysqli_query($conex,$validacion2);
	
	$filas=mysqli_num_rows($sql);
    $filas2=mysqli_num_rows($sql2);

	if($filas==0 and $filas2==0){
		$consulta = "INSERT INTO usuarios(id_tipo_de_usuario,id_area,nombre,apellido_paterno,apellido_materno,name_user,correo,contraseña,telefono,puesto_de_trabajo) VALUES
		('$tipo_user','$area','$nombre','$apellido_p','$apellido_m','$user_name','$correo','$contraseña','$tel','$puesto_tra')";
		$resultado = mysqli_query($conex,$consulta);
		if ($resultado) {
			echo "<script languaje='JavaScript'>
			alert ('Te registraste con éxito');
			location.assign('Inicio_sesión.php');
			</script>";
		
		} else {
			echo "<script languaje='JavaScript'>
			alert ('¡Ups, ha ocurrido algún problema!');
			</script>";
		}
	} else{
		echo "<script languaje='JavaScript'>
		alert ('Usuario o correo ya está registrado');
		</script>";
	}
	
		

		
		
}

?>

