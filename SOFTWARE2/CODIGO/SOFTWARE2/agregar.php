<?php
require("config.php");

$autor = $_POST["autor"];
$email = $_POST["email"];
$titulo = $_POST["titulo"];
$mensaje = $_POST["mensaje"];
$ident = $_POST["identificador"];

	if (empty($autor)) $autor = "Anonimo";
	if (empty($titulo)) $titulo = "Sin Titulo";
	

$mensaje = htmlentities($mensaje);

$sql =	"INSERT INTO foro(autor,email,titulo,mensaje,identificador,fecha,ult_respuesta)
		VALUES('$autor','$email','$titulo','$mensaje','$ident',NOW(),NOW() )";
$rs = mysql_query($sql,$con); 
$ult_id = mysql_insert_id($con);

	if (!empty($ident)) {
		$sql = "UPDATE foro SET respuestas=respuestas+1,ult_respuesta=NOW()	WHERE id='$ident' ";
		$rs = mysql_query($sql,$con);

		header("Location: foro.php?id=$ident#$ult_id");
		exit();
	}

	header("Location : index2.php");	
	
?>