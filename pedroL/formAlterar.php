<?= include "header.php" ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><strong>Formulário de Alteração de Países</strong></h1>
    </div>
    <br>



    <?php require "conexao.php";

    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $bandeira = filter_input(INPUT_POST, "bandeira", FILTER_SANITIZE_URL);
    $continente = filter_input(INPUT_POST, "continente", FILTER_SANITIZE_SPECIAL_CHARS);
    $populacao = filter_input(INPUT_POST, "populacao", FILTER_SANITIZE_NUMBER_INT);

    ?>

    <div class="tudoAlt">
        <div>
            <form method="POST" action="alterar-pais.php">
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="linhaUm">
                    <div>
                        <label for="nome">Nome</label><br>
                        <input class="noome" id="nome" type="text" name="nome" value="<?= $nome ?>">
                    </div>

                    <div>
                        <label for="populacao">População</label><br>
                        <input class="poop" id="populacao" type="number" name="populacao" value="<?= $populacao ?>">
                    </div>
                </div>

                <br>

                <label for="bandeira">URL de uma foto/imagem da bandeira</label><br>
                <input class="baand" id="bandeira" type="url" name="bandeira" value="<?= $bandeira ?>"><br>
                <label class="recadoBandeira">Endereço HTML de uma imagem da Internet</label>

                <br><br>

                <label for="continente">Continente</label><br>
                <input class="coont" id="continente" type="text" name="continente" value="<?= $continente ?>">

                <br><br>

                <button class="submitB" type="submit">Gravar</button>
                <button class="resetB" type="reset">Limpar</button>

            </form>
        </div>
        <div style="margin-left: 15px;">
            <img style="border: 1px solid black" src="<?= $bandeira ?>" alt="Imagem do Páis que se quer alterar">
        </div>
    </div>



</main>
</div>
</div>





<?= include "footer.php" ?>