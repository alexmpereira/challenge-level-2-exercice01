<?php 
    require "./connection.php";

    $sql = "select *
            from challenge
        ";
    $consulta = $pdo->prepare($sqls)
    $consulta->bindParam(":login", $login);
    $consulta->execute();

    $dados = $consulta->fetch(PDO::FETCH_OBJ);

    var_dump($dados);
?>

