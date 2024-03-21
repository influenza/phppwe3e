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
      }
      else{
      echo "<script>alert('Voce precisa preencher todos os campos')</script>";
      }
  }
?>