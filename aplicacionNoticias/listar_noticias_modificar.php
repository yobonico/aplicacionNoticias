<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include 'conexion.php';

$con = conexion();
$consulta = "select id,titular,autor from noticia";


$resultado = $con->query($consulta);
$r = array();
echo "<table class='tabla_noticias' border='1'>";


while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td> <button name='borrnoticia' class='boton' type='button' onclick='BorrarNoticia(".$row["id"].")'>Borrar</button></td>";
    echo "<td> <button name='modnoticia' class='boton' type='button' onclick='ModNoticia(".$row["id"].")'>Modificar</button></td>";
    echo "<td>" . $row["titular"] . "</td>";
     echo "<td>" . $row["autor"] . "</td>";
    echo "</tr>";
}

echo "</table>";

