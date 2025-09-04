<?php
    $arquivo = fopen("arquivo.txt", "r");
    while(!feof($arquivo)){
        echo fgets($arquivo) . "<br>";
    }
    fclose($arquivo);
?>