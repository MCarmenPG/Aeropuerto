<?php
    /*
    Este ejemplo realiza una consulta a una BBDD utilizando PDO y mostrando los resultados
    usando el método PDO::FETCH_OBJ, que devuelve objetos anónimos con nombres de propiedades
    que se corresponden con el nombre de los campos en la tabla.
    */
    
    include_once '../Conecta/conexion.php'; 
    $conexion = Conexion::obtenerConexion();

    $sql = "Select * from pasajero";
    $sentencia = $conexion ->prepare($sql);

    $sentencia->setFetchMode(PDO::FETCH_OBJ);

    $result = $sentencia->execute();

    //$fila ahora es un objeto cuyos atributos son los nombres de los campos en la tabla
    // de la BBDD
    while($fila = $sentencia->fetch()){
        echo "<br>ID: ".$fila->idPasajero;
        echo "<br>Nombre: ".$fila->nombre;
        echo "<br>Apellidos: ".$fila->apellidos;
        echo "<br>Edad: ".$fila->edad;
        echo "<br>Numero de vuelo: ".$fila->idVuelo;
        echo "<br>";
    }

  
?>