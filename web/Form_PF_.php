<?php
    $servername = "nome_do_servidor";
    $username = "nome_de_usuario";
    $password = "senha";
    $dbname = "nome_do_banco_de_dados";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    $conn->close();
?>