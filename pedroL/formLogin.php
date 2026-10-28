<?php
include "header.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><strong>Formulário de Autentificação</strong></h1>
  </div>

  <form action="destinoLogin.php" method="POST">
    <div style="display: flex; flex-direction: column;">
      <h4>Por favor identifique-se</h4>

      <div class="col-md-5 mb-3">
        <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Endereço de Email">
      </div>

      <div class="col-md-5 mb-3">
        <input type="password" class="form-control" id="inputPassword4" name="senha" placeholder="Senha">
      </div>

      <div class="col-md-5 mb-3">
        <button type="submit" class="btn btn-solid btn-styled theme-primary w-100" style="background-color: lightskyblue;">Entrar</button>
      </div>
    </div>
  </form>

  <?php
  include "footer.php";
  ?>