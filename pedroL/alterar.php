<?php

require_once 'conection.php';

$id = $_GET['id'] ?? 0;

if (!$id) {
    die('País não informado.');
}

$sql = "SELECT * FROM paises WHERE id = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$pais = $stmt->get_result()->fetch_assoc();

if (!$pais) {
    die('País não encontrado.');
}

require_once 'header.php';

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Formulário de alteração de países</h1>
    </div>

    <form action="alteracao.php" method="POST">

        <input type="hidden" name="id" value="<?php echo htmlspecialchars($pais['id']); ?>">

        <div class="row mb-3">

            <div class="col-md-8">
                <label for="nome" class="form-label">Nome</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="nome" 
                    name="nome"
                    value="<?php echo htmlspecialchars($pais['nome']); ?>"
                    required
                >
            </div>

            <div class="col-md-4">
                <label for="populacao" class="form-label">População</label>
                <input 
                    type="number" 
                    class="form-control" 
                    id="populacao" 
                    name="populacao"
                    value="<?php echo htmlspecialchars($pais['populacao']); ?>"
                    required
                >
            </div>

        </div>

        <div class="mb-3">
            <label for="bandeira" class="form-label">
                URL de uma foto/imagem da bandeira
            </label>

            <input 
                type="url" 
                class="form-control" 
                id="bandeira" 
                name="bandeira"
                value="<?php echo htmlspecialchars($pais['bandeira']); ?>"
                required
            >

            <div class="form-text">
                Endereço http de uma imagem da internet
            </div>
        </div>

        <div class="mb-3">
            <label for="continente" class="form-label">Continente</label>

            <input 
                type="text" 
                class="form-control" 
                id="continente" 
                name="continente"
                value="<?php echo htmlspecialchars($pais['continente']); ?>"
                required
            >
        </div>

        <button type="submit" class="btn btn-primary">
            Gravar
        </button>

        <a href="listagem.php" class="btn btn-warning">
            Cancelar
        </a>

    </form>

</main>

</div>
</div>

<?php 
require_once 'footer.php';
?>
