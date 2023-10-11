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
	<div class="body">
		<div class="heading">
			<h1>Viaja y recorre los lugares turisticos de Huanuco</h1>
			<br>
			<p>Considera como el mejor clima del mundo con sus luagres turisticos mejores visitados 
                y con una amplia varidad de comidas en los lugares turisticos </p>
			<br>
			<br>
			<a href="https://www.ytuqueplanes.com/destinos/huanuco/">Ver mas</a>
		</div>
		<div class="tours">
			<div class="places">
				<h2>Cotosh</h2>
				<img src="img4.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
				<br>
				<br>
				<a href="#">15% DE DESCUENTO</a>
			</div>
			<div class="places">
				<h2>Calicanto</h2>
				<img src="img5.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
				<br>
				<br>
				<a href="#">20% DE DESCUENTO</a>
			</div>
			<div class="places">
				<h2>Hco Viejo</h2>
				<img src="img6.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
				<br>
				<br>
				<a href="#">25% DE DESCUENTO</a>
			</div>
            
		</div>
	</div>




	<table style="width:100%;">
	<tr>
<td colspan="6"><img src="images/fondo.jpg" style="width:100%;"></td>
</tr>

<h1 class="titulo">LUGARES TURISTICOS DE HUANUCO</h1>

<tr>
<td colspan="2" style="padding:20px 30px;">
<img src="images/img1.jpg" style="width:400px; height:267px;">
<h3>.</h3>
</td>

</td>

<td colspan="2" style="padding:20px 30px;">
<img src="images/img2.jpg" style="width:400px; height:267px;">
<h3>.</h3>
</td>

</td>


<td colspan="2" style="padding:20px 30px;">
<img src="images/img3.jpg" style="width:400px; height:267px;">
<h3>.</h3>
</td>

</td>


</tr>

<tr>
<td colspan="6" style="padding:20px 30px;">
<h2>.</h2>
</td>
</tr>

<tr>
<td colspan="2" style="padding:20px 30px;">
<img src="images/img4.jpg" style="width:400px; height:267px;">
<h3>.</h3>
</td>


<td colspan="2" style="padding:20px 30px;">
<img src="images/img5.jpg" style="width:400px; height:267px;">
<h3>.</h3>
</td>


<td colspan="2" style="padding:20px 30px;">
<img src="images/img6.jpg" style="width:400px; height:267px;">
<h3>.</h3>
</td>


</tr>


<tr style="background:blue; ">
<td colspan="6" align="center" style="padding:10px; color:#fff;">
<p>.</p>
</td>
</tr>
</table>
    
</body>
</html>

