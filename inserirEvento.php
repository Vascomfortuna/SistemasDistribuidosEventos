<?php
    $titulo = filter_input(INPUT_POST, "titulo");
    $autor = filter_input(INPUT_POST, "autor");
    $data = filter_input(INPUT_POST, "data");
    $local = filter_input(INPUT_POST, "local");
    
    try {
        $connection_string = sprintf('mysql:host=%s;dbname=%s;charset=UTF8', "127.4.148.2:3306", "sdeventos");
        $ligacao = new PDO($connection_string, "adminLPasqEM", "3Z3-g2155iRm");
        $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "insert into eventos(titulo,autor,data,local) VALUES ('$titulo','$autor','$data','$local');";
        $stmt = $ligacao->prepare($query);
        $stmt->execute();
        echo "Registo inserido com sucesso.";
    } catch (PDOException $ex) {
        $error = $ex->getMessage();
        die("erro:" . $error);
    }
    