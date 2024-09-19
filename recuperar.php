<?php
session_start();

$media = (float) $_POST['media'];
$notarec = (float) $_POST['notarec'];

$nova_media = $media + $notarec;

if ($nova_media >= 10) {
    $msgrec = " Aluno aprovado ";
} else {
    $msgrec = " Aluno reprovado ";
}

$_SESSION['msgrec'] = $msgrec;

header('location: index.php');
exit;
?>
