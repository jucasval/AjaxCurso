<?php

    //Array de nombres
    $a = array(
        "Sara", "Pepe", "María", "Juan", "Francisco", "Pedro", "Eva",
        "Lola", "María del Carmen", "Inés", "Yolanda", "Esther", "Manuel", "Miguel",
        "David", "José", "Hugo", "Luís"
    );

    //Capturamos el valor del input de la URL
    $nombre = $_REQUEST["nombre"];

    if ($nombre !== "") {
        $nombre = strtolower($nombre); //pasamos el nombre a minúsculas
        $longitud = strlen($nombre); //longitud del nombre

        //comparamos '$nombre' con los valores del array
        foreach ($a as $nom) { //cada elemento del array lo pasa a $nom en cada iteración

            if (stristr($nombre, substr($nom, 0, $longitud))) { //si coincide la cadena 
                //pasada con algunos elementos del array.
                if ($sugerencia === "") { //si no hay texto en sugerencia
                    $sugerencia = $nom;
                } else {
                    $sugerencia = $sugerencia . $nom . ", ";
                }
            }
        }
    }   

    echo ($sugerencia == "") ? "No hay sugerencias" : $sugerencia;
    
?>
