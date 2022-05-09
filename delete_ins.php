<?php
	include "conexion.php";
	if($conn) {
		if($conn->query("DELETE FROM inscritos WHERE cod=".$_REQUEST["cd"]))
			echo "Registro borrado <br> <a href='inscripciones.html'> VOLVER </a>";
		else
			echo "No se pudo borrar el registro <br> <a href='inscripciones.html'> VOLVER </a>";
		
	}
	
?>