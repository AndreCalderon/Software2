<?php
require("config.php");
require("funciones.php");
include("cabecera_de_pagina.html");

$sql = "SELECT id,autor,titulo,fecha,respuestas,ult_respuesta
		FROM foro WHERE identificador=0
		ORDER BY ult_respuesta DESC";
$rs = mysql_query($sql,$con);

	if (mysql_num_rows($rs) > 0) {

		$template = implode("", file("temas.html"));
		include("cabecera_de_registros.html");

		while ($row = mysql_fetch_assoc($rs)) {
			mostrarTemplate($template,$row);
			echo "<br>";
		}
	}

	include("pie_de_pagina.html");
?>