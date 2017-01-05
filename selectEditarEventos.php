<?php

    try {
        $connection_string = sprintf('mysql:host=%s;dbname=%s;charset=UTF8', "127.4.148.2:3306", "sdeventos");
        $ligacao = new PDO($connection_string, "adminLPasqEM", "3Z3-g2155iRm");
        $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "select idEventos,titulo,autor from eventos";
        $stmt = $ligacao->prepare($query);
        $stmt->execute();
        $r="";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $r.= "<option value=\"".$row['idEventos']."\">Titulo:".$row['titulo']." / Autor:".$row['autor']."</option>";
        }
        echo "".$r;
    } catch (PDOException $ex) {
        $error = $ex->getMessage();
        die("erro:" . $error);
    }
    

