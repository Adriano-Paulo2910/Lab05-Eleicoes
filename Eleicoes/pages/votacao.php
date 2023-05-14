<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/votacao.css">
    <title>Cadastrar Eleitor</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Votar</h1>
            <div class="centralizar">
                <hr>
            </div>

            <div class="label-float">
                <input type="text" id="idLeitor" placeholder="" required>
                <label for="leitor">Código Leitor</label>
            </div>

            <div class="label-float">
                <input type="text" id="idCandidato" placeholder="" required>
                <label for="Candidato">Código Candidato</label>
            </div>

            <div class="label-float">
                <input type="datetime-local" id="idCandidato" required>
                <label for="data">Data Voto</label>
            </div>

            <div class="centralizar">
                <button>Cadastrar</button>
            </div>

        </div>
    </div>
</body>
</html>