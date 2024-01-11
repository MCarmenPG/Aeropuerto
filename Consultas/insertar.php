<?php
    //ejemplo para insertar con una consulta preparada con ?
    include_once '../Conecta/conexion.php'; 
    $conexion = Conexion::obtenerConexion();

    //estos son los datos que suponemos  que hemos cogido de un formulario
    $nombre="Carmen";
    $apellidos="Palacios";
    $edad=28;
    $idVuelo=1;

    //paso 1: montar la consulta prepara: es decir, la sql colocando una ? en cada valor
    $sql = "INSERT INTO pasajero (nombre,apellidos,edad,idVuelo) VALUES (?,?,?,?)";

    //paso 2: preparar la consula sql para su ejecución
    $sentencia = $conexion ->prepare($sql);

    //paso 3: vinculamos los parámetros de la consulta preparada con los valores de las 
    //variables correspondientes.
    $sentencia->bindParam(1,$nombre,PDO::PARAM_STR);
    $sentencia->bindParam(2,$apellidos,PDO::PARAM_STR);
    $sentencia->bindParam(3,$edad,PDO::PARAM_INT);
    $sentencia->bindParam(4,$idVuelo,PDO::PARAM_INT);

    //Paso 4: Ejecutar la consulta preparada
    $result=$sentencia->execute();

    if($result){
        echo "<br>registro insertado correctamente<br>";
    }else {
        echo "<br>error al insertar<br>";
    }
?>