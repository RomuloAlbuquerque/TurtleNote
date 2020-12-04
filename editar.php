<?php
//conexao
include_once 'php_action/db_connect.php';

//header
include_once 'includes/header.php';

//select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM notas WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3>Editar Nota</h3>
        <form action="php_action/update.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="datta" id="datta" value="<?php echo $dados['datta'];?>">
                <label for="datta">Data</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="titulo" id="titulo" value="<?php echo $dados['titulo'];?>">
                <label for="titulo">Título</label>
            </div>
            <div class="input-field col s12">
                <textarea class="campodenota" name="nota" id="nota" cols="30" rows="10" maxlength="5000" value="<?php echo $dados['nota'];?>"></textarea>
                <label for="nota">Nota</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Atualizar</button>
            <a href="index.php" class="btn green">Todas as Notas</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>