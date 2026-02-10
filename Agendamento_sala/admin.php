<main class="admin-container">

    <!-- TOPO -->
    <div class="topo-admin">
        <a href="index.html" class="btn-voltar">← Voltar</a>
        <h2 class="titulo">Reservas Cadastradas</h2>
    </div>

    <?php
    require "conexao.php";

    $sql = "SELECT * FROM reservas";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="tabela-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Data</th>
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Turma</th>
                            <th>Finalidade</th>
                        </tr>
                    </thead>
                    <tbody>';

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['email']}</td>
                    <td>{$row['data_reserva']}</td>
                    <td>{$row['hora_inicio']}</td>
                    <td>{$row['hora_fim']}</td>
                    <td>{$row['turma']}</td>
                    <td>{$row['finalidade']}</td>
                  </tr>";
        }

        echo '</tbody></table></div>';

    } else {
        echo '<div class="msg-vazia">
                <p>Nenhuma reserva cadastrada no sistema.</p>
              </div>';
    }
    ?>

</main>
