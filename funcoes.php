<?php
function saudacao($nome) {
    return "Olá, $nome! Seja bem-vindo ao nosso site.<br>";
}
function banco_dados($db){
    return "Conectado ao banco de dados: $db<br>";
}
function fiap($aluno1, $aluno2, $aluno3, $observacao){
    echo "<h3>Lista de aluno com observações</h3>";
    echo "<ul>";
    echo "<li> aluno1 </li>";
    echo "<li> aluno2 </li>";
    echo "<li> aluno3 </li>";
    echo "</ul>";
    echo "<p>Observação: $observacao</p>";
}
function nota($nota) {

    if ($nota >= 7) {
        echo "Aprovado com $nota.<br>";
    }
    if ($nota >= 5 && $nota < 7) {
        echo "Recuperação com $nota.<br>";
    } else {
        echo "Reprovado com $nota.<br>";
    }

}
?>