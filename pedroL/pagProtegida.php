<?php
session_start();
include "header.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><strong>Página Protegida</strong></h1>
  </div>

  <?php
  if (!isset($_SESSION['email'])) {
  ?>
    <div class="alert alert-danger" role="alert">
      <h4>Está é uma página PROTEGIDA</h4>
      <p>você está tentando acessar um conteúdo restrito</p>
      <p>clique <a href="formLogin.php">aqui</a> para autenticar-se</p>
    </div>
  <?php

  } else {
  ?>
    <div class="text-center">
      <p class="display-4 fw-bold">
        Aula de sessões.
      </p>
      <p class="display-4">
        Esta é uma página <span class="bg-danger text-warning">PROTEGIDA</span>,
      </p>
      <p class="display-4">
        só deve ser possível acessá-la,
      </p>
      <p class="display-4">
        .
        <span class="bg-warning">após ter se autenticado (feito login)</span>.
      </p>
    </div>
  <?php
  }

  include "footer.php";
  ?>