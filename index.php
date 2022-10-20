<?php
include("conectar.php");

if(isset($_POST["usuario"]) || isset($_POST["senha"])){
    if(strlen($_POST["usuario"] == 0)) {
        echo "preencha seu usuario";
    } else if(strlen($_POST["senha"]) == 0){
        echo "preencha sua senha";
    } else {
        $usuario = $mysqli->real_escape_string($_POST["usuario"]);
        $senha = $mysqli->real_escape_string($_POST["senha"]);

        $sql = "SELECT * FROM cadastros WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql) or die("falha na requisição ". $msqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();
            
            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION["user"] = $usuario["usuario"];

            header("Location: painel.php");

        } else{
            echo "Falha ao fazer login! email ou senha incorretos";
        }
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
                <input type="text" name="usuario"><br>
                <label for="">SENHA</label><br>
                <input type="password" name="senha"><br>
                <button type="submit">ENVIAR</button>
            </form>
            <a href="./cadastro.php">Cadastre-se</a>
        </div>
    </div>
</body>
</html>