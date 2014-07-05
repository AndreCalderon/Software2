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
				<a href="registrarse.php">Registrarse</a>
				<a href="login.php">Login</a> 
			</section>
			<div id="img_descrip"><img src="imagenes/laptop2.png" alt="" /></div>
		</div>
	</div>

	<div class="contenedor">
		<section id="primario">
			<h3>Registro de nuevo paciente</h3>

			<form action="" method="POST">


				<div id="log">
				<label>Usuario</label>
				<input type="text" name="usuario" required="true">

				<label>Password</label>
				<input  type="password" name="password" required="true">

				</div>

				<section id="cuerpo">			
					<div id="cuerpo1">
						<div><label>Nombre</label>
						<input type="text" name="nombre" required="true"></div>

						<div><label>Apellido</label>
						<input type="text" name="apellido" required="true">
						</div>

						<div><label>Edad</label>
						<input type="text" name="edad">
						</div>

						<div><label>Sexo</label>
						<input type="radio" name="sexo" value="M" required="true">M
						<input type="radio" name="sexo" value="F" required="true">F
						</div>
					</div>

					<div id="cuerpo2">
						<div><label>Pais</label>
						<input type="text" name="pais" required="true"></div>
						
						<div><label>Departamento</label>
						<input type="text" name="departamento" required="true"></div>

						<div><label>DNI</label>
						<input type="text" name="dni" required="true"></div>

						<div><label>Telefono</label>
						<input type="text" name="telefono" required="true"></div>
					</div>
				</section>	
			
		
				<input type="submit" value="Agregar">
			
		</form>

			<?php
				$sql_insert = "insert into usuario(usuario,password,nombre,apellido,edad,sexo,pais,departamento,dni,telefono) 
								VALUES('$_POST[usuario]','$_POST[password]','$_POST[nombre]','$_POST[apellido]','$_POST[edad]','$_POST[sexo]','$_POST[pais]',
									   '$_POST[departamento]','$_POST[dni]','$_POST[telefono]'  )";  
				$result_insert = mysql_query($sql_insert,$conn) ;
			?>
			
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