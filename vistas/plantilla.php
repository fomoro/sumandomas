<!DOCTYPE html>
<html lang="en">

<head>
    <title>SumandoMas</title>

    <!-- Meta -->
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta name="description" content="">
	  <meta name="author" content="">

	  <!-- Favicon -->
	  <link rel="shortcut icon" href="favicon.ico">

	  <!-- Web Fonts -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">

	  <!-- CSS Global Compulsory -->        
    <link rel="stylesheet" href="vistas/assets/vendor/bootstrap/bootstrap.min.css">
	  
    <!-- CSS Icon Plugins -->
    <link rel="stylesheet" href="vistas/assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vistas/assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="vistas/assets/vendor/icon-etlinefont/style.css">
    <link rel="stylesheet" href="vistas/assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="vistas/assets/vendor/icon-hs/style.css">
    
    <!-- CSS Icon Menu -->
    <link rel="stylesheet" href="vistas/assets/vendor/animate.css">
    <link rel="stylesheet" href="vistas/assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="vistas/assets/vendor/hamburgers/hamburgers.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="vistas/assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="vistas/assets/vendor/dzsparallaxer/dzsscroller/scroller.css">    
    <link rel="stylesheet" href="vistas/assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="vistas/assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="vistas/assets/vendor/fancybox/jquery.fancybox.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="vistas/assets/css/unify-core.css">
    <link rel="stylesheet" href="vistas/assets/css/unify-components.css">
    <link rel="stylesheet" href="vistas/assets/css/unify-globals.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="vistas/assets/css/custom.css">
    
</head>

<body>
    <div class="wrapper">
        
        <?php 
        
        include "modulos/comunes/menu.php";
        

        if(isset($_GET["ruta"])){

            if($_GET["ruta"] == "inicio" || $_GET["ruta"] == "nosotros" || 
            $_GET["ruta"] == "politicas" ||  
            $_GET["ruta"] == "mantenimiento" ||
            $_GET["ruta"] == "contactenos" || 
            $_GET["ruta"] == "BigData" ||
            $_GET["ruta"] == "softwareDevelopment" ||
            $_GET["ruta"] == "BPO" ||
            $_GET["ruta"] == "managedServices" || 
            $_GET["ruta"] == "conocenos") {
      
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


    <!-- JS Global Compulsory -->  
    <script src="vistas/assets/vendor/jquery/jquery.min.js"></script>
    <script src="vistas/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="vistas/assets/vendor/popper.js/popper.min.js"></script>
    <script src="vistas/assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Menu -->
    <script src="vistas/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    
    <!-- JS Implementing Plugins -->
    <script src="vistas/assets/vendor/appear.js"></script>
    <script src="vistas/assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="vistas/assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="vistas/assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>    
    <script src="vistas/assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="vistas/assets/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Menu Components-->
    <script src="vistas/assets/js/hs.core.js"></script>
    <script src="vistas/assets/js/components/hs.header.js"></script>
    <script src="vistas/assets/js/helpers/hs.hamburgers.js"></script>
    <script src="vistas/assets/js/components/hs.tabs.js"></script>
    <script src="vistas/assets/js/components/hs.go-to.js"></script>
    <script src="vistas/assets/js/components/hs.carousel.js"></script>
    <script src="vistas/assets/js/components/hs.counter.js"></script>
    <script src="vistas/assets/js/components/hs.progress-bar.js"></script>
    <script src="vistas/assets/js/components/hs.popup.js"></script>

    <!-- JS Customization -->
    <script src="vistas/assets/js/plantilla.js"></script>
    <script src="vistas/assets/js/custom.js"></script>


</body>

</html>