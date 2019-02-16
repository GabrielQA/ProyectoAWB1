
<?php
include "Clase_Usuarios.php";
$variable = $_POST["nombre"];  
$variableM = $_POST["id"];
$Usuario = $_POST["Usuario"]; 
$clase = new Clase_Usuarios($variable,$variableM,$Usuario);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body id="top">
    <header class="s-header">
        <nav class="header-nav">
            <div class="header-nav__content">
                <ul class="header-nav__list">
                <li><a href="index.php">Inicio</a></li>
                    <li><a href="Mostrar_Usu.php?Canal='<?php // echo $variableM;?>'">Integrantes del Canal</a></li>
                    <li><?php  $clase -> MostrarFN();?></li>
                    <li><?php //$clase->Unir_Usuario_Canal();?></li>

                    <li>
                </ul>    
            </div> 
        </nav>  
        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>
    </header> 
    <section id="contact" class="s-contact">
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Bienvenido al canal</h3>
                <h1 class="display-2 display-2--light"></h1> <?php echo $variable;?></h1>
            </div>
        </div>
        <div class="row contact-content" data-aos="fade-up">
            <div class="contact-primary">
                <h3 class="h6">Chatea en linea</h3>
                <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                    <fieldset>
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Comentario" value="" class="full-width">
                    <div class="form-field">
                        <button class="full-width btn--primary">Añadir</button>
                        </div>
                    </div>
                    </fieldset>
                </form>
    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main2.js"></script>

</body>
</html>
