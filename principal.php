<?php 
  include('scripts/conexion.php');

  $consulta = "SELECT * FROM ciudad_pais";

  $resultado = sqlsrv_query($conexion,$consulta);




 ?>

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
  <script>
      $(function() {
        
        var availableTags = [
          <?php 
            while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) 
                  echo "'".$linea['Nombre de Ciudad']."',";
          ?>
        ];
        $( "#tags1" ).autocomplete({
          source: availableTags
        });
      });


  </script>
 
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
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"><b class="caret"></b></a>
              <ul class="dropdown-menu">
              </ul>
              </li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<div class="cabecera">
		<img class="logo" src="img/logo.png" width="250" height="130" alt="">
 
  </div>
	<div class="separacion"></div>
  <div class="cuerpo"> 
  <div class="buscar">
    <h1>Buscar vuelos disponibles</h1> 
    <div class="buscador">
    <form action="busqueda_vuelo.php" method="POST">
      <div class="datos">
        <label for="">Ciudad de origen:</label><br>
        <label for="">Ciudad de destino:</label><br>
        <label for="">Fecha de partida :</label>
      </div>
      <div class="datos_vuelo">
        <input id="tags1" type="text" name="ciudado">  <br>
        <input id="tags1" type="text" name="ciudadd"><br>
        <input type="date" name="fecha">
      </div>
      <input class="btn btn-lg btn-primary " type="submit" value="Buscar">
     </form>
     </div>
     </div>
     <div class="destinos">
      <div id="destinos-1">
       <img src="img/bolivia.jpg" alt="">
       <img src="img/brasil.jpg" alt="">
      </div>
      <div id="destinos-2">
       <img src="img/ecuador.jpg" alt="">
       <img src="img/brasil.jpg" alt="">
       </div>
     </div>

  </div>
	
</body>
<footer>Derechos reservados - 2014</footer>
</html>