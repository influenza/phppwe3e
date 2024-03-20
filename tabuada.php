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
        <label for="senha">Confirme a senha:</label><br>
        <input type="password" id="consenha" name="consenha"><br>
        <input type="submit" id="enviar">
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if($_POST["senha"]!="" && $_POST["consenha"] !=""){
            $senha=$_POST["senha"];
            if ($_POST["consenha"]==$senha) {
              echo "<script>alert('Senha valida e cadastro feito')</script>";
            }
            else{
                echo "<script>alert('Senha invalida e cadastro fracassado')</script>";
            }
          }else{
            echo "<script>alert('Voce precisa preencher todos os campos')</script>";
        }
        }
    ?>
</div>
</body>
</html>