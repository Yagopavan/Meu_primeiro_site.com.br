<?php
$arquivo = fopen("arquivo.txt", "w");
fwrite($arquivo, "Olá, este é o conteúdo do arquivo.\n");
fclose($arquivo);
?>