<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
<div id="container">
    <h2>Tabuada</h2>
    <form action="" method="post">
        <label for="num">Numero da tabuada:</label><br>
        <input type="text" id="num" name="num"><br>
        <label for="com">Comecar por:</label><br>
        <input type="text" id="com" name="com"><br>
        <label for="ter">terminar em:</label><br>
        <input type="text" id="ter" name="ter"><br>
        <input type="submit" id="enviar" value="Enviar">
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = (int)$_POST["num"];
            $com = (int)$_POST["com"];
            $ter = (int)$_POST["ter"];
            for (; $com <= $ter; $com++) { 
                echo $com . " x " . $num . " = " . ($num * $com) . "<br>";
            }
        }
    ?>
</div>
</body>
</html>
