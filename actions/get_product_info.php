<?php
require('../requires/connection.php'); // Inclui o arquivo de conexão com o banco de dados

// Recebe o parâmetro 'id' via GET e o sanitiza para evitar SQL Injection
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Verifica se o ID é válido
if ($id > 0) {
    // Prepara a consulta SQL
    $sql = "SELECT * FROM products WHERE ID = $id";

    // Executa a consulta
    $result = $mysqli->query($sql);

    // Verifica se houve algum resultado
    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc(); // Converte o resultado em um array associativo
        echo json_encode(array('product' => $product)); // Retorna o produto em JSON
    } else {
        echo json_encode(array('product' => 'Nenhum resultado encontrado.'));
    }
} else {
    // Caso o ID seja inválido
    echo json_encode(array('error' => 'ID inválido.'));
}

// Fecha a conexão
$mysqli->close();
?>