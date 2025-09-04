<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="border: 2px solid black; padding: 200px; width: 200px; text-align: center; align-items: center; justify-content: center; margin: auto;">
    <form action="Desafio.php" method="post">
        <label>Nome da Pessoa</label>
        <input type="text" name="pessoa">
        <input type="submit" value="Enviar">
    </form>
    </div>
    <br>
    <h3>Lista de Pessoas</h3>
    <?php
    $nome_atendimento = $post['pessoa'] ?? '';
    $arquivo = fopen("arquivo.txt", "a");
    fwrite($arquivo,"$nome_atendimento\n");
    fclose($arquivo);
        $arquivo = fopen("arquivo.txt", "r");
    while(!feof($arquivo)){
        echo fgets($arquivo) . "<br>";
    }
    fclose($arquivo);
    ?>
</body>
</html>