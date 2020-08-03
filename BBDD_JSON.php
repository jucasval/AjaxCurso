<?php
    //IMPORTANTE: trabajar con esta cabecera para evitar futuros errores extraños
      header("Content-Type: application/json; charset=UTF-8");

    //a través del formulario recibiremos un objeto, USANDO GET
    //$objeto = json_decode($_GET["objeto"], false);

    //a través del formulario recibiremos un objeto, USANDO POST
    $objeto = json_decode($_POST["objeto"], false);
    //para hacer pruebas
    //$objeto = json_decode('{"tabla":"empleado", "valor":2000}');

    //datos conexión
    $servidor = "localhost:3306";
    $usuario = "root";
    $pass = "root";
    $bbdd = "proyectosx";

    //crear conexión
    $conexion = new mysqli($servidor, $usuario, $pass, $bbdd);

    //comprobamos la conexión
    if($conexion->connect_error){
      die("Error en la conexión: " + $conexion->connect_error);
    }else{
      //conexión correcta

      //creamos la consulta sql
      $sql = "SELECT cdemp, nombre, salario FROM $objeto->tabla WHERE 
      salario >= $objeto->valor";

      $resultado = $conexion->query($sql);

      $salida = array();
      $salida = $resultado->fetch_all(MYSQLI_ASSOC);

      echo json_encode($salida);
    }

    $conexion->close();

?>