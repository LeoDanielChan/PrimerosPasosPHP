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
    <title>Nuevo cliente</title>
</head>
<body>
    <?php
    include("PHP/agregar_client.php");
    ?>
    <header>
        <img src="IMG/logo_expro_col_600_215-bicubic.png">
    </header>

    <div class="contact-wrapper">
        <div class="contact-form">
            <h3>Nuevo cliente</h3>
            <form method="post" enctype="multipart/form-data">
                <p>
                    <label>Nombre del cliente</label>
                    <input type="text" name="name_clie" required placeholder="Escriba el nombre del proveedor">
                </p>
                <p>
                    <label>Servicio</label>
                    <input type="text" name="service" required placeholder="Servicio que ofrece el proveedor" required>
                </p>
                <p>
                    <label>Contacto</label>
                    <input type="text" name="contacto" required placeholder="Contacto del proveedor" required>
                </p>
                <p>
                    <label>Logo del cliente</label> 
                    <input type="file" name="logo" placeholder="Seleccione el logo del proveedor" required>
                </p>
                <p>
                    <div class="select">
                        <select name="metodo_de_pago">
                            <option selected disabled>Seleciona la forma de pago</option>
                            <option value="1" required>Electrónico</option>
                            <option value="2" required>Físico</option>
                        </select>
                    </div>
                </p>
                <p>
                    <button name="enviar">Enviar</button>
                </p>
            </form>
        </div>
    </div>
    
    <footer>
        <img src="IMG/logo_expro_col_600_215-bicubic.png" alt="Logo de la empresa">
        <p class="copyright">&copy Copyright EXPRO - 2023</p>
    </footer>
    
</body>
</html>