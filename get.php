<?php

//echo $_GET['nome'];
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $sinal = $_GET['sinal'];
    $resultado = $valor1.$sinal.$valor2;
    echo $resultado;
    // o sina de + tem o papal de preencher espaços na URL, para testarmos teremos que colocar em hexadecimal : sinal = %B
if($sinal == "+"){
    echo $valor1 + $valor2;
}

if($sinal == "-"){
    echo  $valor1 - $valor2;
}
if($sinal == "*"){
    echo $valor1 * $valor2;
}
if($sinal == "/"){
    echo $valor1 / $valor2;
}