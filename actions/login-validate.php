<?php
include('../includes/connection.php');
session_start();
var_dump($_POST);

if(isset($_POST['user'], $_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    // Busca o usuário pelo user
    $sql_code = "SELECT * FROM users WHERE username = '$user'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    if($sql_query->num_rows == 1) {
        $usuario = $sql_query->fetch_assoc();
        $storedPassword = $usuario['password'];

        // Verifica se a senha está correta sem criptografia
        if($password == $storedPassword) {
            // Define as variáveis de sessão
            $_SESSION['username'] = $usuario['username']; 	
            session_regenerate_id();
         header("Location: ../calculator.php");
            exit;
        } else {
            $_SESSION['erro'] = "Senha incorreta";
           header("Location: ../index.php");
        }
    } else {
        $_SESSION['erro'] = "Usuário não encontrado";
        header("Location: ../index.php");
    }
} else {
    $_SESSION['erro'] = "Preencha todos os campos";
    header("Location: ../index.php");
}
?>