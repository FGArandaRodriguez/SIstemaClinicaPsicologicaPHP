<?php 
include('Backend/hms/include/config.php');



?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title>Contactenos</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" type="image/png" href="assets/img/logo.png">
	
</head>
<body>
	<nav class="full-box NavBar menu">
		<div class="full-box NavBar-logo">
			<figure class="full-box">
				<img src="assets/img/logo.png" alt="Acodjar" class="img-responsive">
			</figure>	
		</div>
		<ul class="full-box list-unstyled text-right NavBar-navigation">
			<li>
				<a href="index.html" class="text-condensed"> <span class="fa fa-home"></span> INICIO</a>
			</li>
			<li>
				<a href="servicios.html" class="text-condensed"> <span class="fa fa-tag"></span> SERVICIOS</a>
			</li>
			<li>
				<a href="contactenos.php" class="text-condensed"><span class="fa fa-phone"></span> CONTÁCTENOS</a>
			</li>
             <li>
				<a href="Backend/index.html" class="text-condensed"><span class="fa fa-user"></span> LOGIN</a>
			</li>
		</ul>
		<span class="glyphicon glyphicon-option-vertical visible-xs btn-mobile-menu" aria-hidden="true"></span>
	</nav>
	<section class="full-box section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<h2 class="text-center text-titles">Contáctenos</h2>
					<p class="text-center lead">
						Envianos tus comentarios, peticiones y mejoras en cuanto a nuestro servicio, de igual manera si deseeas asesoria personal con gusto te podemos contactar.
					</p>
				</div>
				<div class="col-xs-12 col-md-6">
					<form action="contactenos.php" method="post">
						<div class="form-group">
						    <label for="form-name">Nombre</label>
						    <input type="text" class="form-control" name="nom" id="form-name" placeholder="Nombre" required="">
						</div>
						<div class="form-group">
						    <label for="form-email">Correo electrónico</label>
						    <input type="email" class="form-control" name="email" id="form-email" placeholder="Correo electrónico" required="">
						</div>
						<div class="form-group">
						    <label for="form-msj">Mensaje</label>
						    <textarea class="form-control" id="form-msj" name="message" rows="3" placeholder="Mensaje" required=""></textarea>
						</div>
						<p class="text-center">
							<button type="submit" class="btn btn-primary">Enviar</button>
						</p>
					</form>
					<?php 
                  

					if(empty($_POST['nom']) && empty($_POST['email'])
						&& empty($_POST['message'])){	
						echo '<p class="message1">Ingresa los datos correctamente.</p>';

					}else{
						if(isset($_POST['nom']) && !empty($_POST['nom'])&& isset($_POST['email']) 
						   && !empty($_POST['email']) && isset($_POST['message']) && !empty($_POST['message'])){
                                  $nom = $_POST['nom'];
                                  $email = $_POST['email'];
                                  $message = $_POST['message'];

								$consulta="INSERT INTO contacts (nomCont,email,message) VALUES
							    ('$nom','$email','$message');";
							    
							    $hacerconsulta=mysqli_query($con, $consulta);
                    
								echo ("<p class='message2'>Se Han enviado satisfactoriamente los datos.</p>");
                                
                               // header('Location: contactenos.php');
								//<script> setTimeout(function(){location.href="contactenos.php"}, 5000);</script>
							}
							else{
								echo ("<p class='message3'>Llena los campos porfavor.</p>");	
							}
					} 
					 ?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12">
					<h2 class="text-center text-titles">Ubicación geográfica</h2>
					<div class="full-box" id="map-site">
				
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d301.5401902563295!2d-86.85124470598215!3d21.17990572775854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1528963235169" frameborder="0" style="border:0; width: 100%; height: 500px" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="full-box footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ul class="list-unstyled text-center social-icons">
						<li>
							<a href="https://www.facebook.com/" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true" style="background-color: #2B3990;"></i>
							</a>
						</li>
						<!--<li>
							<a href="#!" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true" style="background-color: #26A9E0;"></i>
							</a>
						</li>-->
						<li>
							<a href="https://www.youtube.com/" target="_blank">
								<i class="fa fa-youtube" aria-hidden="true" style="background-color: #EC1B23"></i>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/?hl=es-la" target="_blank">
								<i class="fa fa-instagram" aria-hidden="true" style="background-color: #32689C"></i>
							</a>
						</li>
						<li>
							<a href="#!" aria-hidden="true" style="background-color: #BE1D2C"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-12">
					<p class="text-center text-condensed">
						Copyright &copy; 2018 || The-Devs.
					</p>
				</div>
			</div>
		</div>
	</footer>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/eventos.js"></script>
</body>
</html>