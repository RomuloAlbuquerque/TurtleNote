<?php

//conexao
include_once 'php_action/db_connect.php';

//header
include_once 'includes/header.php';

//mensagem
include_once 'includes/mensagem.php';
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
                <?php
                $sql = "SELECT * FROM notas";
                $resultado = mysqli_query($connect, $sql);
                while ($dados = mysqli_fetch_array($resultado)) :
                ?>
                    <tr>
                        <th><?php echo $dados['id']; ?></th>
                        <th><?php echo $dados['titulo']; ?></th>
                        <th><?php echo $dados['datta']; ?></th>
                        <th><?php echo $dados['nota']; ?></th>

                        <th><a href="editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></a></th>
                        <th><a href="excluir.php?id=<?php echo $dados['id'];?>" class="btn-floating red"><i class="material-icons">delete</i></a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Nova Nota</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>