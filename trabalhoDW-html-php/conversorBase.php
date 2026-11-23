<?php
$binario = '';
$decimal = '';
$octal = '';
$hexadecimal = '';
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $binario = trim($_POST['binario'] ?? '');

    if ($binario === '') {
        $erro = 'Por favor, digite um número binário.';
    } elseif (!preg_match('/^[01]+$/', $binario)) {
        $erro = 'Entrada inválida. Use apenas 0 e 1.';
    } else {
        $decimal = base_convert($binario, 2, 10);
        $octal = base_convert($binario, 2, 8);
        $hexadecimal = strtoupper(base_convert($binario, 2, 16));
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Binário</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conversorBase.css">
</head>
<body>
    <main class="pagina pagina-binario">
        <h1>Conversor binário</h1>
        <form class="cartao" method="POST">
            <div class="campo">
                <label for="binario">Número binário (base 2)</label>
                <input type="text" id="binario" name="binario" inputmode="numeric" placeholder="Ex.: 101101" value="<?= htmlspecialchars($binario) ?>" required>
            </div>
            <button class="botao" type="submit">Converter</button>
        </form>

        <?php if ($erro): ?>
            <p class="aviso aviso-erro"><?= htmlspecialchars($erro) ?></p>
        <?php endif; ?>

        <?php if ($decimal !== ''): ?>
            <section class="cartao resultado">
                <h2>Resultado da conversão</h2>
                <dl>
                    <div>
                        <dt>Decimal (base 10)</dt>
                        <dd><?= htmlspecialchars($decimal) ?></dd>
                    </div>
                    <div>
                        <dt>Octal (base 8)</dt>
                        <dd><?= htmlspecialchars($octal) ?></dd>
                    </div>
                    <div>
                        <dt>Hexadecimal (base 16)</dt>
                        <dd><?= htmlspecialchars($hexadecimal) ?></dd>
                    </div>
                </dl>
            </section>
        <?php endif; ?>

        <div class="acoes">
            <a class="botao botao-secundario" href="dashboard.php">Voltar ao painel</a>
        </div>
    </main>
</body>
</html>
