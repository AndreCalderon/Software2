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



		<form action="testRespuesta.php" method="POST">

<br><br>
			<p id="parrafoMedico"> TEST MEDICO </p>

			<br><br>


			<div id="divisionTexto">
			<h3> Datos Personales </h3><br>
		
			Ingrese su nombre de usuario : <input type="text" name="usuario" required="true">     <br>	


			<br><h3> Datos Medicos </h3><br>

			Altura :  <input type="text" name="altura" required="true"> <br>
			Peso :  <input type="text" name="peso" required="true"> <br>
			Colesterol :  <input type="text" name="colesterol" required="true"> <br>
			Ritmo Cardiaco :  <input type="text" name="ritmoCardiaco" required="true"> <br>
			Alergico:  <input type="text" name="alergico" required="true"> <br>
			Presion:  <input type="text" name="presion" required="true"> <br>
			Depresion :  <input type="text" name="depresion" required="true"> <br>
			Estres :  <input type="text" name="estres" required="true"> <br>
			Temperatura : <input type="text" name="temperatura" required="true"> <br>

			</div>

			<div id="divisionPreguntas">

			<br><h3> Preguntas Ocacionales </h3><br>	


			¿Usted experimenta cambios de peso constantemente?  <br>
			<input type="radio" name="cambioPeso" value="SI" required="true">SI
			<input type="radio" name="cambioPeso" value="NO" required="true">NO
			<br>

			¿Sufre de fatiga en sus labores diarias?  <br>
			<input type="radio" name="fatiga" value="SI" required="true">SI
			<input type="radio" name="fatiga" value="NO" required="true">NO
			<br>

			¿Constantemente siente deshidratacion y/o sed?  <br>
			<input type="radio" name="sed" value="SI" required="true">SI
			<input type="radio" name="sed" value="NO" required="true">NO
			<br>

			¿Tiende a orinar muy frecuente o seguido?   <br>
			<input type="radio" name="orinar" value="SI" required="true">SI
			<input type="radio" name="orinar" value="NO" required="true">NO
			<br>

			¿Prensta dolor de cabeza?  <br>
			<input type="radio" name="dolorCabeza" value="SI" required="true">SI
			<input type="radio" name="dolorCabeza" value="NO" required="true">NO
			<br>

			¿Presenta escalofrios?  <br>
			<input type="radio" name="escalofrios" value="SI" required="true">SI
			<input type="radio" name="escalofrios" value="NO" required="true">NO
			<br>

			¿Presenta tos?  <br>
			<input type="radio" name="tos" value="SI" required="true">SI
			<input type="radio" name="tos" value="NO" required="true">NO
			<br>

			¿Se considera una persona nerviosa?  <br>
			<input type="radio" name="nervios" value="SI" required="true">SI
			<input type="radio" name="nervios" value="NO" required="true">NO
			<br>

			¿Experimenta zumbidos en los oidos?  <br>
			<input type="radio" name="zumbidos" value="SI" required="true">SI
			<input type="radio" name="zumbidos" value="NO" required="true">NO
			<br>

			¿Tiene problemas con vision borrosa?  <br>
			<input type="radio" name="vision" value="SI" required="true">SI
			<input type="radio" name="vision" value="NO" required="true">NO
			<br>

			¿Tiene problemas de ansiedad o ataques de panico?  <br>
			<input type="radio" name="ansiedad" value="SI" required="true">SI
			<input type="radio" name="ansiedad" value="NO" required="true">NO
			<br>


			</div>

			<br>
			<input type="submit" value="SUBMIT">
		</form>




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