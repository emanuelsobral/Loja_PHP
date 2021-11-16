<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING); /*The famous GAMBIARRAAAAAA*/
include('check_login_employer.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3e7f944be8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/LoginAndRegister.css">
    <title>Login</title>
</head>
<body>
    
    <main class="container"> <!--Main-->

        <div class="change">
            <a class="employer" href="./index.php"><i class="fas fa-angle-double-left"></i></a>
        </div>


        <h2>Registrar Funcionario</h2>

        <div class="alerts">
            <?php
            if($_SESSION['user_exist']):
            ?>
            <div class="error_alert">
                <p>
                    <i class="fas fa-ban"></i> <!--Icon link-->
                    Usuario já cadastrado, tente novamente
                </p>
            </div>
            <?php
            endif;
            unset($_SESSION['user_exist']);
            ?>

            <?php
            if($_SESSION['status_register']):
            ?>
            <div class="sucess_alert">
                <p>
                    <i class="fas fa-check"></i> <!--Icon link-->
                    Usuario cadastrado com sucesso
                </p>
            </div>
            <?php
            endif;
            unset($_SESSION['status_register']);
            ?>
        </div>

        <form action="register_back_func.php" method="POST"> 
            <div class="input"> <!--name-->
                <p>Digite seu nome</p>
                <input type="text" name="name" id="name" placeholder="Escreva seu nome completo" autocomplete="off"
 required>
                <div class="linha"></div>
            </div>

            <div class="input">  <!--username-->
                <p>Digite seu nome de usuario</p>
                <input type="text" name="username" id="username" placeholder="Escreva seu usuario" required pattern="^[a-zA-Z0-9_]+$" autocomplete="off"
 required>
                <div class="linha"></div>
            </div>

            <div class="input"> <!--passord-->
                <p>Digite sua senha</p>
                <input type="password" name="password" id="password" placeholder="Escreva sua senha" required>
                <div class="linha"></div>
            </div>

            <div class="footer"> <!--Footer class--> <!--Error alert-->

            <input type="submit" value="Registrar"> <!--Submit-->

            </div>

        </form>

    </main>
</body>
</html>