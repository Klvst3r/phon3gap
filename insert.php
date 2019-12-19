<?php
	include "inc/conn.php";

	//If we make Click with button post in form
	if(isset($_POST['insert'])){
		$nombre = 	$_POST['nombre'];
		$autor = 	$_POST['autor'];
		$precio = 	$_POST['precio'];

		$sql = "INSERT INTO libro VALUES (NULL, '$nombre', '$autor', '$precio')";
		
		//with method link we send the var $sql
		$query = $link -> query($sql);

		if($query){
			echo "Correcto";
		}else{
			echo "Error con insert";
		}
	}
?>
