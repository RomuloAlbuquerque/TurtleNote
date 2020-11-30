<?php
require_once 'db_connect.php';
if(isset($_POST['btn-cadastrar'])):

echo "até aqui ta certo";

    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $datta = mysqli_escape_string($connect, $_POST['datta']);
    $nota = mysqli_escape_string($connect, $_POST['nota']);
endif;
echo $titulo;
echo $data;
echo $nota;

$sql = "INSERT INTO notas (titulo, datta, nota) VALUES ('$titulo', '$datta', '$nota')";

if(mysqli_query($connect, $sql)):
    header('Location: index.php?sucesso');
else:
    header('Location: index.php?erro');
    
endif;
