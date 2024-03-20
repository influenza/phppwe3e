<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="container">
    <h2>Formulário</h2>
    <form action="" method="post">
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br>
        <input type="submit" id="enviar">
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["name"] == "admim" && $_POST["senha"]=="admim") {
              echo "<script>alert('ola adm')</script>";
            }
        }
    ?>
</div>
</body>
</html>
