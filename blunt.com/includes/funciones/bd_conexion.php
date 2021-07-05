<?php 
    $conn = new mysqli('localhost', 'root', '', 'stblunt');

    if (mysqli_connect_errno()) {
        printf("Falló la conexión failed: %s\n", $conn->connect_error);
        exit();
    }
?>
