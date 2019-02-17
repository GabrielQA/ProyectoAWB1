<?php session_start();
require "Clase_Canal.php";
$cat = new Clase_Canal("variable","variableM");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <title>Administrador</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link rel="stylesheet" href="css/estiloCanal.css">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span>Gabo</span>QA</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Inicio</a></li>
          <li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
        </ul>
    </div>
  </header>
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>Administrador <?php echo $_SESSION['usuario'];
      if( $_SESSION['usuario']!='Gabriel'){
        header("Location:index.php");      
      } ?></h1>
      <h2>Bienvenido</h2>
      <a href="#get-started" class="btn-get-started scrollto">Vista de Canales</a>
      <div class="btns">
       <!-- <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a> -->
      </div>
    </div>
  </section>
  <section id="get-started" class="padd-section text-center wow fadeInUp">
    <div class="container">
      <div class="section-title text-center">
        <h2>Area Administrador</h2>               
<form action="Acciones.php" method="post">
<div class="container">  
   </div>
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <thead>
      <tr>
       <div align="right" style="margin-bottom:5px;">
       <li><a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><button type="button" name="add_button" id="add_button" class="btn btn-success btn-xs">Ingresar Canal</button></a>
					<ul class="dropdown-menu">
						<div style="width:200px 200px;">
							<div class="panel panel-primary">
              <h5><a href="" class="scrollto"><span>Nombre</span> del</a><span> Canal</span></h5>
                  <input type="text" class="form-control" id="nombre" name="nombre">
                  <a href="" style="color:white; list-style:none;"></a><input  href="" type="submit" onclick="" class="btn btn-success" style="float:right;" id="Btnadd" value="Agregar">
                </div>
							</div>
						</div>
					</ul>
        </li>
     </thead>
    </table>
   </div>
   <tbody>
    </tr>
  </tbody>
   </form>
   <h2>Canales</h2>
   <?php echo $cat->Ver_Canal();?>
      </div>
    </div>
      </div>
    </div>
  </section>
  </footer>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/modal-video/js/modal-video.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
