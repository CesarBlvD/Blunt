<?php include_once 'includes/templates/header.php'; ?>
    <!--Contenido principal-->
    <section class="modelos contenedor seccion">
        <h2>Destacados para Hombre</h2>

        <?php 
            try {
            require_once('includes/funciones/bd_conexion.php');
            $sql = "SELECT * FROM productos WHERE codigo_producto<='3';";
            $resultado = $conn->query($sql);
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
        ?>
        
        <div class="modelos-dest">

            <?php while($productos = $resultado->fetch_assoc() ) { ?>
                <div class="modelo">
                    <a href="modelo.php?p=<?php echo $productos['codigo_producto']?>">
                        <img src="img/<?php echo $productos['img_producto']?>" alt="Imagen Modelo">
                        <p class="nombre"><?php echo $productos['nombre_producto']?></p>
                    </a>
                </div>
            <?php } ?>
                <div class="btn">
                    <a href="hombre.php" class="boton float-right">Ver todo</a>
                </div>
        </div>
    </section>


    <section class="modelos contenedor seccion">
        <h2>Destacados para Mujer</h2>

        <?php 
            try {
            $sql = "SELECT * FROM productos WHERE codigo_producto BETWEEN '7' AND '9';";
            $resultado = $conn->query($sql);
        } catch (Exception $e) {
            $error = $e->getMessage();
            echo $error;
        }
        ?>
        
        <div class="modelos-dest">

            <?php while($productos = $resultado->fetch_array(MYSQLI_ASSOC) ) { ?>
                <div class="modelo">
                    <a href="modelo.php?p=<?php echo $productos['codigo_producto']?>">
                        <img src="img/<?php echo $productos['img_producto']?>" alt="Imagen Modelo">
                        <p class="nombre"><?php echo $productos['nombre_producto']?></p>
                    </a>
                </div>
            <?php } ?>
                <div class="btn">
                    <a href="mujer.php" class="boton float-right">Ver todo</a>
                </div>

            <?php
                $conn->close();
            ?>
        </div>
    </section>

    <div class="probador-virtual parallax">
        <div class="contenido contenedor">
            <p>Pruébate tu ropa con nuestro probador virtual</p>
            <h3>VirtualFR</h3>
            <a href="probador.php" class="boton transparente">Probador →</a>
        </div>
    </div>

<?php include_once 'includes/templates/footer.php'; ?>
