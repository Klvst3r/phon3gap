<?php
	include "inc/conn.php";	

	$data = array();

	$sql = "SELECT * FROM libro";
	
	$select = $link->query($sql);

	$nums = mysqli_num_rows($select);

	while($row = mysqli_fetch_object($select)){
		$data[] = $row;
	}
	echo json_encode($data);
	//echo json_encode($data, JSON_UNESCAPED_UNICODE);


  /*  $query = mysqli_query($link, "SELECT * FROM libro");
	$json = array();
	while($row = mysqli_fetch_object($query)){
		$json = $row;	
	    $json[] = array(
	        'Id' => $row['id'],
	        'Nombre' => $row['nombre'],
	        'Autor' => $row['autor'],
	        'Precio' => $row['precio']
	    );

	}
	$jsonstring = json_encode($json);
	echo $jsonstring;
	*/
?>
