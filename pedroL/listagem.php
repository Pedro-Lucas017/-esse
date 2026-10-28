<?php
#shift + alt + f
require_once "header.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><strong>Listagem</strong></h1>
  </div>
  <br>
  <p class="display-4">
    Esta é a página de <strong>LISTAGEM</strong>.
  </p>

  <?php
  require "conexao.php";

  $sql = "SELECT `id`, `nome`, `bandeira`, `continente`, `populacao` FROM `paises` ORDER BY nome";
  $stmt = $conn->query($sql);
  ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nome</th>
        <th scope="col">População</th>
        <th scope="col">Continente</th>
        <th scope="col">Imagem</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>

      <?php
      while ($row = $stmt->fetch()) {
      ?>

        <tr>
          <th scope="row"><?= $row["id"] ?></th>
          <td><?= $row["nome"] ?></td>
          <td><?= $row["populacao"] ?></td>
          <td><?= $row["continente"] ?></td>
          <td><a href="<?= $row["bandeira"] ?>">Link da Bandeira</a></td>
          <td>
            <form method="POST" action="formAlterar.php" style="display: inline;">
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <input type="hidden" name="nome" value="<?= $row['nome'] ?>">
              <input type="hidden" name="populacao" value="<?= $row['populacao'] ?>">
              <input type="hidden" name="continente" value="<?= $row['continente'] ?>">
              <input type="hidden" name="bandeira" value="<?= $row['bandeira'] ?>">

              <button class="altrB" >Alterar</button>
            </form>

            <a class="exclB" style="color: black;" href="excluir-pais.php?id=<?= $row["id"] ?>">Excluir</a>
          </td>
        </tr>

      <?php
      }
      ?>
    </tbody>
  </table>




</main>
</div>
</div>

<?php
require_once "footer.php";
?>