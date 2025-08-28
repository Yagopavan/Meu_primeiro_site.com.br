<h3> Este é um while loop </h3>
<?php   
    $contador = 1;
    while($contador <= 5){
        echo "Número: $contador <br>";
        $contador++;
    }
    $contador = 1;
    do {
        echo "Número: $contador <br>";
        $contador++;
    } while($contador <= 5);
?>