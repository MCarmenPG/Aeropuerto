<?php
    include_once '../Conecta/conexion.php'; 
    $conexion = Conexion::obtenerConexion();

    $vuelo = 1;

    $sql = "Select * from pasajero where idVuelo=:id";

    $sentencia = $conexion ->prepare($sql);
    $sentencia->bindParam(":id",$vuelo);
    $result = $sentencia->execute();

    if($result){
        echo "<br> Numero de filas recuperadas: ". $sentencia -> rowCount();
    }else{
        echo "<br> ha ocurrido algun problema";
    }

  
?>