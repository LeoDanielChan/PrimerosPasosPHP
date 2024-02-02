<?php
session_start();
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion = '') {
    header("location:Inicio_sesión.php");
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style_proove.css">
    <link rel="icon" href="IMG/logo_expro_col_600_215-bicubic.png">
    <title>clientes</title>
    <script>
    function confirmar(){
      return confirm('¿Estás seguro?, se eliminará el registro');
    }
    </script>
</head>
<body>
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
    
    <div class="soledad">
        <a href="nuevo_cliente.php" class="titulo">Nuevo cliente</a>
    </div>

    <div class="outer-wrapper">
        <div class="table-wrapper">
            <table class="content-table">
                <thead>
                    <tr>
                        
                        <th>Empresa</th>
                        <th>Servicio</th>
                        <th>Contacto</th>
                        <th>Logo</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $inc = include("PHP/con_bd.php");
                    if($inc){
                        $consulta = "SELECT * FROM clientes";
                        $resultado = mysqli_query($conex,$consulta);                       
                        while($row = mysqli_fetch_assoc($resultado)){
                            $id = $row['id_cliente'];                           
                            ?>
                            <tr>    
                                <td class="solo"><?php echo $row['nombre']; ?></td>
                                <td class="solo"><?php echo $row['servicio']; ?></td>
                                <td class="solo"><?php echo $row['contacto']; ?></td>
                                <td class="logos"><img src="data:image/jpg;base64,<?php echo base64_encode($row['logo']) ; ?>" alt="Logo de la empresa"></td>
                                <td class="renglon">
                                <?php echo "<a href='modificar_client.php?id_cliente=".$row['id_cliente']."' class='uno'>Modificar</a>"; ?>
                                <?php echo "<a href='PHP/eliminar_client.php?id_cliente=".$row['id_cliente']."' class='dos' onclick='return confirmar()'>Eliminar</a>"; ?>
                                </td>
                            </tr>
                            <?php
                        }                       
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <footer>
        <img src="IMG/logo_expro_col_600_215-bicubic.png" alt="Logo de la empresa">
        <p class="copyright">&copy Copyright EXPRO - 2023</p>
    </footer>
</body>
</html>