<?php

include ('conexion.php');


    header("Content-Type: text/html;charset=utf-8");
    $con = conexion();
    mysql_query("SET NAMES 'utf8'");
    $lista = array();
    $consulta = 'select * from noticia';
    $resultado = $con->query($consulta);


    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo "<h1>". $row['titular']."</h1>" . "<br> " . $row['cuerpo']."<br>";
    }
 


