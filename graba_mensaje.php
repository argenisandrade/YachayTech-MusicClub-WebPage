<?php
	include "conexion.php";
	if($conn){
		$SQL = "INSERT INTO mensajes(nom, apel, email, msg) VALUES ";
		$SQL = $SQL."('".$_REQUEST["nm"]."', ";
		$SQL = $SQL."'".$_REQUEST["ap"]."', ";
		$SQL = $SQL."'".$_REQUEST["em"]."', ";
		$SQL = $SQL."'".$_REQUEST["ms"]."') ";

		if($conn->query($SQL))
			echo "Mensaje Enviado <br> <a href='contacto.html'> VOLVER </a>";
		else
			echo "No se pudo enviar el mensaje";
		
	}
?>