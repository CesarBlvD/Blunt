<?php include_once 'includes/templates/header.php'; ?>


<main class="contenedor">

        <?php 
                try {
                require_once('includes/funciones/bd_conexion.php');
                $sql = "SELECT * FROM productos WHERE codigo_producto=".$_GET["p"].";";
                $resultado = $conn->query($sql);
            } catch (Exception $e) {
                $error = $e->getMessage();
            }
        ?>
    <?php while($productos = $resultado->fetch_assoc() ) { ?>
        <div class="contenedor-informacion">
            <div>
                <img src="img/<?php echo $productos['img_producto']?>" alt="Imagen Producto" class="modelo">
                <div class="thumbs">
                    <a href="img/<?php echo $productos['thumb5']?>" data-lightbox="thumbs">
                        <img src="img/<?php echo $productos['thumb1']?>">
                    </a>
                    <a href="img/<?php echo $productos['thumb6']?>" data-lightbox="thumbs">
                        <img src="img/<?php echo $productos['thumb2']?>">
                    </a>
                    <a href="img/<?php echo $productos['thumb7']?>" data-lightbox="thumbs">
                        <img src="img/<?php echo $productos['thumb3']?>">
                    </a>
                    <a href="img/<?php echo $productos['thumb8']?>" data-lightbox="thumbs">
                        <img src="img/<?php echo $productos['thumb4']?>">
                    </a>
                </div>
            </div>
            <div class="info-modelo">
                <form class="formulario-pedido" action="pagar.php" method="post">
                    <input type="hidden" name="Codigo" value="<?php echo $productos['codigo_producto']?>">

                    <h3 type="hidden"><?php echo $productos['nombre_producto']?></h3>
                    <input type="hidden" name="Nombre" value="<?php echo $productos['nombre_producto']?>">
                    
                    <p> $<?php echo $productos['precio_producto']?> </p>
                    <input type="hidden" name="Precio" value="<?php echo $productos['precio_producto']?>">
                
                    <select class="talla campo" name="Talla" value="-Any-">
                            <option value="C">Chica</option>
                            <option value="M">Mediana</option>
                            <option value="G">Grande</option>
                    </select>


                    <input type="number" name="Cantidad" min="1" class="cantidad campo" placeholder="Cantidad" required>
                    
                    
                    <input type="submit" value="Comprar" name="submit" class="btnm1 boton float-right">
                    
                    
                    <div class="btnm2">
                        <a href="probador.php" class="boton float-right">Pruébatela</a>
                    </div>
                </form>
                <h2></h2>
                <div class="descripcion">
                    <h3>DESCRIPCIÓN</h3>
                    <ul>
                        <li>Playera manga corta</li>
                        <li>Estampado en serigrafía sin tacto</li>
                        <li>100% algodón</li>
                        <li>Hecho en México</li>
                    </ul>
                </div>
                <h2></h2>
                <div class="mas-info">
                    <p><i class="fas fa-truck"></i> Envío gratis a partir de $450</p>
                    <a href="contacto.php"><i class="fas fa-question-circle"></i>      ¿Dudas? Contáctanos.</a>
                    <h2></h2>
                </div>

            </div>
        </div>
    <?php } ?>

    <?php
        $conn->close();
    ?>
</main>


<?php include_once 'includes/templates/footer.php'; ?>