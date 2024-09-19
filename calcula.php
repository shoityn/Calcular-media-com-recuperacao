<?php
session_start();

$msgnota = '';

$n1 =$_POST['nota1'];
$n2 =$_POST['nota2'];
$n3 =$_POST['nota3'];
$n4 =$_POST['nota4'];

$media = ($n1 + $n2 + $n3 + $n4)/4;

// echo "média = ". $media ."<br>";

if($media >= 9 && $media<= 10){
   $msgnota = "Aprovado com Louvor";
    
 }else if($media > 7){
    $msgnota = "Aluno Aprovado";
    
 }elseif($media >=4){
    $msgnota = "Recuperação, sua chance de passar";
    

 } else if($media >0){
     $msgnota = "poxa vida, vamos tentar novamente ano que vem";
    
 }

 $_SESSION['media'] = $media;
 $_SESSION['msgnota'] = $msgnota;
 header('location:index.php');
 exit;

?>