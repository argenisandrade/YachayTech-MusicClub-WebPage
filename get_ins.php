<?php
	$conn = mysqli_connect("localhost", "root", "", "musicclubyt");
	
	$SQL = "SELECT JSON_OBJECT('cod',cod, 'nom',nom, 'apel',apel, 'email',email, 'profe', profe) ";
	$SQL = $SQL."FROM inscritos ";
	$SQL = $SQL."WHERE cod= ".$_REQUEST["cd"];
	
	$ans = $conn->query($SQL);
	if($ans->num_rows > 0) {
		$row = $ans->fetch_array();
		echo $row[0];
	} else
		echo "";
?>