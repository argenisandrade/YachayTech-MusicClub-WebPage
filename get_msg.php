<?php
	$conn = mysqli_connect("localhost", "root", "", "musicclubyt");
	
	$SQL = "SELECT JSON_OBJECT('cod',cod, 'nom',nom, 'apel',apel, 'email',email, 'msg', msg) ";
	$SQL = $SQL."FROM mensajes ";
	$SQL = $SQL."WHERE cod= ".$_REQUEST["cd"];
	
	$ans = $conn->query($SQL);
	if($ans->num_rows > 0) {
		$row = $ans->fetch_array();
		echo $row[0];
	} else
		echo "{cod:'no data',nom:'no data',apel:'no data',email:'no data',msg: 'no data'}";
?>