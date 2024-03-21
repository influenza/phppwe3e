<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["name"] == "admim" && $_POST["senha"]=="admim") {
          echo "<script>alert('ola adm')</script>";
        }
    }
?>