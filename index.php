<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="fonts/icomoon/style.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />


    <link rel="shortcut icon" href="./images/logo_white.ico" type="image/x-icon">
    <title>Login - SGA</title>
</head>

<body>
    <?php if (isset($_SESSION['erro'])): ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: 'Erro!',
            text: "<?php echo addslashes($_SESSION['erro']); ?>",
            icon: 'error',
            toast: true,
            position: 'bottom-end', // 'bottom-end' for bottom right corner
            showConfirmButton: false, // Hide confirm button
            timer: 4000, // Duration in milliseconds (3 seconds)
            timerProgressBar: true // Show progress bar
        }).then(() => {
            // Clear the session
            fetch('./logout.php');
        });
    });
    </script>
    <?php endif; ?>
    <div class="d-lg-flex half">
        <div id="backgroundImg" class="bg order-1 order-md-2 fade-in"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 fade-in-down">
                        <img src="./assets/logo.png" alt="logo" id="logo">
                        <p class="mb-4">
                            Bem vindo de volta! :)
                        </p>
                        <form action="./actions/login-validate.php" method="post" class="fade-in-down">
                            <div class="form-group first">
                                <label for="user">user</label>
                                <input name="user" type="text" class="form-control" placeholder="seu nome de usuário"
                                    id="username" />
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input name="password" type="password" class="form-control" placeholder="sua senha"
                                    id="password" />
                            </div>


                            <input type="submit" value="Entrar" class="btn btn-block btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>