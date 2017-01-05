<?php
    $idevento = filter_input(INPUT_POST, "idevento");

    
    try {
        $connection_string = sprintf('mysql:host=%s;dbname=%s;charset=UTF8', "127.2.33.130:3306", "eventos");
        $ligacao = new PDO($connection_string, "adminpMx1Hec", "ITcMfE3D78Bj");
        $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "delete from eventos where idEventos = $idevento";
        $stmt = $ligacao->prepare($query);
        $stmt->execute();
        echo "Registo apagado com sucesso.";
    } catch (PDOException $ex) {
        $error = $ex->getMessage();
        die("erro:" . $error);
    }
    