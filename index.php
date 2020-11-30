<?php
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3>Suas Notas</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Data</th>
                    <th>Nota</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th>001</th>
                    <th>Resumo TurtleNote</th>
                    <th>30/11/2020</th>
                    <th>Ver Nota</th>

                    <th><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></th>
                    <th><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></th>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Nova Nota</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>