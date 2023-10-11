<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tituloo.css">
</head>
<body>

    <div class="container">
        
    <center><h2><b>REGISTRES PARA VER LUGARES TURISTICOS DE HUANUCO</b></h1></center>
    
        <form action="welcome.blade.php" method="post">
            <div class="form-group">
            <b>Nombre</b>
                <input type="text" class="form-control" name="fullname" placeholder="Nombre:">
            </div>
            <div class="form-group">
            <b>Correo</b>
                <input type="emamil" class="form-control" name="email" placeholder="Correo:">
            </div>
            <div class="form-group">
            <b>Contraseña</b>
                <input type="password" class="form-control" name="password" placeholder="Contraseña:">
            </div>
            <div class="form-group">
            <b>Repita contraseña</b>
                <input type="password" class="form-control" name="repeat_password" placeholder="Repita contraseña:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Registarse" name="submit">
                
            </div>
        </form>
        <div>
        <div><p><i>Ya registrada</i> <a href="login.php">Inicia Sesion Aqui</a></p></div>
      </div>
    </div>
</body>
</html>

