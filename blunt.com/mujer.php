<?php include_once 'includes/templates/header.php'; ?>
    <section class="contenedor seccion">

        <h2>Modelos para mujer</h2>
        <?php 
            try {
            require_once('includes/funciones/bd_conexion.php');
            $sql = "SELECT * FROM productos WHERE Id_genero='2';";
            $resultado = $conn->query($sql);
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
        ?>
        <div class="lista-modelos">

            <?php while($productos = $resultado->fetch_assoc() ) { ?>
                <div>
                    <div class="modelo">
                        <a href="modelo.php?p=<?php echo $productos['codigo_producto']?>">
                            <img src="img/<?php echo $productos['img_producto']?>" alt="Imagen Modelo">
                            <p class="nombre"><?php echo $productos['nombre_producto']?></p>
                        </a>
                    </div>
                    <div class="contenido-modelo">
                        <p class="precio">$<?php echo $productos['precio_producto']?></p>
                        <div class="botones">
                            <a href="probador.php" class="fr">¡Pruébatela!</a>
                            <!--<a href="#" title="Añadir a lista de deseos"><i class="far fa-heart"></i></a>-->
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php
                $conn->close();
            ?>
        
        </div>
    </section>

<?php include_once 'includes/templates/footer.php'; ?>