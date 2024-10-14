<?php
require('../requires/connection.php'); 
require('../includes/functions.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    // Verificação se o parâmetro 'product' está presente
    if (isset($_GET['product'])) {
        
        // Sanitização e validação dos parâmetros de entrada
        $width = isset($_GET['width']) && is_numeric($_GET['width']) ? (int)$_GET['width'] : 0;
        $colors = isset($_GET['colors']) ? $mysqli->real_escape_string($_GET['colors']) : '';
        $units = isset($_GET['units']) ? (int)$_GET['units'] : 0;
        $units = $_GET['height'];
        $quality = isset($_GET['quality']) ? $_GET['quality'] : '';
        $wire = isset($_GET['wire']) ? $_GET['wire'] : '';
        $ironed = isset($_GET['ironed']) ? $_GET['ironed'] : '';
        $iron_on = isset($_GET['iron-on']) ? $_GET['iron-on'] : '';
        $adhesive = isset($_GET['adhesive']) ? $_GET['adhesive'] : '';
        $virtual = isset($_GET['virtual']) ? $_GET['virtual'] : '';
        $mil = $units / 1000;
        $height = getHeight($units, $width);
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
                $price = $row[$width_column];
                $eachValue = $price  / (1000/$width);
                $finaltotal = $eachValue * 1000; // Inicializa o total para retornar

              if ($_GET['product'] == 'fg') {
                    $finaltotal = fee_quality($finaltotal, $quality);
                    $finaltotal = fee_wire($finaltotal, $wire);
                    $finaltotal = fee_virtual($finaltotal, $virtual);
                }
                $finaltotal = $finaltotal * $mil;
                $perProduct = $finaltotal/$units;
                // Calculando o preço unitário
                $product_info = [
                    'Largura (mm)' => $width,
                    'Comprimento (mm)' => $height,
                    'Qtd. de Cores' => $colors,
                    'Tipo de Fio' => $wire,
                    'Qualidade' => $quality,
                    'Tipo de Dobra' => $ironed, // Ou ajuste para a variável correta
                    'Termocolante' => $adhesive // Ou ajuste para a variável correta
                ];
                
                // Concatenando todos os detalhes do produto em uma string
                $product_details = '';
                foreach ($product_info as $key => $value) {
                    $product_details .= $key . ': ' . $value . ' / ';
                }
                
                // Removendo a barra extra no final
                $product_details = rtrim($product_details, ' / ');

                // Criando a resposta com dados do produto e preços
                $response = [
                    'product' => $product_details,
                    'price_per_label' => number_format($perProduct, 2, ',', '.'), // Preço por etiqueta
                    'quantity' => $units,
                    'total' => number_format($finaltotal, 2, ',', '.') // Total formatado
                ];

                // Retornando como JSON
                header('Content-Type: application/json');
                echo json_encode($response);

            } else {
                echo json_encode(['error' => "Nenhum resultado encontrado."]);
            }

        } else {
            echo json_encode(['error' => "Parâmetros inválidos ou incompletos."]);
        }

    } else {
        echo json_encode(['error' => "Parâmetro de produto inválido ou ausente."]);
    }

} else {
    http_response_code(405); // Método não permitido
    echo json_encode(['error' => "Método não permitido."]);
}
?>