<?php
require('../requires/connection.php');

// Verificando a conexão
if ($mysqli->connect_error) {
    die("Conexão falhou: " . $mysqli->connect_error);
}

// Pegando os dados do AJAX
$id = $_POST['id'];
$field = $_POST['field'];
$value = $_POST['value'];

// Mapear o índice da coluna para o nome da coluna
$columns = ['comprimento', 'cores', '12mm', '15mm', '18mm', '22mm', '25mm', '30mm', '33mm', '36mm', '40mm', '45mm', '50mm', '60mm', '70-100mm'];
$columnName = $columns[$field];

// Atualizando o valor na tabela
$sql = "UPDATE tabelametros SET $columnName = ? WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('si', $value, $id);

if ($stmt->execute()) {
    echo "Atualização realizada com sucesso!";
} else {
    echo "Erro na atualização: " . $stmt->error;
}

// Fechando a conexão
$stmt->close();
$mysqli->close();
?>