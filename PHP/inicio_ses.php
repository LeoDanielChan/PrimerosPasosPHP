<?php
include("con_bd.php");

$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

$consulta = "SELECT * FROM usuarios WHERE name_user = '$usuario' and contraseña = '$contraseña'";
$resultado = mysqli_query($conex,$consulta);

if($resultado){


  $filas=mysqli_num_rows($resultado);

  if($filas){
  
    header("location:../index.php");

  }else{
    
    header("location:../Inicio_sesión.php");
    echo " <script languaje='JavaScript'>
    swal('¡Ups hay un problema!', '¡Usuario o contraseña incorrecta!', 'success')
    alert('sadsadf')";
  
  }

}else{
  echo " <script languaje='JavaScript'>
  swal('¡Ups hay un problema!', '¡Usuario no existe!', 'success')
  alert('sadsadf')";
}


mysqli_free_result($resultado);
mysqli_close($conex);
?>