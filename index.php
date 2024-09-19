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
    </fieldset>
</body>
</html>
