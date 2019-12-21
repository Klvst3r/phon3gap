<?php
	include "inc/conn.php";

	if(isset($_POST['delete'])){
		$id = $_GET['id'];
		

		$sql = "DELETE FROM libro WHERE id = '$id'";
		
		$delete = $link -> query($sql);

		if($delete){
			echo "Borrado Correcto";
		}else{
			echo "Error con la eliminación";
		}
	}
?>
