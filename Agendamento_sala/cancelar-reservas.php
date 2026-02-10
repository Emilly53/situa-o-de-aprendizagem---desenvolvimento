<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM reservas WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: minhas-reservas.php");
} else {
    echo "Erro ao cancelar reserva.";
}
?>
