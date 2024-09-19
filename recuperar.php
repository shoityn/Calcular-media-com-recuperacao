<?php


$media =(float)$_POST['media'];
$notar =(float)$_POST['notar'];

$msgrec= '';

$nova_media=$media+$notar;


if ($nova_media >= 10) {
    $msgrec = " Aluno está aprovado ";
} else {
    $msgrec = " Aluno está reprovado ";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Recuperada</title>
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
        <h2>Média</h2>
        <span> sua nota recuperada é: <?php echo htmlspecialchars($nova_media)  ?> logo, o <?php echo htmlspecialchars($msgrec)  ?></span>
        
    </fieldset>
    
    <a href="index.html">Voltar para o ínicio</a>
</body>
</html>
