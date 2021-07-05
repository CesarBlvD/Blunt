<?php

if(isset($_POST['enviar'])) {
    if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['msg'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $empresa = $_POST['msg'];

        $header = 'From: ' . $mail . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";

        $msg = "Este mensaje fue enviado por " . $nombre . ",\r\n";
        $msg .= "Su e-mail es: " . $mail . " \r\n";
        $msg .= "Mensaje: " . $_POST['msg'] . " \r\n";
        $msg .= "Enviado el " . date('d/m/Y', time());

        $para = 'bluntstw@gmail.com';
        $asunto = $_POST['asunto'];

        mail($para, $asunto, utf8_decode($msg), $header);

        header("Location:index.php");

            }
}