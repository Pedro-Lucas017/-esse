<?php
require_once 'conection.php';

$id = $_GET['id'] ?? 0;

if (!$id) {
    die('País não informado.');
}

$sql = "DELETE FROM paises WHERE id = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: /listagem.php");
    exit;
}

echo "Erro ao excluir o país.";