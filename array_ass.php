<?php
    $pessoa = ["nome" => "João", "Idade" => 30];
    echo "Meu nome é $pessoa[nome] e eu tenho $pessoa[Idade] anos";

?>

<p> Olá aqui é um HTML: </p>

<?php
    $aluno = ["nome" => "Francisco", "idade" => 18, "nota" => 100, "nascimento" => 2007];
    $ano_atual= date('Y'); // a função date() retorna a data do Servidor
    $ano = $ano_atual - $aluno["idade"];
    echo "olá $aluno[nome], voce tem $aluno[idade] anos e sua nota é $aluno[nota]";
    echo "<p>Você nascue no ano de $ano</p>";
    $hoje = date('d-m-y');
    echo "Hoje é $hoje";
    $horas = date('h:i:s');
    echo "<p>Agora são $horas"
?>