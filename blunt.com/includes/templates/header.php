
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <?php 
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace(".php", "", $archivo);
        if($pagina == 'modelo') {
            echo '<link rel="stylesheet" href="css/lightbox.css">';
        }
    ?>

    <meta name="theme-color" content="#fafafa">
</head>

<body>
    <header class="site-header">
        <div class="hero">
            <div class="contenido-header">
            <nav class="redes-sociales">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://twitter.com/?lang=es" target="_blank"><i class="fab fa-twitter-square"></i></a>
                    <a href="https://www.instagram.com/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i></i></a>
                </nav>
                <div class="info">
                    <h1 class="nombre-sitio"><span>St. Blunt </span>Streetwear</h1>
                    <p class="slogan">"Slogan"</p>
                </div>
            </div>
        </div>

    </header>

    <div class="barra ">
        <div class="contenedor clearfix">
            <div class="logo">
                <a href="index.php">
                    <img src="img/logo.png" alt="">
                </a>
            </div>

            <div class="menu-movil">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav class="navegacion-principal clearfix">
                <a href="hombre.php">Hombre</a>
                <a href="mujer.php">Mujer</a>
                <a href="probador.php" id="probador">Probador</a>
                <a href="carrito.php"><i class="fas fa-shopping-cart user-hide"></i></a>
                <!--<a href="inicio.php" class="user-hide" title="Inicia sesión o registrate"><i class="fas fa-user"></i></a>
                <a href="inicio.php" title="Inicia sesión o registrate">Iniciar sesión </a>-->
            </nav>
        </div>
    </div>