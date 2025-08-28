<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIAP</title>
</head>
<body>
    <form action="gerar_fiap.php" method="post">
        <label>Aluno 1:</label>
        <p><input type="text" name="aluno1" required><br><br></P>
        <label>Aluno 2:</label>
       <p> <input type="text" name="aluno2" required><br><br></p>
        <label>Aluno 3:</label> 
         <p> <input type="text" name="aluno3" required><br><br></p>
         <label>Observação:</label>
            <p><textarea name="observacao" rows="4" cols="50" required></textarea><br><br></p>
        <input type="submit" value="Criar FIAP">
    </form>
</body>
</html>