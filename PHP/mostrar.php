<?php

$inc = include("con_bd.php");

if($inc){
    $consulta = "SELECT * FROM informes";
    $resultado = mysqli_query($conex,$consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $motivo = $row['motivo'];
        }
    }
}
?>