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