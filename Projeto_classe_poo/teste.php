<?php
require_once "Usuario.php";
require_once "Professor.php";
require_once "Aluno.php";

$professor1 = new Professor("Carlos Silva", "Carlos@escola.com", "Matemática");
$professor2 = new Professor("Billy Bruto", "bruti@escola.com", "Filosofia" );

$aluno1 = new Aluno("João Santos", "joao@aluno.com", "2025A001");
$aluno2 = new ALuno("Maria Lima", "maria@aluno.com", "2025A002");

echo "<h2>Professores</h2>";
echo $professor1->exibirInfo() . "<br>";
echo $professor1->daraula() . "<br><br>";

echo $professor2->exibirInfo() . "<br>";
echo $professor2->daraula() . "<br><br>";

echo "<h2>Alunos</h2>";
echo $aluno1->exibirInfo() . "<br>";    
echo $aluno1->estudar() . "<br><br>";
echo $aluno2->exibirInfo() . "<br>";
echo $aluno2->estudar() ; "<br><br>";
