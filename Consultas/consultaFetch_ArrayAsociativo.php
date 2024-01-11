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
    $sentencia->setFetchMode(PDO::FETCH_ASSOC);

    $result = $sentencia->execute();

    while($fila = $sentencia->fetch()){
        echo "<br>ID: ".$fila["idPasajero"];
        echo "<br>Nombre: ".$fila["nombre"];
        echo "<br>Apellidos: ".$fila["apellidos"];
        echo "<br>Edad: ".$fila["edad"];
        echo "<br>Numero de vuelo: ".$fila["idVuelo"];
        echo "<br>";
    }

  
?>