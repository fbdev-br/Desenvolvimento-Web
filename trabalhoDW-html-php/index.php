<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Login</h1>
    <form action="" method="post">
        <label for="iemail">Email:</label><br>
        <input type="email" id="iemail" name="uemail" required><br>
        <label for="ipassword">Senha:</label><br>
        <input type="password" id="ipassword" name="usenha" required><br>
        <button type="submit">Entrar</button>
    </form>
    <?php
    $nome = "aluno";
    $email = "aluno@teste.com";
    $senha = "123456";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uemail = $_POST["uemail"];
        $usenha = $_POST["usenha"];

        if ($uemail === $email && $usenha === $senha) {
            session_start();
            $_SESSION["logado"] = true;
            header("Location: dashboard.php");
            exit;
        } else {
            echo "<h1>Usuário ou senha incorretos.</h1>";
        }
    }
    ?>
</body>

</html>