<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/3e7f944be8.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="./style/pages.css">
     <title>Clothing Store</title>
 </head>

 <header>
        <div class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <a href=""><h1>Clothing<span>.</span>Store</h1></a>
                </div>

                <ul class="user_login">
                <?php if(!$_SESSION['username']): ?>
                    <div class="icon_user">
                    <i class="fas fa-user-circle"></i>
                    </div>
                    <li>Usuario não logado</li>
                    <a href="login.php"><li>Entrar</li></a>
                <?php else: ?>
                    <div class="icon_user">
                        <i class="fas fa-user-circle"></i>
                    </div>
                <li></i><?php echo $_SESSION['username'];?></li>
                    <a href="logout.php"><li>Sair</li></a>
                <?php
                    endif;
                ?>
                </ul>

                <ul class="navigation">
                    <a href=""><li>Camisas</li></a>
                    <a href=""><li>Blusas</li></a>
                    <a href=""><li>Sapatos</li></a>
                    <a href=""><li>Calças</li></a>
                    <a href=""><li>Shorts</li></a>
                </ul>

            </div>

        </div>
    </section>
    </header>