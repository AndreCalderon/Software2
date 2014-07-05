<?php
require("config.php");
include("cabecera_de_pagina.html");
echo "<p align='center'> Foro Actualizado </p>";

$autor = $_POST["autor"];
$email = $_POST["email"];
$titulo = $_POST["titulo"];
$mensaje = $_POST["mensaje"];


	if (empty($autor)) $autor = "Anonimo";
	if (empty($titulo)) $titulo = "Sin Titulo";
	

$mensaje = htmlentities($mensaje);

$sql =	"INSERT INTO foro(autor,email,titulo,mensaje,identificador,fecha,ult_respuesta)
		VALUES('$autor','$email','$titulo','$mensaje',0,NOW(),NOW() )";
$rs = mysql_query($sql,$con); 
$ult_id = mysql_insert_id($con);




?>