<?php
	include "inc/conn.php";

	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$nombre = 	$_POST['nombre'];
		$autor = 	$_POST['autor'];
		$precio = 	$_POST['precio'];

		$sql = "UPDATE libro SET nombre = '$nombre', autor = '$autor', precio = '$precio' WHERE id = '$id'";
		
		$update = $link -> query($sql);

		if($update){
			echo "Actualizacion Correcta";
		}else{
			echo "Error con Update";
		}
	}
?>
