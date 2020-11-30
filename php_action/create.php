<?php
require_once 'db_connect.php';
if(isset($_POST['btn-cadastrar'])):
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $data = mysqli_escape_string($connect, $_POST['data']);
    $nota = mysqli_escape_string($connect, $_POST['nota']);
endif;

$sql = "INSERT INTO notas ('titulo', 'data', 'nota') VALUES ('$titulo', '$data', '$nota')";

if(mysqli_query($connect, $sql)):
    header('Location: index.php?sucesso');
else:
    header('Location: index.php?erro');
endif;