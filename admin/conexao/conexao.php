<?php

    $local = 'localhost';
    $usuario = 'root';
    $senha = '';
    $base = 'basededados';

    $conexao = new mysqli($local, $usuario, $senha, $base);

    if ($conexao->connect_error) {
        die('Error: ' .$conexao->connect_error);
    }


?>