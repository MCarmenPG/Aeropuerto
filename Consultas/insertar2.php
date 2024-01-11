<?php
    //ejemplo para insertar con una consulta preparada con los nombres de parámetros
    include_once '../Conecta/conexion.php'; 
    $conexion = Conexion::obtenerConexion();

    //estos son los datos que suponemos  que hemos cogido de un formulario
    $nombre="Pepe";
    $apellidos="Ruiz Gómez";
    $edad=50;
    $idVuelo=2;

    //paso 1: montar la consulta prepara: es decir, la sql colocando una ? en cada valor
    $sql = "INSERT INTO pasajero (nombre,apellidos,edad,idVuelo) VALUES (:nombre,:apellidos,:edad,:idVuelo)";

    //paso 2: preparar la consula sql para su ejecución
    $sentencia = $conexion ->prepare($sql);

    //paso 3: vinculamos los parámetros de la consulta preparada con los valores de las 
    //variables correspondientes.
    $sentencia->bindParam(":nombre",$nombre);
    $sentencia->bindParam(":apellidos",$apellidos);
    $sentencia->bindParam(":edad",$edad);
    $sentencia->bindParam("idVuelo",$idVuelo);

    //Paso 4: Ejecutar la consulta preparada
    $result=$sentencia->execute();

    if($result){
        echo "<br>registro insertado correctamente<br>";
    }else {
        echo "<br>error al insertar<br>";
    }
?>