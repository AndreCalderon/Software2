<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<div id="logo">
				<div id="img_logo">
					<a href="#"><img src="imagenes/logo-01.png"  /></a>
				</div>
				<p>UNIVERSIDAD DE LIMA</p>
			</div>
			<nav>
				<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="index2.php">BLOG</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div id="destacado">
		<div class="contenedor">
			<section id="descripcion">
				<h2>ServiMedic</h2>
				<p>Servicios medicos a distancia !</p>
				<a href="registrarse.php">Registrarse</a>
				<a href="login.php">Login</a> 
			</section>
			<div id="img_descrip"><img src="imagenes/laptop2.png" alt="" /></div>
		</div>
	</div>

	<div class="contenedor">



	<?php

	//VARIABLES
 	$usuario = $_POST['usuario'];
 	$altura = $_POST['altura'];
 	$peso = $_POST['peso'];
 	$colesterol = $_POST['colesterol'];
 	$ritmoCardiaco = $_POST['ritmoCardiaco'];
 	$alergico = $_POST['alergico'];
 	$presion = $_POST['presion'];
 	$depresion = $_POST['depresion'];
 	$estres = $_POST['estres'];
 	$temperatura = $_POST['temperatura'];

 	$cambioPeso = $_POST['cambioPeso'];
 	$fatiga = $_POST['fatiga'];
 	$sed = $_POST['sed'];
 	$orinar = $_POST['orinar'];
 	$dolorCabeza = $_POST['dolorCabeza'];
 	$escalofrios = $_POST['escalofrios'];
 	$tos = $_POST['tos'];
 	$nervios = $_POST['nervios'];
 	$zumbidos = $_POST['zumbidos'];
 	$vision = $_POST['vision'];
 	$ansiedad = $_POST['ansiedad'];
 	//METODOS DE DESPISTAJE


 	$resultado;

 	
 

 	// PRESION ARTERIAL
 	if ( $presion > 50  AND  $zumbidos = "SI" AND $vision ="SI"  ) {
 		$resultado = "Segun los resultados, usted presenta un cuadro de presion arterial alta ";
 	}else{
 		$resultado ="";
 	}


 	//OBESIDAD
 	$IMC = $peso/($altura*$altura);



 	if ($IMC > 30 AND $colesterol > 40) {
 		$resultado = "Usted presenta obesidad  y presenta un colesterol elevado";
 	}


 	//Glisemia
 	if ($cambioPeso =="SI" AND $fatiga =="SI" AND $sed == "SI" AND $orinar	=="SI") {
 		$resultado ="Usted presenta glisemia";
 	}


	//ESTRES
 	if ($depresion =="SI" AND $nervios =="SI" AND $ansiedad =="SI") {
 		$resultado ="Usted presenta un cuadro severo de estres";
 	}


 	//GRIPE
 	if ($dolorCabeza =="SI" AND  $escalofrios =="SI" AND $tos =="SI" AND $temperatura > 39 ) {
 		$resultado ="Usted se encuentra con gripe";
 	}





	?>


			<h1>TEST MEDICO </h1>

<br><br>
		<p id="respuestaTestFinal">	El resultado del test de despistaje medico para el usuario <?php echo $usuario; ?> concluyo en lo siguiente : <?php echo $resultado;  ?>   </p>
<br><br>

	</div>

	<section id="pre-footer">
		<div class="contenedor">
			<ul id="main-options">
				<li>
					<h4>APPLICATIONS</h4>
					<ul class="sub-options">
						<li><a href="#">APPLICATION ONE</a></li>
						<li><a href="#">APPLICATION TWO</a></li>
						<li><a href="#">APPLICATION THREE</a></li>
						<li><a href="#">APPLICATION FOUR</a></li>
						<li><a href="#">APPLICATION FIVE</a></li>
						<li><a href="#">APPLICATION SIX</a></li>
					</ul>
				</li>
				<li>
					<h4>SUPPORT</h4>
					<ul class="sub-options">
						<li><a href="#">ONLINE SUPPORT</a></li>
						<li><a href="#">TELEPHONE SALES</a></li>
						<li><a href="#">WORKSHOPS</a></li>
						<li><a href="#">CERTIFICATIONS</a></li>
						<li><a href="#">ONLINE SUPPORT</a></li>
						<li><a href="#">TELEPHONE SALES</a></li>
					</ul>
				</li>
				<li>
					<h4>MARKETS</h4>
					<ul class="sub-options">
						<li><a href="#">EDUCATION</a></li>
						<li><a href="#">SCIENCE</a></li>
						<li><a href="#">BUISNESS</a></li>
						<li><a href="#">COMMUNICATIONS</a></li>
						<li><a href="#">EDUCATION</a></li>
						<li><a href="#">SCIENCE</a></li>
					</ul>
				</li>
				<li>
					<h4>COMPANY</h4>
					<ul class="sub-options">
						<li><a href="#">ABOUT</a></li>
						<li><a href="#">CONTACT US</a></li>
						<li><a href="#">EMPLOYMENT</a></li>
						<li><a href="#">PRESS</a></li>
						<li><a href="#">ABOUT</a></li>
						<li><a href="#">CONTACT US</a></li>
					</ul>
				</li>
				<li id="contact">
					<h4>QUICK CONTACT</h4>
					<form action="#">
						<div class="form">
							<label for="name">Name:</label>
							<input type="text" name="name"/>
						</div>
						<div class="form">
							<label for="email">Email:</label>
							<input type="email" name="email"/>
						</div>
						<div class="message">
							<label for="message" id="message">Message:</label>
							<textarea name="message" cols="48" rows="4"></textarea>
						</div>
						<input type="submit" value="SEND" />
					</form>
				</li>
			</ul>
		</div>
	</section>

	<footer>
		<div class="contenedor">
			<div id="left">
				<img src="imagenes/logo-01.png" alt="" />
				<p>&#169; 2014 ULIMA</p>
				<p>DESIGNED AND DEVELOPPED BY <a href="#">SOFTWARE 2 GROUP</a></p>
			</div>
		</div>
	</footer>
</body>
</html>