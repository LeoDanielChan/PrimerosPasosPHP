<?php

include("con_bd.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['metodo_de_pago']) >= 1) {
        $metodo = trim($_POST['metodo_de_pago']);
        $name = trim($_POST['name_clie']);
        $service = trim($_POST['service']);
        $contac = trim($_POST['contacto']);
        $logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
        $consulta = "INSERT INTO clientes(id_forma_de_pago,nombre,servicio,contacto,logo) VALUES
        ('$metodo','$name','$service','$contac','$logo')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado) {
            header("location:clientes.php");
        } else {
            header("location:nuevo_cliente.php");
        }
    }
}

?>