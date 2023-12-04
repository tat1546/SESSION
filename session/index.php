
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
            
            <form name="" method="post" action="">
                <label>Usuário: <input type="text" name="user" id="user"/></label><br /><br />
                <label>Senha: <input type="password" name="senha" id="senha" /></label><br /><br />
                <input type="submit" name="submit" value="Logar!" />
            </form>
            <?php
                session_start();                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $user = trim($_POST["user"]);
                    $senha = trim($_POST["senha"]);
                
                   
                    if ($user == "teste" && $senha == "123") {
                        $_SESSION["user"] = $user;
                        header("Location: result.php");
                        exit;
                    } else {
                        echo "senha ou usuário inválidos.";
                    }
                }                
            ?>
        </div>
    </body>
</html>

