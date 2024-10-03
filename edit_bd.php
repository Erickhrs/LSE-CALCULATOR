<?php include './includes/get_bd.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="shortcut icon" href="./assets/logo.ico" type="image/x-icon">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
        background-color: #fff;
    }

    th {
        background-color: #007BFF;
        /* Cor de fundo do cabeçalho */
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
        /* Linhas pares com fundo diferente */
    }

    tr:hover {
        background-color: #f1f1f1;
        /* Cor ao passar o mouse */
    }

    .editable {
        cursor: pointer;
        /* Muda o cursor para indicar que a célula é editável */
        transition: background-color 0.3s;
        /* Efeito de transição */
    }

    .editable:hover {
        background-color: #e2e6ea;
        /* Cor ao passar o mouse em células editáveis */
    }

    /* Estilo para os botões flutuantes */
    .floating-buttons {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        /* Espaço entre os botões */
    }

    .floating-button {
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .floating-button:hover {
        background-color: #0056b3;
        /* Cor ao passar o mouse */
    }
    </style>
</head>

<body>

    <!-- Sua tabela e conteúdo aqui -->

    <!-- Botões flutuantes -->
    <div class="floating-buttons">
        <button class="floating-button" onclick="window.location.href='./home.php'">
            <i class='bx bx-home'></i>
        </button>
        <button class="floating-button" onclick="window.location.href='./calculator.php'">
            <i class='bx bx-calculator'></i>
        </button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    // Seu código JavaScript aqui
    </script>
</body>

</html>