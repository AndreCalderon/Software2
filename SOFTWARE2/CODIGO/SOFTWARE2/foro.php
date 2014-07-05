<?php
require("config.php");
require("funciones.php");

$id = $_GET["id"];

	if (empty($id)) header("Location: index2.php");
	

$sql =	"SELECT id,autor,email,titulo,mensaje,date_format(fecha,'%d/%m/%Y %H:%i:%s') as enviado 
		FROM foro WHERE id='$id' OR identificador='$id' ORDER BY fecha ASC";
$rs = mysql_query($sql,$con);

include("cabecera_de_pagina.html");

	if (mysql_num_rows($rs) > 0) {
		include("titulo_de_mensajes.html");
		$template = implode("", file("cuerpo_de_mensaje.html"));


		while ($row = mysql_fetch_assoc($rs)) {
			$row["mensaje"] = nl2br($row["mensaje"]);
			$row["mensaje"] = parsearTags($row["mensaje"]);
			mostrarTemplate($template,$row);
			echo "<br>";
		}
	}

include("pie_de_pagina.html");
?>