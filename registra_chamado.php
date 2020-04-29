<?php

session_start();

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$arquivo = fopen('arquivo.txt','a');



$texto =  $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' .  $descricao . PHP_EOL;

fwrite($arquivo, $texto);

fclose($arquivo);

header('Location: abrir_chamado.php');

?>