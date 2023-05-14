<?php
  //print_r($_REQUEST);
  session_start();

  if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    //Acessa
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //print_r('Email: '.$email);
    //print_r('<br>');
    //print_r('Senha: '.$senha);

    $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

    //print_r($result);

    if(mysqli_num_rows($result) < 1)
    {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: login.php');
    }else{
      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha;
      header('Location: cadastrarPartido.php');
    }
  }


?>
<!DOCTYPE html>

<html lang="pt-pt">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <h1>Login</h1>

        <form method = "POST" action = "cadastrarPartido.php">

        <div class="label-float">
            <input type="email" id="user" name="email" placeholder="" max-length="50" required />
            <label for="user">E-mail</label>
        </div>

        <div class="label-float">
            <input type="password" id="senha" name="senha" placeholder="" max-length="30" required />
            <label for="senha">Senha</label>
        </div>

        <div class="centralizar">
            <input type="submit" name="submit" value = "Entrar"/>
        </div>
        <p>
          Não tem uma conta?
          <a href="cadastrar.php">Criar Conta.</a>
        </p>
        </form>
        
      </div>
    </div>
<?php


?>
  </body>
</html>
