<?php
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3>Nova Anotação</h3>
        <form>
            <div class="input-field col s12">
                <input type="text" name="titulo" id="titulo">
                <label for="titulo">Título</label>
            </div>
            <div class="input-field col s12">
                <input type="date" name="data" id="data">
                <label for="data">Data</label>
            </div>
            <div class="input-field col s12">
                <input class="input-field col s12" type="textarea" name="nota" id="nota" >
                <label for="nota">Nota</label>
            </div>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>