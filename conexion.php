<?php
	$conn = mysqli_connect("localhost","root","", "musicclubyt");
	if(!$conn) {
		echo "Error al conectarse";
		exit;
	}
?>