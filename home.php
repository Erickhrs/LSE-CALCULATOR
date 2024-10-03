<?php
require_once('./requires/protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="shortcut icon" href="./assets/logo.ico" type="image/x-icon">
    <title>LSE - HOME</title>
    <style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        background-color: white;
    }

    #root {
        display: flex;
        flex-direction: column;
        background-color: white;
    }

    nav {
        margin-bottom: 20px;
    }

    main {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        width: 200px;
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card i {
        font-size: 40px;
        color: blue;
        margin-bottom: 10px;
    }

    .card h3 {
        margin: 10px 0;
        font-size: 1.2em;
    }

    .card p {
        color: #666;
    }

    .card a {
        text-decoration: none;
        color: inherit;
    }
    </style>
</head>

<body>
    <nav>
        <img src="./assets/logo.png" alt="logo">
    </nav>
    <main id="root">
        <div class="card">
            <a href="./calculator.php" target="_blank">
                <i class='bx bx-calculator'></i>
                <h3>Calculadora</h3>
                <p>Utilize nossa calculadora para fazer suas contas!</p>
            </a>
        </div>
        <div class="card">
            <a href="./edit_bd.php" target="_blank">
                <i class='bx bx-edit'></i>
                <h3>Editor de Preços</h3>
                <p>Edite os preços de forma rápida e fácil!</p>
            </a>
        </div>
    </main>
</body>

</html>