<?php
require "header.php";

$id = null;
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><strong>Página de Exclusão</strong></h1>
    </div>
    <br>

    <?php require_once "conexao.php";
    $id = $_GET['id']
    ?>

    <p><strong>ID: </strong><?= $id ?></p>

    <?php

    $sql = "DELETE FROM `paises` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$id]);


    if ($result == true) {
    ?>
        <div class="alert alert-success" role="alert">
            <h4>Dados Excluidos com Sucesso</h4>
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger" role="alert">
            <h4>Falha ao tentar excluir os dados</h4>
            <p><?= $stmt->errorCode() ?></p>
        </div>

    <?php
    }
    ?>






</main>
</div>
</div>







<?php
require "footer.php";
?>