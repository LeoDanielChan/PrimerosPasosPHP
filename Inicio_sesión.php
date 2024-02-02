<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style-sesion.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
    <link rel="icon" href="IMG/logo_expro_col_600_215-bicubic.png">
    <title>Iniciar sesión</title>
</head>
<body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
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
                <form id="loginform" method="post" action="PHP/inicio_ses.php">
                    <input type="text" name="usuario" placeholder="Usuario" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <button type="submit" title="Ingresar" name="Ingresar">Ingresar</button>
                </form>
                <div class="pie-form">
                    <a href="">¿Perdiste tu contraseña?</a>
                    <a href="regitrarse.php">¿No tienes Cuenta? Registrate</a>
                </div>
            </div>
        </div>
    </div>

    
    <footer>
        <img src="IMG/logo_expro_col_600_215-bicubic.png" alt="Logo de la empresa">
        <p class="copyright">&copy Copyright EXPRO - 2023</p>
    </footer>
</body>
</html>