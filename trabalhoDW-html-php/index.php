<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <main class="pagina pagina-login">
        <h1>Entrar no 4 em 1</h1>
        <form class="cartao" action="dashboard.php" method="post">
            <div class="campo">
                <label for="iemail">E-mail</label>
                <input type="email" id="iemail" name="e-mail" autocomplete="username" required>
            </div>
            <div class="campo">
                <label for="ipassword">Senha</label>
                <input type="password" id="ipassword" name="password" autocomplete="current-password" required>
            </div>
            <button class="botao" type="submit">Entrar</button>
        </form>
    </main>
</body>
</html>
