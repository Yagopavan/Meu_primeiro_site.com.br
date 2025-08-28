<?php
function saudacao($nome) {
    return "Olá, $nome! Bem-vindo ao nosso site.a";
}

function nomeDaFuncao($parametro1, $parametro2 ) {
    // Corpo da função
    $resultado = $parametro1 + $parametro2;
    return $resultado;
}
    $soma = nomeDaFuncao(5, 10);
    $frase = saudacao("Maria");
    echo "$frase, resultado da soma: $soma";
?>