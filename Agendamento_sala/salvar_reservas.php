<?php
include "conexao.php";

$email = $_POST['email'];
$turma = $_POST['turma'];
$finalidade = $_POST['finalidade'];
$data = $_POST['data'];
$inicio = $_POST['hora_inicio'];
$fim = $_POST['hora_fim'];

$sql = "INSERT INTO reservas 
(email, turma, finalidade, data_reserva, hora_inicio, hora_fim)
VALUES ('$email', '$turma', '$finalidade', '$data', '$inicio', '$fim')";

if ($conn->query($sql) === TRUE) {
    header("Location: minhas-reservas.php");
} else {
    echo "Erro ao reservar: " . $conn->error;
}
?>
