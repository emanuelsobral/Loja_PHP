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


        <h2>Registrar Produto</h2>

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

        <form action="register_back_product.php" method="POST"> 
            <div class="input"> <!--name-->
                <p>Digite o titulo do produto</p>
                <input type="text" name="tittle" id="tittle" placeholder="Escreva seu nome completo" autocomplete="off"
 required>
                <div class="linha"></div>
            </div>

            <div class="input">  <!--username-->
                <p>Digite a descrição do produto</p>
                <input type="text" name="descriprion" id="descriprion" placeholder="Escreva seu usuario" required pattern="^[a-zA-Z0-9_]+$" autocomplete="off"
 required>
                <div class="linha"></div>
            </div>

            <div class="input">  <!--username-->
                <p>Escolha o tipo do produto</p>
                <select class="selectList" name="type" id="type" required >
                <optgroup label="Superior">
                    <option value="Camisa">Camisa</option>
                    <option value="Camiseta">Camiseta</option>
                    <option value="Camiseta">Camiseta Social</option>
                    <option value="Blusa">Blusa</option>
                    <option value="Jaqueta">Jaqueta</option>
                <optgroup label="Inferior">
                    <option value="Calça">Calça</option>
                    <option value="Calça_Jeans">Calça Jeans</option>
                    <option value="Calça_Social">Calça Social</option>
                <optgroup label="Pés">
                    <option value="Sapato">Sapato</option>
                    <option value="Tenis">Tenis</option>
                    <option value="Sapatenis">Sapatenis</option>
                    <option value="Sapato_Social">Sapato Social</option>
                </select>
                
            </div>

            <div class="input">  <!--username-->
                <p>Digite a marca do produto</p>
                <input type="text" name="brand" id="brand" placeholder="Escreva seu usuario" required pattern="^[a-zA-Z0-9_]+$" autocomplete="off"
 required>
                <div class="linha"></div>
            </div>

            <div class="input">  <!--username-->
                <p>Digite a cor do produto</p>
                <input type="text" name="color" id="color" placeholder="Escreva seu usuario" required pattern="^[a-zA-Z0-9_]+$" autocomplete="off"
 required>
                <div class="linha"></div>
            </div>

            <div class="input">  <!--username-->
                <p>O produto possui estampa?</p>
                    <select class="selectList" name="print" id="print">
                        <option value="SIM">SIM</option>
                        <option value="NAO">NÃO</option>
                    </select>
            </div>

            <div class="footer"> <!--Footer class--> <!--Error alert-->

            <input type="submit" value="Registrar"> <!--Submit-->

            </div>

        </form>

    </main>
</body>
</html>