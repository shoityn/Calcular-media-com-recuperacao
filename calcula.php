<?php
$n1 =$_POST['nota1'];
$n2 =$_POST['nota2'];
$n3 =$_POST['nota3'];
$n4 =$_POST['nota4'];

$conceito= '';
$media = ($n1 + $n2 + $n3 + $n4)/4;

if($media >= 9 && $media<= 10){
   $msgnota = "Aprovado com Louvor ";
   $conceito= 'A';
 }else if($media > 7){
    $msgnota = "Aluno Aprovado ";
    $conceito= 'B';
 }elseif($media >4){
    $msgnota = "Recuperação, sua chance de passar ";
    $conceito= 'C';

 } else if($media >0){
     $msgnota = "poxa vida, vamos tentar novamente ano que vem ";
     $conceito= 'D';
 }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da média</title>
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
        <h2>Resultado da média</h2>
        <span> sua média é: <?php echo htmlspecialchars($media); ?> <br>  <?php echo htmlspecialchars($msgnota) ;     ?></span>
        
        <?php if($conceito= "C"){
        echo '<form action="recuperar.php" method="post">
            <input type="number" class="form-control" name="notar" id="notar" placeholder="Nota da Recuperação" required> <br>
            <input type="hidden" class="form-control" name="media" id="media" value='.$media.' <br>
            
            <button class="btn btn-primary" type="submit">Calcular</button>
        </form>';
        } ?>
    </fieldset>
</body>
</html>
