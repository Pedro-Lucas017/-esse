<?php
require_once "header.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><strong>Formulário de Cadastro de Países</strong></h1>
  </div>
  <br>

  <form method="POST" action="destinoFormulario.php">
    <div class="linhaUm">
      <div>
        <label for="nome">Nome</label><br>
        <input class="noome" id="nome" type="text" name="nome">
      </div>

      <div>
        <label for="populacao">População</label><br>
        <input class="poop" id="populacao" type="number" name="populacao">
      </div>
    </div>

    <br>

    <label for="bandeira">URL de uma foto/imagem da bandeira</label><br>
    <input class="baand" id="bandeira" type="url" name="bandeira"><br>
    <label class="recadoBandeira">Endereço HTML de uma imagem da Internet</label>

    <br><br>

    <label for="continente">Continente</label><br>
    <input class="coont" id="continente" type="text" name="continente">

    <br><br>

    <button class="submitB" type="submit">Gravar</button>
    <button class="resetB" type="reset">Limpar</button>

  </form>

</main>
</div>
</div>




<?php
require_once "footer.php";
?>