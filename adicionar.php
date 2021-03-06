<?php
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3>Nova Anotação</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="datta" id="datta">
                <label for="datta">Data</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="titulo" id="titulo">
                <label for="titulo">Título</label>
            </div>
            <div class="input-field col s12">
                <textarea class="campodenota" name="nota" id="nota" cols="30" rows="10" maxlength="5000"></textarea>
                <label for="nota">Nota</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Criar Nota</button>
            <a href="index.php" class="btn green">Todas as Notas</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>