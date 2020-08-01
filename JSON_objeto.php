<?php
    //Para evitar que los warning salgan en la pantalla
    // y se traten como texto JSON
    error_reporting(0);

    //nos creamos un objeto vacío
    $objeto = "";
    $objeto->nombre = "Juanfran";
    $objeto->nacimiento = 1972;
    $objeto->pais = "España";

    //Una vez creado el objeto lo codificamos a JSON.
    $miJSON = json_encode($objeto);
    echo $miJSON;
?>