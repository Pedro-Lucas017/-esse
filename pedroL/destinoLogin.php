<?php
session_start();
include "header.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><strong>Destino da Formulário de Autentificação (login)</strong></h1>
    </div>

    <?php
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<p><b>E-mail:</b> $email</p>";

    if ($email == "samuel@gmail.com" && $senha == "123") {

        $_SESSION['email'] = $email;
        $_SESSION['nome'] = "Samuel Henrique Machado dos Santos";
    ?>
        <div class="alert alert-success" role="alert">
            <h4>Autenticado com Sucesso</h4>
        </div>
    <?php
    } else {

        unset($_SESSION['email']);
        unset($_SESSION['nome']);
    ?>
        <div class="alert alert-danger" role="alert">
            <h4>Falha ao Autenticar</h4>
            <p>Usuário ou senha incorretos</p>
        </div>
    <?php
    }
    ?>

    <?php
    include "footer.php";
    ?>