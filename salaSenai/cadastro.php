<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
</head>

<body>

<form class="box" method="POST" action="salvar.php">
    <h1>CADASTRO</h1>

    <div class="campo">
        <label>Nome</label>
        <input type="text" name="nome" required>
    </div>

    <div class="campo">
        <label>Idade</label>
        <input type="number" name="idade" required>
    </div>

    <div class="campo">
        <label>Email</label>
        <input type="email" name="email" required>
    </div>

    <div class="campo">
        <label>Senha</label>
        <input type="password" name="senha" required>
    </div>

    <button>Cadastrar</button>
</form>

</body>
</html>
