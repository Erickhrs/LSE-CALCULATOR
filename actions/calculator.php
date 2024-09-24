<?php
require('../requires/connection.php'); 
require('../includes/functions.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    // Verificação se o parâmetro 'product' está presente e se é 'ep'
    if (isset($_GET['product'])) {
        
        // Sanitização e validação dos parâmetros de entrada
        $width = isset($_GET['width']) && is_numeric($_GET['width']) ? (int)$_GET['width'] : 0;
        $height = isset($_GET['height']) ? getHeight($_GET['height']) : 0;
        $colors = isset($_GET['colors']) ? $mysqli->real_escape_string($_GET['colors']) : '';
        $units = isset($_GET['units']) ? (int)$_GET['units'] : 0;

        // Definindo o nome da coluna com base no valor de width
        $width_column = $width > 60 ? "70-100mm" : $width . "mm";
        
        // Verifica se height e colors são válidos
        if ($height > 0 && !empty($colors)) {
            
            // Query com nome de coluna escapado com backticks
            $sql = "SELECT `$width_column` FROM tabelametros WHERE cores = '$colors' AND comprimento = '$height'";

            // Executando a query
            $result = $mysqli->query($sql);

            // Verificando se a consulta retornou um resultado
            if ($result && $row = $result->fetch_assoc()) {
                $total = $row[$width_column] * $units;
                echo $total;
            } else {
                echo "Nenhum resultado encontrado.";
            }

        } else {
            echo "Parâmetros inválidos ou incompletos.";
        }

    }else {
        echo "Parâmetro de produto inválido ou ausente.";
    }

} else {
    http_response_code(405); // Método não permitido
    echo "Método não permitido.";
}
?>