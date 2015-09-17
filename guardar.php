<html>
<head>
  <meta charset="UTF-8">
  <title>Transporte de carga inmediata y efic</title>
  <link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <!-- Primeras 12 columnas -->
      <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">T.C.I.E</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
            
                <li><a href="mision.html">Mision</a></li>
                 <li><a href="vision.html">Vision</a></li>
                  <li><a href="objetivos.html">Objetivos</a></li>
                  <li><a href="sid.html">SID</a></li>
              </ul>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        
      </div>       <!-- termina 12 columnas -->


      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">Registro de conductores</div>
          <div class="panel-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
      </div>



    </div>
  </div>
</body>
</html>

<?php
	
	$cedula=$_POST["ced"];
	$nombre=$_POST["nom"];
	$direccion=$_POST["dir"];
	$db = mysql_connect("localhost", "root","");
	mysql_select_db("sid",$db);
	$sql ="insert into conductores value('$cedula','$nombre','$direccion')";
	$result = mysql_query($sql);
	
?>

<h1>Conductor Creado correctamente</h1>

<a href="sid.html">Regresar</a>