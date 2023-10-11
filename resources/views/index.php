<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?> 

<!DOCTYPE html>         
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Kenyi Tim</title>
    
</head>
<body>
      Vienvenido usuario timoteo
      <br><b>Haga click en "SALIR" para cerrar sesion</b><br>
      <a href="logout.php" class="btn btn-warning">SALIR</a><br>

<center><h2><b>"LUGARES TURISTICOS DE HUANUCOO"</b></h2></center>

<div class="navbar">
		<div class="logo">
			<h1>Visitar</h1>
		</div>
		<div class="menu">
			<ul>
				<li><a href="#">Incio</a></li>
				<li><a href="#">Servicio</a></li>
				<li><a href="#">Lugares</a></li>
				<li><a href="#">Descuentos</a></li>
				<li><a href="#">Contacto</a></li>
				<li><a href="#">Reserva</a></li>
			</ul>
		</div>
		<div class="signup">
			
		</div>
	</div>

    
</body>
</html>

