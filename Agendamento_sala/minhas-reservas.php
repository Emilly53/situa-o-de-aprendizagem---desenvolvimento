<?php
include "conexao.php";
$email = "teste@senai.com";

$sql = "SELECT * FROM reservas WHERE email='$email' ORDER BY data_reserva DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Minhas Reservas</title>
<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<?php include "includes/bolhas.html"; ?>

<header>
    <h1>Sala SENAI</h1>
    <nav>
        <a href="index.html">Início</a>
        <a href="reservar.php">Reservar Sala</a>
    </nav>
</header>

<div class="container">
<h2>Minhas Reservas</h2>

<table>
<tr>
    <th>Data</th>
    <th>Início</th>
    <th>Fim</th>
    <th>Turma</th>
    <th>Finalidade</th>
    <th>Ação</th>
</tr>

<?php
if ($result->num_rows > 0) {
    while($r = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>{$r['data_reserva']}</td>
            <td>{$r['hora_inicio']}</td>
            <td>{$r['hora_fim']}</td>
            <td>{$r['turma']}</td>
            <td>{$r['finalidade']}</td>
            <td>
                <a href='cancelar_reserva.php?id={$r['id']}'
                   onclick=\"return confirm('Cancelar reserva?')\">
                    <button class='btn-cancelar'>Cancelar</button>
                </a>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6' class='sem-reservas'>
          Você ainda não realizou nenhuma reserva.
          </td></tr>";
}
?>

</table>
</div>

</body>
</html>
