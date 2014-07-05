<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include "connectionDB.php";
	error_reporting(0); ?>
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
					<li><a href="#">BLOG</a></li>
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
				<a href="logout.php">Salir</a>				
			</section>
			<div id="img_descrip"><img src="imagenes/laptop2.png" alt="" /></div>
		</div>
	</div>

	<div class="contenedor">
		<section id="primario">
			<?php
include "connectionDB.php";
error_reporting(0);
				$dni= $_POST['dniPaciente'];

				$sql = "SELECT nombre,apellido,pais,departamento,dni,telefono
						from paciente
						where dni = '$dni';
						";

				$result = mysql_query($sql,$conn) or die (mysql_error());

				$sql2 = mysql_query("SELECT * FROM paciente where dni='$dni';  " ); 
				$row2 = mysql_fetch_array($sql2);

				$idHistorial = $row2['HISTORIAL_idHISTORIAL'];
				$NOM_1 = $row2['nombre'];
				$APP_1 = $row2['apellido'];

				echo  'Datos del paciente : ' .  $NOM_1 . ' ' . $APP_1 ;	

				echo "<form action='historialMedico.php' method='POST'>
						<input type='submit' value='HISTORIA_MEDICA' name='submit' >
						<input type='hidden' value='$idHistorial'  name='idHistorial'>
						";



				echo "</form>";
				echo "<br><br>";
				echo "<table border='1'>";

					echo "<tr>";
						while ($field = mysql_fetch_field($result)) {
							echo "<th> $field->name";
						}
					echo "</tr>";

					
						while ($row = mysql_fetch_assoc($result)) {
							echo "<tr>";
								foreach ($row as $col => $value) {
									echo "<td>$value</td>";
								}
							echo "</tr>";
						}
				echo "</table>";

?>


				<br><br>

			
			
		</section>

		
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