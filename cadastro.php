<?php
    include("conectar.php");

    if(isset($_POST["cadastro_usuario"]) || isset($_POST["cadastro_senha"])){
        if(strlen($_POST["cadastro_usuario"] == 0)) {
            echo "preencha seu usuario";
        } else if(strlen($_POST["cadastro_senha"]) == 0){
            echo "preencha sua senha";
        } else {
            $usuario = $mysqli->real_escape_string($_POST["cadastro_usuario"]);
            $senha = $mysqli->real_escape_string($_POST["cadastro_senha"]);

            $defined_user = $_POST["cadastro_usuario"];
            $defined_pass = $_POST["cadastro_senha"];
    
            $sql = "INSERT INTO cadastros (usuario, senha) VALUES ('{$_POST['cadastro_usuario']}','{$_POST['cadastro_senha']}')";
            $sql_query = $mysqli->query($sql) or die("falha na requisição ". $mysqli->error);
            
            header("Location: index.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <form action="" method="post" class="formulario">
                <label for="">USUARIO</label><br>
                <input type="text" name="cadastro_usuario"><br>
                <label for="">SENHA</label><br>
                <input type="password" name="cadastro_senha"><br>
                <button type="submit">ENVIAR</button>
            </form>
            <a href="./index.php">Ja possui conta? cadastre-se</a>
        </div>
    </div>
</body>
</html>