<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Senha</title>
</head>
<body>
    <h2>Formulário</h2>
    <form action="_doIndex.php" method="post">
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br>
        <label for="senha">Confirme a senha:</label><br>
        <input type="password" id="consenha" name="consenha"><br>
        <input type="submit" id="enviar">
    </form>
</body>
</html>