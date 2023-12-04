<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Sistema de Login </title>
        <meta charset="UTF-8" />
        <style type="text/css">
            body{
                background-color :#7CAFF5;
            }
            div.teste{
            width: 40%;
            height: auto;
            background-color: #fff;
            border: 1px solid #606060;
            padding: 50px;
            box-shadow: 0px 0px 10px #000;
            margin-top: 10%;
            margin-left: auto;
            margin-right: auto;
            }
            input[type='text'], input[type='password']{
            width: 300px;
            height: 25px;
            border: solid 1px #606060;
            border-radius: 5px;
            }
            input[type='password']{
            margin-left: 10px;
            }
            
            input[type='submit']{
            width: 150px;
            }
        </style>
    </head>
    <body>
        <div class="teste">
            <h4> Seja bem-vindo </h4>
            <?php
            session_start();

                if (isset($_SESSION["user"])) {
                    $nome = $_SESSION["user"]; 

                    echo "<b>Usuário:</b> $nome <br>";

                if (isset($_SESSION["senha"])) {
                    $senha = $_SESSION["senha"];
                    echo "<b>Senha:</b> $senha";
                } else {
                    echo "Senha não disponível";
                }
                } else {
                    echo "session não funcionou.";
                }
?>
        </div>
    </body>
</html>

