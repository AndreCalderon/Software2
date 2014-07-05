<?php
	$conn = mysql_connect("localhost:1433","root","") or die (mysql_error());
	mysql_select_db("mydb",$conn);
?>