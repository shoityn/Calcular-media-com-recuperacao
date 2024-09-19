<?php
session_start();

$msgrec = $_SESSION['msgrec'] ?? '';
$media = $_SESSION['media'] ?? '';
$msgnota=  $_SESSION['msgnota'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Calcular Média</title>
    <style>
        body {
            background-color: #f0f0f0;
            color: #c500e5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        fieldset {
            width: 100%;
            max-width: 500px;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #007bff;
        }

        .result {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            
        }

       

        .recovery {
            margin-top: 20px;
            text-align: center;
        }

    </style>
</head>
<body>
    <fieldset>
        <h2>Informe 4 notas:</h2>

        <form action="calcula.php" method="post">
            <input type="number" class="form-control" name="nota1" id="nota1" placeholder="Nota 1" required> <br>
            <input type="number" class="form-control" name="nota2" id="nota2" placeholder="Nota 2" required> <br>
            <input type="number" class="form-control" name="nota3" id="nota3" placeholder="Nota 3" required> <br>
            <input type="number" class="form-control" name="nota4" id="nota4" placeholder="Nota 4" required> <br>

            <button class="btn btn-primary" type="submit">Calcular</button>
        </form>

        <div class="result">
            <span id="media">Média: <?php echo htmlspecialchars($media) ?> </span> <br>
            <span id="msgnota"><?php echo htmlspecialchars($msgnota) ?></span>
        </div>

        <?php if ($media < 7 && $media >= 4) { ?>

        <div class="recovery">
            <form action="recuperar.php" method="post">
                <input type="number" class="form-control" name="notarec" id="notarec" placeholder="Nota de recuperação" required> <br>
                <input type="hidden" name="media" value="<?php echo $media ?>"> 
                <button class="btn btn-warning" type="submit">Recuperar</button>
            </form>
        </div>
        <?php } ?>

        <div class="result">
            <span id="msgrecuperacao"><?php echo htmlspecialchars($msgrec) ?></span>
        </div>

    </fieldset>
</body>
</html>
