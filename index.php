<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Iniciar sesión</title>
</head>
<body>
<style>
   	div .alert{
    	text-align: center;
    }
   </style>
<div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        DeliverX
                    </div>
                    <div  class="alert alert-success  fade show" role="alert">
  <strong>Hola!</strong> Recuerda que este servicio solo esta disponible dentro de la UTZAC.
</div>
    <form id="loginform" class="" action="login.php" method="post">
        <input type="text" id="username" name="username" placeholder="Usuario"  required>
        <input type="password" id="password" name="password" placeholder="Contraseña"  required>
        <button type="submit" value="Iniciar sesión" name="login">Login</button>
    </form>
    <div class="pie-form">
                       <!-- <a href="#">¿Perdiste tu contraseña?</a> -->
                        <a href="nuevo_usuario.php">¿No tienes Cuenta? Registrate</a>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
