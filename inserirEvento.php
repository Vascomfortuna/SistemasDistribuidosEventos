<?php
    $titulo = filter_input(INPUT_POST, "titulo");
    $autor = filter_input(INPUT_POST, "autor");
    $data = filter_input(INPUT_POST, "data");
    $local = filter_input(INPUT_POST, "local");
    
    try {
        $connection_string = sprintf('mysql:host=%s;dbname=%s;charset=UTF8', "127.2.33.130:3306", "eventos");
        $ligacao = new PDO($connection_string, "adminpMx1Hec", "ITcMfE3D78Bj");
        $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "insert into eventos(titulo,autor,data,local) VALUES ('$titulo','$autor','$data','$local');";
        $stmt = $ligacao->prepare($query);
        $stmt->execute();
        echo "Registo inserido com sucesso.";
    } catch (PDOException $ex) {
        $error = $ex->getMessage();
        die("erro:" . $error);
    }
    