<?php

$id=$_GET['id_cliente'];

include("con_bd.php");

session_start();
$varsesion = $_SESSION['usuario'];


$consulta2 = "SELECT * FROM  usuarios WHERE name_user = '".$varsesion."' ";
$resultado2 = mysqli_query($conex,$consulta2);
$row = mysqli_fetch_assoc($resultado2);
$salado = $row['id_tipo_de_usuario'];

if($salado == 1) {

    $consulta = "DELETE FROM clientes WHERE id_cliente ='".$id."'";
    $resultado = mysqli_query($conex,$consulta);

    if($resultado) {
        echo "<script languaje='JavaScript'>
        alert ('Datos eliminados correctamente');
        location.assign('../clientes.php');
        </script>";
        
    } else {
        echo "<script languaje='JavaScript'>
        alert ('Datos no eliminados');
        location.assign('../clientes.php');
        </script>";
    }

} else {

    echo "<script languaje='JavaScript'>
    alert ('No tienes permitido esta acción');
    location.assign('../clientes.php');
    </script>";

}
?>