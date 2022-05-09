<?php
	include "conexion.php";
	$ans = $conn->query("SELECT * FROM inscritos ORDER BY cod");
	
	echo "<h1>Lista de Inscritos<h1>";
	
	echo "<table border=1>";
	while($row = $ans->fetch_array()) {
		echo "<tr>";
		echo "<td>".$row["cod"]."<td>".$row["nom"]."<td>".$row["apel"]."<td>".$row["email"]."<td>".$row["profe"];
	}
	echo "</table>";
	echo "<br> <a href='inscripciones.html'> VOLVER </a>";
?>