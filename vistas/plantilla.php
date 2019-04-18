<!DOCTYPE html>
<html lang="en">

<head>
    <title>Asisvert</title>

    <!-- Meta -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="vistas/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vistas/assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="vistas/assets/css/headers/header-v1.css">
	<link rel="stylesheet" href="vistas/assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="vistas/assets/plugins/animate.css">
	<link rel="stylesheet" href="vistas/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="vistas/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vistas/assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="vistas/assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">
    

	<link rel="stylesheet" href="vistas/assets/plugins/parallax-slider/css/parallax-slider.css">
	<link rel="stylesheet" href="vistas/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">

	<link rel="stylesheet" href="vistas/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="vistas/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    
    
	<!-- CSS Page Style -->
	<link rel="stylesheet" href="vistas/assets/css/pages/page_about.css">	
	<link rel="stylesheet" href="vistas/assets/css/pages/page_contact.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="vistas/assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="vistas/assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
    <link rel="stylesheet" href="vistas/assets/css/custom.css">
    
    <!-- JS Global Compulsory -->
    <script type="text/javascript" src="vistas/assets/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="vistas/assets/plugins/jquery/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="vistas/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="vistas/assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="vistas/assets/plugins/smoothScroll.js"></script>               

</head>

<body>
    <div class="wrapper">
        
        <?php 
        
        include "modulos/comunes/menu.php";
        

        if(isset($_GET["ruta"])){

            if($_GET["ruta"] == "inicio" || $_GET["ruta"] == "nosotros" || $_GET["ruta"] == "politicas" ||  $_GET["ruta"] == "mantenimiento" || $_GET["ruta"] == "conocenos") {
      
              include "modulos/".$_GET["ruta"].".php";
      
            }else{
      
              include "modulos/404.php";    
            }      
          }else{
      
            include "modulos/inicio.php";      
          }

          include "modulos/comunes/footer.php";
        ?>
    </div>

    <script type="text/javascript" src="vistas/assets/plugins/jquery.parallax.js"></script>
    <script type="text/javascript" src="vistas/assets/plugins/parallax-slider/js/modernizr.js"></script>
    <script type="text/javascript" src="vistas/assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
    <script type="text/javascript" src="vistas/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="vistas/assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script type="text/javascript" src="vistas/assets/plugins/counter/waypoints.min.js"></script>
	<script type="text/javascript" src="vistas/assets/plugins/counter/jquery.counterup.min.js"></script>
	

    
    <!-- JS Page Level -->
    <script type="text/javascript" src="vistas/assets/js/app.js"></script>
    <script type="text/javascript" src="vistas/assets/js/forms/contact.js"></script>
    <script type="text/javascript" src="vistas/assets/js/pages/page_contacts.js"></script>
    <script type="text/javascript" src="vistas/assets/js/plugins/owl-carousel.js"></script>
    <script type="text/javascript" src="vistas/assets/js/plugins/style-switcher.js"></script>
    <script type="text/javascript" src="vistas/assets/js/plugins/parallax-slider.js"></script>
    <script type="text/javascript" src="vistas/assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>    
    
    
    <!-- JS Customization -->
    <script type="text/javascript" src="vistas/assets/js/custom.js"></script>

</body>

</html>