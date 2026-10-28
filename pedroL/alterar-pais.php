<?= include "header.php" ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><strong>Destino do Formulário (inserção)</strong></h1>
    </div>
    <br>

    <?php require "conexao.php";

    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $bandeira = filter_input(INPUT_POST, "bandeira", FILTER_SANITIZE_URL);
    $continente = filter_input(INPUT_POST, "continente", FILTER_SANITIZE_SPECIAL_CHARS);
    $populacao = filter_input(INPUT_POST, "populacao", FILTER_SANITIZE_NUMBER_INT);

    ?>

    <p><b>ID: </b><?= $id ?></p>
    <p><b>Nome: </b><?= $nome ?></p>
    <p><b>Continente: </b><?= $continente ?></p>
    <p><b>Populacao: </b><?= $populacao ?></p>
    <p><b>Bandeira: </b><?= $bandeira ?></p>

    <?php

    $sql = "UPDATE `paises` SET `nome`=?,`bandeira`=?,`continente`=?,`populacao`=? WHERE  id = ?";
    $stmt = $conn->prepare($sql);

    $result = $stmt->execute([$nome, $bandeira, $continente, $populacao, $id]);

    if ($result == true) {
    ?>
        <div class="alert alert-success" role="alert">
            <h4>Dados alterados com sucesso</h4>
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger" role="alert">
            <h4>Falha ao tentar alterar os dados</h4>
            <p><?= $stmt->errorCode() ?></p>
        </div>
    <?php
    }
    ?>




</main>
</div>
</div>





<?= include "footer.php" ?>