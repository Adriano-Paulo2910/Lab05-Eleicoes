<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastrarPartido.css">
    <title>Cadastrar Partido</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Cadastrar Partido</h1>
            <div class="centralizar">
                <hr>
            </div>
            <form method="POST">
                <div class="label-float">
                    <input type="text" id="partido" name = "partido" required>
                    <label for="partido">Nome do partido</label>
                </div>

                <div class="label-float">
                    <input type="text" id="sigla" name = "sigla" required>
                    <label for="sigla">Sigla</label>
                </div>

                <div class="label-float">
                    <input type="text" id="presidente" name = "presidente" required>
                    <label for="presidente">Presidente</label>
                </div>

                <div class="centralizar">
                    <input type="submit" name="submit" value="Cadastrar"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>