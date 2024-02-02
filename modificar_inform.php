<?php
session_start();
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion = '') {
    header("location:Inicio_sesión.php");
    die();
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style_inform.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="IMG/logo_expro_col_600_215-bicubic.png">
    <title>Modificar Informe</title>
</head>
<body>
    <?php

    include("PHP/con_bd.php");

    

    if(isset($_POST['actualizar'])){
        $id=$_POST['id'];
        $fecha=$_POST['date'];
        $invo=$_POST['involucrados'];
        $motivo=$_POST['motivo'];
        $descri=$_POST['descripcion'];

        $consulta = "UPDATE formularios SET fecha='".$fecha."',involucrados='".$invo."',motivo='".$motivo."',
        descripcion='".$descri."' WHERE id_formulario='".$id."'";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado) {
            echo "<script languaje='JavaScript'>
            alert ('Datos Actualizados correctamente');
            location.assign('index.php');
            </script>";
            
        } else {
            echo "<script languaje='JavaScript'>
            alert ('Datos no actualizados');
            location.assign('index.php');
            </script>";
        }   

    } else{
        $id=$_GET['id_formulario'];
        $consulta = "SELECT * FROM formularios WHERE id_formulario ='".$id."'";
        $resultado = mysqli_query($conex,$consulta);

        $hola=mysqli_fetch_assoc($resultado);
        $fecha=$hola['fecha'];
        $invo=$hola['involucrados'];
        $motivo=$hola['motivo'];
        $descri=$hola['descripcion'];

    ?>
    <header>
        <img src="IMG/logo_expro_col_600_215-bicubic.png">
    </header>

    <nav>
		<ul class="menu-horizontal">
			<li><a href="index.php">Inicio</a></li>
            <li><a href="proove.php">Proveedores</a></li>
            <li><a href="clientes.php">Clientes</a></li>
            <li>
			    <a href="new_inform.php">Nuevo informe</a>
			</li>
            
			<li>
				<a href="perfil.php">Perfil</a>
				<ul class="menu-vertical">
					<li><a href="PHP/cerrar_sesion.php">Cerrar sesión</a></li>
                    <li><a href="perfil.php">Ver perfil</a></li>
				</ul>
			</li>
		</ul>
	</nav>


    <div class="contact-wrapper">
        <div class="contact-form">
            <h3>Modificar informe de incidencia</h3>
            <form method="post">
                <p>
                    <label>Fecha de observación</label>
                    <input type="date" name="date" value="<?php echo $fecha; ?>" required>
                </p>
                <p>
                    <label>Personas involucradas</label>
                    <input type="text" name="involucrados" required value="<?php echo $invo; ?>">
                </p>
                <p>
                    <label>Motivo principal</label>
                    <input type="text" name="motivo" required value="<?php echo $motivo; ?>">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                </p>
                <p>
                    <label>Descripción del problema</label> 
                    <textarea name="descripcion" required><?php echo $descri; ?></textarea>
                </p>
                <p>
                    <button name="actualizar">Actualizar</button>
                </p>
            </form>
        </div>
    </div>
    
    <footer>
        <img src="IMG/logo_expro_col_600_215-bicubic.png" alt="Logo de la empresa">
        <p class="copyright">&copy Copyright EXPRO - 2023</p>
    </footer>
    
    <?php
    }
    ?>
</body>
</html>