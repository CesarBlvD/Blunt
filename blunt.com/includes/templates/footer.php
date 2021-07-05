<footer class="site-footer">
        <div class="contenedor clearfix">
            <div class="footer-productos">
                <h3>Nuestros <span>Productos</span></h3>
                <a href="hombre.php">Hombre</a>
                <a href="mujer.php">Mujer</a>
            </div>
            <div class="footer-info">
                <h3>Sobre <span>Nosotros</span></h3>
                <!--<a href="#">Sobre St. Blunt</a>
                <a href="#">Sobre VirtualFR</a>-->
                <a href="contacto.php">Contáctanos</a>
            </div>
            <div class="menu">
                <h3>Redes <span>Sociales</span></h3>
                <nav class="redes-sociales">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://twitter.com/?lang=es" target="_blank"><i class="fab fa-twitter-square"></i></a>
                    <a href="https://www.instagram.com/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i></i></a>
                </nav>
            </div>
        </div>

        <p class="copyright">
            Todos los derechos reservados St. Blunt 2020©
        </p>
    </footer>



    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <?php 
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace(".php", "", $archivo);
        if($pagina == 'modelo') {
            echo '<script src="js/lightbox.js"></script>';
        }
    ?>
    

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>