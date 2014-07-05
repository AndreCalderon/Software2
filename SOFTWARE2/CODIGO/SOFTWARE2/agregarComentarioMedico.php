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

				
							
				echo  'Datos del historial medico del paciente : ' .  $row2['nombre'] . ' ' . $row2['apellido'];	
			
								
				$idHistorial = $_POST['idHistorialAC'];

				$sql = "SELECT enfermedad,tratamiento,detalle
						from historial
						where idHistorial = '$idHistorial';
						";
				$result = mysql_query($sql,$conn) or die (mysql_error());



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


				echo "<br><br> <h3> COMENTARIO MEDICO </h3>";


?>

	<form action="agregarComentarioMedicoReal.php" method="POST">
				
		
<?php
	echo  "<input type='hidden' value='$idHistorial'  name='idHistorial'>   "
?>
		Sintoma : <input type='text' name='sintomas'>  <br>
		Tipo Enfermedad : <input type='text' name='tipoEnfermedad'>  <br>
		Nombre Enfermedad : <input type='text' name='nombreEnfermedad'>  <br><br>

		APRECIACION: <br>
			<textarea name='comentarioMedico' rows='10' cols='50' >Enter text here...</textarea>
			<input type='submit' value='AGREGAR'>
	</form>






			

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