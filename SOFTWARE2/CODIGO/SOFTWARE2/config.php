<?php
$bd_host = "localhost:1433";
$bd_usuario ="root";
$bd_password ="";
$bd_base ="mydb";
$con = mysql_connect($bd_host,$bd_usuario,$bd_password);
mysql_select_db($bd_base,$con);
?>