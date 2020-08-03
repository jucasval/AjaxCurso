<?php
    $a = array("Sara", "Imanol", "Dani", "Antonio", "David",
     "Igor", "Christian", "Joseba", "Angel", "Alex", "Hugo",
      "Miguel", "Esther", "Eva", "Ivan", "Pablo", "Manuel", 
      "Esther", "Aarón", "Martín", "Lorena");

    //Una vez creado el array lo codificamos a JSON.
    $miJSON = json_encode($a);
    echo $miJSON;
?>