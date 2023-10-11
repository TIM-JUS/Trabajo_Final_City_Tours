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
    <title>Iniciar sesion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>
<body>

      <form action="login.php" method="post">
        <div class="form-group">
            <b>Ingrese su correo</b>
            <input type="email" placeholder="Ingrese su correo:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <b>Contraseña</b>
            <input type="password" placeholder="Ingrese su contraseña:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Acceso" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p><i>Clic Aqui-</i> <a href="welcome.blade.php">Registrese Aqui</a></p></div>
    </div>
</body>
</html>

