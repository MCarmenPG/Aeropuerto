<?php
    /*
    Este ejemplo realiza una consulta a una BBDD utilizando PDO y mostrando los resultados
    usando el método PDO::FETCH_CLASS
    */
    
    include_once '../Conecta/conexion.php'; 
    include_once '../Modelo/Pasajero.php';

    $conexion = Conexion::obtenerConexion();

    $sql = "Select * from pasajero";
    $sentencia = $conexion ->prepare($sql);

    $sentencia->setFetchMode(PDO::FETCH_CLASS,"Pasajero");
    $sentencia->execute();

    //$fila ahora es un objeto de la clase pasajero
    
    while($fila = $sentencia->fetch()){
        echo "<br>ID: ".$fila->getIdPasajero();
        echo "<br>Nombre: ".$fila->getNombre();
        echo "<br>Apellidos: ".$fila->getApellidos();
        echo "<br>Edad: ".$fila->getEdad();
        echo "<br>Numero de vuelo: ".$fila->getIdVuelo();
        echo "<br>";
    }

  
?>