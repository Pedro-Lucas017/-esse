<?php
require_once 'conection.php';

$id = $_POST['id'] ?? 0;
$nome = $_POST['nome'] ?? '';
$populacao = $_POST['populacao'] ?? '';
$bandeira = $_POST['bandeira'] ?? '';
$continente = $_POST['continente'] ?? '';

if (
    !$id ||
    empty($nome) ||
    empty($populacao) ||
    empty($bandeira) ||
    empty($continente)
) {
    die("Erro: todos os campos devem ser preenchidos.");
}

$sql = "UPDATE paises SET nome = ?, bandeira = ?, continente = ?, populacao = ? WHERE id = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("ssssi", $nome, $imagem ,$continente, $populacao,  $id);

if ($stmt->execute()) {
    header("form-paises.php?id=" . $id);
    exit;
}

echo "Erro ao alterar o país.";