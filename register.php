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
            <a class="employer" href="./index.php"><i class="fas fa-angle-double-left"></i></a>
        </div>

        <h2>Registrar</h2>

        <form action=""> <!--name-->
            <div class="input">
                <p>Digite seu nome</p>
                <input type="text" name="name" id="name" placeholder="Escreva seu nome" required pattern="^[a-zA-Z0-9_]+$">
                <div class="linha"></div>
            </div>

        <form action=""> <!--username-->
            <div class="input">
                <p>Digite seu nome de usuario</p>
                <input type="text" name="user" id="user" placeholder="Escreva seu usuario" required pattern="^[a-zA-Z0-9_]+$">
                <div class="linha"></div>
            </div>

            <div class="input"> <!--passord-->
                <p>Digite sua senha</p>
                <input type="password" name="password" id="password" placeholder="Escreva sua senha" required>
                <div class="linha"></div>
            </div>

            <div class="input"> <!--passord-->
                <p>Digite a mesma senha novamente</p>
                <input type="password" name="password" id="password" placeholder="Escreva sua senha" required>
                <div class="linha"></div>
            </div>

            <input type="submit" value="Registrar"> <!--Submit-->

        </form>
    </main>
</body>
</html>