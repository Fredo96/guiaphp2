<?php

session_start();

$_SESSION["Nombre"] ="Antonio";
$_SESSION["Apellido"]= "Hernandez";
$_SESSION["Usuario"]="Admin";
$_SESSION["correo"]="hernandez6@gmail.com";
$_SESSION["Mensaje"]="Bienvenid@";

echo $_SESSION["Mensaje"].' '.$_SESSION["Nombre"].' '.$_SESSION["Apellido"].' Su Usuario '.$_SESSION["Usuario"].' Su Gmial '.$_SESSION["correo"];

?>