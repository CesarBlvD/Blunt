<?php include_once 'includes/templates/header.php'; ?>

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw300 centrar-texto">Llena el formulario de contacto</h2>

        <form action="" method="post">
            <fieldset>
                <legend>Información personal</legend>

                <label class="top" for="nombre">Nombre:</label>
                <input name="nombre" type="text" id="nombre" placeholder="Tu nombre" required="">

                <label for="email">E-mail:</label>
                <input name="email" type="email" id="email" placeholder="Tu Correo Electrónico" required="">

                <label for="asunto">Asunto:</label>
                <input name="asunto" type="text" id="asunto" placeholder="Asunto del correo" required="">

                <label for="mensaje">Mensaje:</label>
                <textarea name="msg" id="mensaje" required=""></textarea>

            </fieldset>

            <input type="submit" value="Enviar" class="boton" name="enviar">

        </form>
        <?php
            include("correo.php");
        ?>
    </main>

<?php include_once 'includes/templates/footer.php'; ?>