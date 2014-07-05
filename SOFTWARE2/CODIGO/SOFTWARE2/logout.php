<?php
session_start();
session_destroy();
unset($_SESSION["usuario"]);
unset($_SESSION["password"]);
session_unset();

 header("Location: index.html");

?>