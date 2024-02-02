<?php

session_start();
session_destroy();
header("location:../Inicio_sesión.php");

?>