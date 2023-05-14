<?php

  if(isset($_POST['submit'])){

    //print_r("E-mail: ".$_POST['email']);
    //print_r("<br>");
    //print_r("Senha: ".$_POST['senha']);
    //print_r("<br>");
    //print_r("Confirmar senha: ".$_POST['confSenha']);

    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuario(email,senha) VALUES ('$email', '$senha')");
  }

?>

<!DOCTYPE html>

<html lang="pt-pt">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/criarConta.css" />
    <title>Cadastro de Usuário</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <h1>Cadastro de Usuário</h1>

        <form method = "POST" >
        
        <div class="label-float">
            <input type="email" id="email" name="email" required/>
            <label for="email">E-mail</label>
        </div>

        <div class="label-float">
          <input type="password" id="senha" name="senha" required/>
          <label for="senha">Senha</label>
        </div>

        <div class="label-float">
            <input type="password" id="confirmarSenha" name="confSenha" required/>
            <label for="confirmarSenha">Confirmar Senha</label>
        </div>


        <div class="centralizar">
          <input type="submit" name="submit" value="Entrar"/>
        </div>
        </form>

      </div>
    </div>
  </body>
</html>