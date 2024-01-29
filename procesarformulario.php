<?php

    echo "Vamos a procesar tu formulario";

    print_r($_POST);
    $nombre = $_POST ['nombre'];
    $email = $_POST ['email'];
    $nombre = $_POST ['mensaje'];
    echo "<br>";
    echo $nombre;

    echo "<br>";
    echo $email;

    echo "<br>";
    echo $mensaje;


?>