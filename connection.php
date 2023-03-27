<?php
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "password_strong";
    $banco    = "";

    try {
        $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=9999;charset=utf8;",$usuario,$senha);
    } catch (Exception $e) {
        echo "<p>Erro ao tentar conectar</p>";
        echo $e->getMessage();
    }