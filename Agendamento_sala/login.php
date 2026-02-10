<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login</title>

<style>
/* mesmo CSS da outra tela (mantém padrão visual) */
body {
    margin: 0;
    height: 100vh;
    background: #e6e6e6;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Georgia, serif;
}

.box {
    width: 360px;
    padding: 30px;
    background: linear-gradient(to bottom, #1a00cc, #000066);
    position: relative;
}

.box::after {
    content: "";
    position: absolute;
    right: -30px;
    top: 0;
    width: 30px;
    height: 100%;
    background: linear-gradient(to bottom, #ff7a18, #cc5500);
}

h1 {
    color: white;
    text-align: center;
}

.campo {
    background: #ff7a18;
    padding: 10px;
    margin-bottom: 15px;
}

.campo label {
    color: white;
}

.campo input {
    width: 100%;
    padding: 6px;
    border: none;
}

button {
    width: 100%;
    padding: 12px;
    background: #ff7a18;
    border: none;
    border-radius: 20px;
    font-size: 22px;
    color: white;
}
</style>
</head>

<body>

<form class="box" method="POST" action="validar.php">
    <h1>LOGIN</h1>

    <div class="campo">
        <label>Email</label>
        <input type="email" name="email" required>
    </div>

    <div class="campo">
        <label>Senha</label>
        <input type="password" name="senha" required>
    </div>

    <button>Entrar</button>
    <p style="color:white; text-align:center;">
        Não tem conta? <a href="cadastro.php" style="color:white;">Crie uma</a>
    </p>
</form>

</body>
</html>
