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
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"Todos los campos son obligatorios");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "El correo no es válido");
           }
           if (strlen($password)<2) {
            array_push($errors,"La contraseña debe tener al menos 3 caracteres");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Las contraseñas no coiciden");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"El Email ya existe!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>Estás registrado con éxito.</div>";
            }else{
                die("Algo salió mal");
            }
           }
          

        }
        ?>
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

<style>
body{
    padding:50px;
}
.container{
    max-width: 600px;
    margin:0 auto;
    padding:50px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.form-group{
    margin-bottom:30px;
}

h2{
    color: red;
}
i{
    color:green;
}
</style>