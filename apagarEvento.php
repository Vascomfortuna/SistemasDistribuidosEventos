<?php
    $idevento = filter_input(INPUT_POST, "idevento");

    
    try {
        $connection_string = sprintf('mysql:host=%s;dbname=%s;charset=UTF8', "127.4.148.2:3306", "sdeventos");
        $ligacao = new PDO($connection_string, "adminLPasqEM", "3Z3-g2155iRm");
        $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "delete from eventos where idEventos = $idevento";
        $stmt = $ligacao->prepare($query);
        $stmt->execute();
        echo "Registo apagado com sucesso.";
    } catch (PDOException $ex) {
        $error = $ex->getMessage();
        die("erro:" . $error);
    }
    