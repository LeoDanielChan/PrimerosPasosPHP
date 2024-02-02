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
    <link rel="stylesheet" href="CSS/style_registrarse.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="IMG/logo_expro_col_600_215-bicubic.png">
    <title>Modificar cliente</title>
</head>
<body>
    <?php
    include("PHP/con_bd.php");

    if(isset($_POST['actualizar'])){
        $id=$_POST['id'];
        $metodo=$_POST['metodo_de_pago'];
        $name=$_POST['name_clie'];
        $service=$_POST['service'];
        $contac=$_POST['contacto'];
        $logo= addslashes(file_get_contents($_FILES['logo']['tmp_name']));

        $consulta = "UPDATE clientes SET id_forma_de_pago='".$metodo."',nombre='".$name."',servicio='".$service."',
        contacto='".$contac."',logo='".$logo."' WHERE id_cliente='".$id."'";
        $resultado = mysqli_query($conex,$consulta);

        if($resultado) {
            echo "<script languaje='JavaScript'>
            alert ('Datos Actualizados correctamente');
            location.assign('clientes.php');
            </script>";
            
        } else {
            echo "<script languaje='JavaScript'>
            alert ('Datos no actualizados');
            location.assign('clientes.php');
            </script>";
        }

    }else{
        $id=$_GET['id_cliente'];
        $consulta = "SELECT * FROM clientes WHERE id_cliente ='".$id."'";
        $resultado = mysqli_query($conex,$consulta);

        $hola=mysqli_fetch_assoc($resultado);
        $metodo =$hola['id_forma_de_pago'];
        $name =$hola['nombre'];
        $service =$hola['servicio'];
        $contac =$hola['contacto'];
        $logo =$hola['logo'];
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
            <h3>Modificar cliente</h3>
            <form method="post" enctype="multipart/form-data">
                <p>
                    <label>Nombre del cliente</label>
                    <input type="text" name="name_clie" required value="<?php echo $name; ?>">
                </p>
                <p>
                    <label>Servicio</label>
                    <input type="text" name="service" value="<?php echo $service; ?>" required>
                </p>
                <p>
                    <label>Contacto</label>
                    <input type="text" name="contacto" value="<?php echo $contac; ?>" required>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                </p>
                <p>
                    <label>Logo del cliente</label> 
                    <input type="file" name="logo" required>
                </p>
                <p>
                    <div class="select">
                        <select name="metodo_de_pago" required>
                            <option selected disabled>Seleciona la forma de pago</option>
                            <option value="1">Electrónico</option>
                            <option value="2">Físico</option>
                        </select>
                    </div>
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