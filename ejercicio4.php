<?php


setcookie("nombre","Alfredo",time() + 84600);
setcookie("Apellido","Palacios",time()+ 84600);


echo "El Nombre de La Cookie es:".$_COOKIE["nombre"].'<br>';
echo "El Apellido de La Cookie es:".$_COOKIE["Apellido"];

?>