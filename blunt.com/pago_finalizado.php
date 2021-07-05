<?php include_once 'includes/templates/header.php'; ?>

<body>
      <div class="contenedor">
            <h2>Pago realizado correctamente</h2>
            <?php
                $resultado = (bool) $_GET['exito'];
                $paymentId = $_GET['paymentId'];
    

                if($resultado == true) {
                      echo "El pago se realizo correctamente! ";
                      echo "El id es {$paymentId} ";
                }
            
             ?>
             <div class="imgpago">
                <img src="img/pago_correcto.png" alt="">
            </div>
        </div>
  </body>

  <?php include_once 'includes/templates/footer.php'; ?>