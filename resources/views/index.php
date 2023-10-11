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
	<div class="footer">
	    <a href="https://www.facebook.com/kenyi.timjus.9/">Consultas</a>
		<a href="https://www.facebook.com/kenyi.timjus.9/">Terminos y condiciones</a>
		<a href="https://www.facebook.com/kenyi.timjus.9/">Priavcidad</a>
		<a href="https://www.facebook.com/kenyi.timjus.9/">Cookies</a>
		<a href="https://www.facebook.com/kenyi.timjus.9/">Quejas</a>
	</div>








	<table style="width:100%;">
	<tr>
<td colspan="6"><img src="images/fondo.jpg" style="width:100%;"></td>
</tr>

<h1 class="titulo">LUGARES TURISTICOS DE HUANUCO</h1>

<tr>
<td colspan="2" style="padding:20px 30px;">
<img src="images/img1.jpg" style="width:400px; height:267px;">
<h3><center>PLAZA DE ARMAS</center></h3>
</td>

</td>

<td colspan="2" style="padding:20px 30px;">
<img src="images/img2.jpg" style="width:400px; height:267px;">
<h3><center>CORONA DEL INCA</center></h3>
</td>

</td>


<td colspan="2" style="padding:20px 30px;">
<img src="images/img3.jpg" style="width:400px; height:267px;">
<h3><center>AGUAS TERMALES</center></h3>
</td>

</td>


</tr>


<tr>
<td colspan="2" style="padding:20px 30px;">
<img src="images/img4.jpg" style="width:400px; height:267px;">
<h3><center>PIRURU</center></h3>
</td>


<td colspan="2" style="padding:20px 30px;">
<img src="images/img5.jpg" style="width:400px; height:267px;">
<h3><center>YERUPAJA</center></h3>
</td>


<td colspan="2" style="padding:20px 30px;">
<img src="images/img6.jpg" style="width:400px; height:267px;">
<h3><center>CENTRO HUANUCO</center></h3>
</td>


</tr>


<tr style="background:blue; ">
<td colspan="6" align="center" style="padding:10px; color:#fff;">
<p>KENYI TIMOTEO JUSTO</p>
</td>
</tr>
</table>
    
</body>
</html>

<style>
h3{
  font-weight: bold; 
  color: green;
}

h2{
    color:red;
}
.titulo {
    color: blue; /* Cambia "blue" al color azul que desees */
    text-align: center; /* Para centrar el texto horizontalmente */
	font-weight: bold;
}
    *{
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
	list-style: none;
	font-family: 'Poppins', sans-serif;

}
.navbar{
	width: 100%;
	height: 80px;
	background-color: #fee;
	display: flex;
	justify-content: space-around;
	align-items: center;
	color: #000;
}
.menu ul{
	display: flex;
	align-items: center;
}
.menu ul li a{
	text-decoration: none;
	color: #000;
	padding: 5px 12px;
	letter-spacing: 2px;
	font-size: 18px;
}
.menu ul li a:hover{
	border-bottom: 4px solid #000;
	transition: 0.4s;
} 
.signup a{
	text-decoration: none;
	color: #000;
	font-size: 18px;
	font-weight: bold;
	border-radius: 12px;
	padding: 12px 30px;
	border: 2px solid #ff0000;
}
.signup a:hover{
	background-color: red;
	transition: 0.6s;
}
.body{
	width: 100%;
	height: 90vh;
	display: flex;
	justify-content: space-around;
	align-items: center;
	background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url(img1.jpg);
	background-position: center;
	background-size: cover;
}
.heading{
	width: 30%;
	text-align: center;
	color: #fff;
}
.heading h1{
	font-size: 40px;
}
.heading a{
	text-decoration: none;
	color: #000;
	font-size: 25px;
	font-weight: bold;
	border-radius: 45px;
	padding: 14px 50px;
	background-color: #fff;
}
.heading a:hover{
	letter-spacing: 3px;
	transition: 0.6s;
}
.tours{
	width: 70%;
	display: flex;
	justify-content: space-around;
}
.places{
	display: inline;
	text-align: center;
	border-radius: 12px;
}
.places h2{
	color: red;
	font-size: 35px;
	letter-spacing: 3px;
	border-radius: 1px;
	padding: 30px 30px;
	background-color: #000;
}
.places a{
	text-decoration: none;
	color: red;
	font-weight: bold;
	font-size: 18px;
	border-radius: 12px;
	padding: 12px 30px;
	background-color: #fff;
}
.places a:hover{
	background-color: #000;
	letter-spacing: 3px;
	transition: 0.6s;
}
.footer{
	width: 100%;
	height: 50px;
	display: flex;
	justify-content: space-around;
	align-items: center;
}
.footer a{
	text-decoration: none;
	color: green;
	font-size: 18px;
	font-weight: bold;
}
.footer a:hover{
	text-decoration: underline;
	transition: 0.4s;
}





a 
{
  text-decoration:none;
}

*
{
  margin:0;
 padding:0;
}
</style>