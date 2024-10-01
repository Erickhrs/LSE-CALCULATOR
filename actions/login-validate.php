<?php
include('../includes/connection.php');
session_start();
var_dump($_POST);
if(isset($_POST['user'], $_POST['password'])) {
    $user = $mysqli->real_escape_string($_POST['user']);
    $password = $_POST['password'];

    // Busca o usuário pelo user
    $sql_code = "SELECT * FROM users WHERE username = '$user'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    if($sql_query->num_rows == 1) {
        $usuario = $sql_query->fetch_assoc();
        $hashedPassword = $usuario['password'];

        // Verifica se a senha está correta
        if(password_verify($password, $hashedPassword)) {
            // Define as variáveis de sessão
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['name'] = $usuario['name'];    
            $_SESSION['role'] = $usuario['role'];      
			$_SESSION['picture'] = $usuario['picture'];  	
            $_SESSION['role'] = $usuario['role'];  	
            session_regenerate_id();
            header("Location: ../index.php");
            exit;
        } else {
            //echo "Senha incorreta";
            $_SESSION['erro'] = "Senha incorreta";
           header("Location: ../index.php");
        }
    } else {
        //echo "Usuário não encontrado";
         $_SESSION['erro'] = "Usuário não encontrado";
       header("Location: ../index.php");
    }
} else {
    //echo "Preencha todos os campos";
    $_SESSION['erro'] = "Preencha todos os campos";
    header("Location: ../index.php");
}
?>