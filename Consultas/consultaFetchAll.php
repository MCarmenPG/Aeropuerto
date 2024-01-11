<?php
    include_once '../Conecta/conexion.php'; 
    $conexion = Conexion::obtenerConexion();

    $sql = "Select * from pasajero";
    $sentencia = $conexion ->prepare($sql);

    //Para leer necesito elegir el tipo de dato que queremos como salida
    //Para ello, hay varias constantes que determinan los distintos tipos:
    // - PDO::ASOC: Array idexado por los nombres de las columnas
    // - PDO::NUM: Array indexado por número de columna
    // - PDO::BOTH: valor por defecto. Devuelve array indexado por columnas y por números
    $sentencia->setFetchMode(PDO::FETCH_NUM);

    $result = $sentencia->execute();

    $datos=$sentencia->fetchAll();

    foreach($datos as $fila){
        echo "<br>ID: ".$fila[0];
        echo "<br>Nombre: ".$fila[1];
        echo "<br>Apellidos: ".$fila[2];
        echo "<br>Edad: ".$fila[3];
        echo "<br>Numero de vuelo: ".$fila[4];
        echo "<br>";
    }