<?php
     $idevento = filter_input(INPUT_POST, "titulo");
    header('Content-type: text/xml');
    try {
        $connection_string = sprintf('mysql:host=%s;dbname=%s;charset=UTF8', "127.4.148.2:3306", "sdeventos");
        $ligacao = new PDO($connection_string, "adminLPasqEM", "3Z3-g2155iRm");
        $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "select titulo,autor,data,local from eventos where idEventos = $idevento";
        $stmt = $ligacao->prepare($query);
        $stmt->execute();
        $r="<?xml version='1.0' encoding='UTF-8'?><root>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $r.= "<titulo>".$row['titulo']."</titulo>"
                    . "<autor>".$row['autor']
                    ."</autor><data>".$row['data']."</data><local>".$row['local']."</local>";
        }
        echo $r."</root>";
        /*$xml = simplexml_load_string($r);
        echo $xml;*/
    } catch (PDOException $ex) {
        $error = $ex->getMessage();
        die("erro:" . $error);
    }
    