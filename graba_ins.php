<?php
	include "conexion.php";
	if($conn){
		$SQL = "INSERT INTO inscritos(nom, apel, email, profe) VALUES ";
		$SQL = $SQL."('".$_REQUEST["nm"]."', ";
		$SQL = $SQL."'".$_REQUEST["ap"]."', ";
		$SQL = $SQL."'".$_REQUEST["em"]."', ";
		$SQL = $SQL."'".$_REQUEST["pr"]."') ";

		if($conn->query($SQL))
			echo "Inscripción Exitosa <br> <a href='inscripciones.html'> VOLVER </a>";
		else
			echo "No se pudo inscribir <br> <a href='inscripciones.html'> VOLVER </a>";
		
	}
?>