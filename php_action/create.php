<?php
//session
session_start();
require_once 'db_connect.php';
if(isset($_POST['btn-cadastrar'])):
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $datta = mysqli_escape_string($connect, $_POST['datta']);
    $nota = mysqli_escape_string($connect, $_POST['nota']);
endif;
echo $titulo;
echo $data;
echo $nota;

$sql = "INSERT INTO notas (titulo, datta, nota) VALUES ('$titulo', '$datta', '$nota')";

if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "cadastrado com sucesso!";
    header('Location: ../index.php');
else:
    $_SESSION['mensagem'] = "erro ao cadastrar";
    header('Location: ../index.php');
endif;
