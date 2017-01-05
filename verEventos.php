<?php
    try {
        $connection_string = sprintf('mysql:host=%s;dbname=%s;charset=UTF8', "127.4.148.2:3306", "sdeventos");
        $ligacao = new PDO($connection_string, "adminLPasqEM", "3Z3-g2155iRm");
        $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "select titulo,autor,data,local from eventos";
        $stmt = $ligacao->prepare($query);
        $stmt->execute();
        $r="";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $r.= "<tr><td>" . $row['titulo'] . "</td><td>"
                  . $row['autor'] . "</td><td>" . $row['data'] . "</td>"
                    . "<td>" . $row['local'] . "</td></tr>";
        }
        echo "".$r;
    } catch (PDOException $ex) {
        $error = $ex->getMessage();
        die("erro:" . $error);
    }
    