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
     <link rel="shortcut icon" href="caminhodoarquivo/favicon.ico" />
     <link rel="shortcut icon" href="https://img.icons8.com/ios-glyphs/60/fa314a/teams.png" />
     <script src="https://kit.fontawesome.com/3e7f944be8.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="./style/pages.css">
     <title>Clothing Store</title>
 </head>

 <header>
        <div class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <a href="."><h1>Clothing<span>.</span>Store</h1></a>
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

            </div>

        </div>
    </section>
    </header>

    <section class="sub_menu">
        <div class="center">
            <i class="fas fa-search"></i>
            <form action="../../Projeto_PHP/index.php" method="POST">
                <H2>Clothing<span>.</span>Store <span>Busque no nosso estoque</span></H2>
                <input type="text" name="search" placeholder="Insira a pesquisa">
                <input type="submit" value="Pesquisar">
            </form>
        </div>
    </section>