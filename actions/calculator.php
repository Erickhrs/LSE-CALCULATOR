<?php
// process_form.php

// Verifica se a requisição é do tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Aqui você pode processar os dados do formulário, se necessário
    // Exemplo: $name = $_POST['name'];

    // Retorna a resposta
    echo "ok";
} else {
    // Caso não seja uma requisição POST
    http_response_code(405); // Método não permitido
    echo "Método não permitido";
}
?>