<?php
$host = "localhost";
$user = "root";
$senha_db = "";
$db = "projeto_login";

$mysqli = new mysqli($host, $user, $senha_db, $db);

if($mysqli->error) {
    die("Nao foi possivel conectar no banco de dados: " . $mysqli->error);
}

?>
