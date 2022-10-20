<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION["user"])){
        die("Voce nao pode acessar esta pagina <p><a href=\"index.php\">Entrar</a></p>");
    }
?>