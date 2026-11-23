<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 em 1</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <main class="pagina pagina-painel">
        <h1>4 em 1</h1>
        <?php
            $nome = "aluno";
            $email = "aluno@teste.com";
            $senha = "123456";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $eemail = $_POST["e-mail"];
                $password = $_POST["password"];

                if ($eemail === $email && $password === $senha) {
                    echo '<p class="aviso aviso-sucesso">Bem-vindo, ' . $nome . '!</p>';
                } else {
                    echo '<p class="aviso aviso-erro">Usuário ou senha incorretos.</p>';
                }
            }
        ?>
        <nav class="menu" aria-label="Ferramentas">
            <ul>
                <li><a href="conversorMoeda.php">Conversor de moeda <span>Real (BRL) para dólar (USD)</span></a></li>
                <li><a href="conversorPeso.php">Conversor de peso <span>Libras (lb) para quilos (kg)</span></a></li>
                <li><a href="sorteador.php">Sorteador de números <span>Números de 0 a 100</span></a></li>
                <li><a href="conversorBase.php">Conversor de base numérica <span>Binário para decimal, octal e hexadecimal</span></a></li>
            </ul>
        </nav>
    </main>
</body>
</html>
