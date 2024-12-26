<?php
    $server = "localhost";
    $user = "Felipe";
    $pass = "0BjuqTttHeyQXnc(";
    $bd = "empresa";

    if ( $conn = mysqli_connect($server, $user, $pass, $bd)) {
        echo "Conectado!";
    } else
        echo "Erro";

    function mensagem($texto, $tipo) {
        echo "<div class='alert alert-success' role='alert'>
                $texto
            </div>";
    }
?>