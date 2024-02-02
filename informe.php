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
    <link rel="stylesheet" href="CSS/style-informe.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="IMG/logo_expro_col_600_215-bicubic.png">
    <title>Informes</title>
</head>
<body>
    
    <?PHP

        include("PHP/con_bd.php");
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

    <div class="vista">
        <h2>
            Expro
        </h2>
        
        <br>

        <ul>
            <li><b>Tipo de reporte</b>: Reporte de incidencias</li>
            
            <li><b>N° de expediente</b>: <?php echo $id; ?></li>
            
            <li><b>Fecha</b>: <?php echo $fecha; ?></li>
        </ul>

        <br>

        <p><b>Involucrados</b>: <?php echo $invo; ?></p>
        
        <br>
        
        <p><b>Motivo</b>: <?php echo $motivo; ?></p>
        
        <br>

        <p>
            <?php echo $descri; ?>
        </p>
    </div>

    <footer>
        <img src="IMG/logo_expro_col_600_215-bicubic.png" alt="Logo de la empresa">
        <p class="copyright">&copy Copyright EXPRO - 2023</p>
    </footer>
</body>
</html>