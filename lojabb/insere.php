<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <title>Cadastro Cliente</title>
   </head>
<body bgcolor="white">
  <font color="yellow">
  <br><br><center><h1>Insere Dados - Cliente</h1>
  <br><br><center>
   <?php
       include (‘conecta.php’);
      
       $nome = $_POST["nome"];
       $telefone = $_POST["telefone"];
       $email = $_POST["email"];
       $senha = $_POST["senha"];


       $sql="INSERT INTO cliente (nome, telefone, email, senha) VALUES
       ('$nome','$telefone','$email','$senha')";
?>
  
</body>
</html>
