<?php
	include "conexion.php";
	if($conn){
		$SQL = "UPDATE inscritos SET ";
		$SQL = $SQL."nom='".$_REQUEST["nm"]."', ";
		$SQL = $SQL."apel='".$_REQUEST["ap"]."', ";
		$SQL = $SQL."email='".$_REQUEST["em"]."', ";
		$SQL = $SQL."profe='".$_REQUEST["pr"]."' ";
		$SQL = $SQL."WHERE cod=".$_REQUEST["cd"];
		
		if($conn->query($SQL))
			echo "Registro fue actualizado <br> <a href='inscripciones.html'> VOLVER </a>";
		else
			echo "No se pudo actualizar el registro <br> <a href='inscripciones.html'> VOLVER </a>";
	}
?>