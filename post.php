<?php

//POST recebe a variavel por função
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $sinal = $_POST['sinal'];
    $resultado = $valor1.$sinal.$valor2. " = ";
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