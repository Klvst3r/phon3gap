<?php

$host_BD = "localhost";
$user_BD = "dev";
$pass_BD = "desarrollo";
$name_BD = "id11991505_phon3gap";

$link = new mysqli($host_BD, $user_BD, $pass_BD, $name_BD);
mysqli_set_charset($link,"utf8");
/*
if($link){
	echo "Conexion Exitosa";
}else{
	echo "Error en la conexion con la BD";
}
*/
?>
