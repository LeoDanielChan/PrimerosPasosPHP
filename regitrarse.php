<?php 

include("PHP/regis_sesion.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style_registrarse.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
    <link rel="icon" href="IMG/logo_expro_col_600_215-bicubic.png">
    <title>Registrate</title>
</head>
<body>
    
    <header>
        <div class="encabezado">
            <img src="IMG/logo_expro_col_600_215-bicubic.png" alt="Logo de la empresa">
        </div>
    </header>

    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Bienvenido
                </div>
                <form id="loginform" method="POST" action="">
                    <input type="text" name="nombre" placeholder="Nombre completo" required>
                    <input type="text" name="apellido_pa" placeholder="Apellido paterno" required>
                    <input type="text" name="apellido_ma" placeholder="Apellido materno" required>
                    <input type="text" name="user_name" placeholder="Nombre de usuario" required>
                    <input type="email" name="email" placeholder="Correo electrónico" required>
                    <input type="tel" name="tel" placeholder="Numero de telefono" required>
                    <input type="text" name="puesto" placeholder="Puesto de trabajo" required>
                    <div class="select">
                        <select name="area" required>
                            <option selected disabled>Seleciona el área de trabajo</option>
                            <option value="1">Administración</option>
                            <option value="2">Contabilidad</option>
                            <option value="3">Dirección</option>
                            <option value="4">Finanzas</option>
                            <option value="5">Gestión</option>
                            <option value="6">Producción y operaciones</option>
                            <option value="7">Recursos humanos</option>
                            <option value="8">Ventas y mercadeo</option>
                        </select>
                    </div>
                    <div class="select">
                        <select name="tipo_user" required>
                            <option selected disabled>Seleciona el tipo de usuario</option>
                            <option value="1">Administrativo</option>
                            <option value="2">Empleado</option>
                        </select>
                    </div>
                    <input type="password" placeholder="Crea una contraseña" name="password" required>
                    <button type="submit" title="Registrarse" name="registrarse">Registrarse</button>
                </form>
            </div>
        </div>
    </div>

    
    <footer>
        <img src="IMG/logo_expro_col_600_215-bicubic.png" alt="Logo de la empresa">
        <p class="copyright">&copy Copyright EXPRO - 2023</p>
    </footer>
</body>
</html>