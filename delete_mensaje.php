<?php
	include "conexion.php";
	if($conn) {
		if($conn->query("DELETE FROM mensajes WHERE cod=".$_REQUEST["cd"]))
			echo "Mensaje fue borrado <br> <a href='contacto.html'> VOLVER </a>";
		else
			echo "No se pudo borrar el mensaje";
		
	}
	
?>