<?php
$con = new mysqli("localhost", "root", "", "sistema_login");

if ($con->connect_error) {
    die("Erro na conexão");
}
?>
