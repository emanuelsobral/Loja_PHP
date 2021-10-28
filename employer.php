<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3e7f944be8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/estilo.css">
    <title>Login</title>
</head>
<body>
    
    <main class="container"> <!--Main-->

        <div class="change">
            <a class="employer" href="./index.php"><i class="fas fa-user"></i></a>
        </div>

        <h2>Login Funcionario</h2>

        <?php
        if(isset($_SESSION['unauthenticated'])):
        ?>

        <div class="alerts">
            <div class="error_alert">
                <p>
                        <i class="fas fa-ban"></i> <!--Icon link-->
                        Usuario ou Senha erradados
                </p>
            </div>
        </div>
        <?php
        endif;
        unset($_SESSION['unauthenticated']);
        ?>

        <form action="login_employer.php" method="POST"> <!--username-->
            <div class="input">
                <input type="text" name="username" id="username" placeholder="Escreva seu usuario" pattern="^[a-zA-Z0-9_]+$" required>
                <div class="linha"></div>
            </div>

            <div class="input"> <!--passord-->
                <input type="password" name="password" id="password" placeholder="Escreva sua senha" required>
                <div class="linha"></div>
            </div>

            <input type="submit" value="Login"> <!--Submit-->

        </form>
    </main>
</body>
</html>