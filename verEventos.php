<?php
    try {
        $connection_string = sprintf('mysql:host=%s;dbname=%s;charset=UTF8', "127.2.33.130:3306", "eventos");
        $ligacao = new PDO($connection_string, "adminpMx1Hec", "ITcMfE3D78Bj");
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
    