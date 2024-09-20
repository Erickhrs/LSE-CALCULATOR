<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Calculadora</title>
</head>

<body>
    <nav>
        <img src="./assets/logo.png" alt="logo">
    </nav>
    <main id="root">
        <div id="img">
            <div id="product_info">
                <h3 id="title">Etiqueta Bordada</h3>
                <span id="bio">As etiquetas bordadas da LS Etiquetas são confeccionadas para aplicação no vestuário,
                    como
                    roupas,
                    roupas íntimas e moda praia, cama, mesa e banho. Também são usadas em tapetes, bolsas, malas, enfim,
                    na confecção em geral.

                    Indispensáveis para a identidade do produto nossas etiquetas bordadas podem ser produzidas em
                    diferentes tipos de fio, com até oito cores, variados padrões de dobra e corte, em alta definição,
                    tafetá, metalizadas, termocolantes e cortadas a laser.

                    Além de etiquetas personalizadas com marcas, logotipos, coleções e outros, a LS Etiquetas
                    confecciona etiquetas com instruções de lavagem, composição de material, tamanhos e outros padrões
                    técnicos exigidos pelo mercado.</span>
            </div>
        </div>
        <div id="calculator">
            <div class="input_container" id="product_in">
                <select name="product" id="product">
                    <?php include_once('./includes/get_products.php');?>
                </select>
            </div>

            <div id="forms">

            </div>
        </div>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./scripts/products.js"></script>

</html>