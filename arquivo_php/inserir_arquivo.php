<?php
$arquivo = fopen("arquivo.txt", "a");
fwrite($arquivo,"Olá, este é o conteúdo do arquivo.\n");
fclose($arquivo);
?>