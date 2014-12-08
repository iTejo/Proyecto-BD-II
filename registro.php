 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reservas disponibles</title>
 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/starter-template.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/jquery-ui.css"> 
   <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.ketchup.all.min.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery-validate.js"></script>
 
 
 
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/logo.png" width="50" height="30" alt=""></a>
          <a class="navbar-brand" href="#">Agencia de viajes</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index1.php">Inicio</a></li>
 
            <li><a href="ayuda.php">Ayuda</a></li>
          </ul>
          
           <ul class="nav navbar-nav navbar-right">
              <li><a href="">Iniciar sesion</a></li>
              <li><a href="">Crear nuevo usuario</a></li>
              <li class="active" ><a href="scripts/salir.php">Cerrar sesión</a></li>
           
            </ul>
            
        </div><!--/.nav-collapse -->
      </div>
    </div>
  <div class="cabecera">
    <img class="logo" src="img/logo.png" width="250" height="130" alt="">
 
  </div>
  <div class="separacion"></div>
      <div class="jumbotron">    
      <form class="form-signin" role="form" action="scripts/usuario.php" method="POST" >
        <h2 class="form-signin-heading">Por favor ingrese los datos</h2>
        <input type="text" class="form-control" placeholder="Nombres" name="nombres" required autofocus>
        <input type="text" class="form-control" placeholder="Apellido paterno" name="app" required autofocus>
        <input type="text" class="form-control" placeholder="Apellido materno" name="apm" required autofocus>
        <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
        <input type="password" class="form-control" placeholder="Password" name="clave" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Crear nuevo usuario</button>
      </form>
    </div>
</body>
</html>